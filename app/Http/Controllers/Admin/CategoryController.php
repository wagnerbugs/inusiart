<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::get();

        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->category, '-');
        $save = Category::create($data);

        if ($save) {
            return redirect()->route('admin.categories.index')->with('success', 'Registro cadastrado com sucesso.');
        } else {
            return redirect()->route('admin.categories.index')->with('fail', 'Um erro impediu o cadastro.');
        }
    }

    public function edit(Category $category)
    {
        $products = Product::where('category_id', $category->id)->count();

        return view('admin.categories.edit', compact('category', 'products'));
    }

    public function update(Request $request, $category)
    {
        if (! $save = Category::find($category)) {
            return redirect()->route('admin.categories.index')->with('fail', 'Um erro impediu o registro.');
        }

        $data = $request->all();
        $data['slug'] = Str::slug($request->category, '-');
        $save->update($data);

        return redirect()->route('admin.categories.index')->with('success', 'Registro atualizado com sucesso.');
    }

    public function destroy(Category $category)
    {
        //Verifica se a categoria foi usada em alguma postagem
        $products = Product::where('category_id', $category->id)->count();

        if ($products >= 1) {
            return redirect()->route('admin.categories.index')->with('fail', 'Existem '.$products.' produtos com esta categoria. Altere a categoria dos produtos antes de excluí-la.');
        } else {
            $category->delete();

            return redirect()->route('admin.categories.index')->with('success', 'Registro excluído com sucesso.');
        }
    }
}
