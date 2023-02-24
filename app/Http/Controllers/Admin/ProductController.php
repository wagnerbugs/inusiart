<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    public function store(StoreProductRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->product, '-');

        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            //gerando novo nome para o arquivo
            $imageName = md5($request->image->hashName());

            //gerando a imagem 1:1 ratio
            $image = Image::make($request->image)->fit(600);

            //armazenando a imagem
            Storage::disk('public')->put('images/product/'.$imageName.'.webp', $image->encode());

            $data['image'] = $imageName.'.webp';
        }

        $save = Product::create($data);

        if ($save) {
            return redirect()->route('admin.products.index')->with('success', 'Registro cadastrado com sucesso.');
        } else {
            return redirect()->route('admin.products.index')->with('fail', 'Um erro impediu o cadastro.');
        }
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function update(UpdateProductRequest $request, $product)
    {
        if (! $save = Product::find($product)) {
            return redirect()->route('admin.products.index')->with('fail', 'Um erro impediu o cadastro.');
        }

        $data = $request->all();
        $data['slug'] = Str::slug($request->product, '-');

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            //excluindo imagem anterior
            if (Storage::exists('images/product/'.$save->image)) {
                Storage::delete('images/product/'.$save->image);
            }

            //gerando novo nome para o arquivo
            $imageName = md5($request->image->hashName());

            //gerando a imagem 1:1 ratio
            $image = Image::make($request->image)->fit(600);

            //armazenando a imagem
            Storage::disk('public')->put('images/product/'.$imageName.'.webp', $image->encode());

            $data['image'] = $imageName.'.webp';
        }

        $save->update($data);

        return redirect()->route('admin.products.index')->with('success', 'Registro cadastrado com sucesso.');
    }

    public function destroy(Product $product)
    {
        if (Storage::exists('images/product/'.$product->image)) {
            Storage::delete('images/product/'.$product->image);
        }

        $delete = Product::where('id', $product->id)->delete();

        if ($delete) {
            return redirect()->back()->with('success', 'Registro excluído com sucesso.');
        } else {
            return redirect()->back()->with('fail', 'Um erro ocorreu na tentativa de exclusão');
        }
    }
}
