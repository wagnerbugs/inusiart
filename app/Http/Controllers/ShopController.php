<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->where('active', 1)->where('stock', '>=', 1)->get();
        return view('site.shop', compact('products'));
    }

    public function show($product)
    {
        $product = Product::with('category')->where('slug', $product)->first();

        $relateds = Product::with('category')
        ->where('category_id', $product->category_id)
        ->where('id', '<>', $product->id)
        ->where('stock', '>=', 1)
        ->where('active', 1)
        ->limit(10)
        ->get();

        return view('site.shop-show', compact('product', 'relateds'));
    }

    public function store(Request $request)
    {
        $product = Product::findOrFail($request->product_id);

        if(isset($product->value_discount)) {
            $price = $product->value_discount;
        } else {
            $price = $product->value;
        }

        $totalPrice = $price *$request->quantity;

        Session::push('cart', [
            'key' => time(),
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'price' => $totalPrice
        ]);

        Session::save();

        return back()->with('info', 'Produto adicionado com sucesso.');
    }

    public function cart()
    {
        if (!Session::has('cart')) {
            return view('site.shop-cart');
        }

        $getCount = count(array_column(Session::get('cart'), 'price'));
        $getTotalBR = number_format(array_sum(array_column(Session::get('cart'), 'price')), 2, ',', '.');
        $getTotal = number_format(array_sum(array_column(Session::get('cart'), 'price')), 2, '.', ',');
        $getTotalGlobal = number_format(array_sum(array_column(Session::get('cart'), 'price')), 2, '.', ',');
        $getTotalGlobalBR = number_format(array_sum(array_column(Session::get('cart'), 'price')), 2, ',', '.');

        return view('site.shop-cart', compact(
            'getCount',
            'getTotalBR',
            'getTotal',
            'getTotalGlobal',
            'getTotalGlobalBR'
            )
        )->with('carts', Session::get('cart'));

    }
}
