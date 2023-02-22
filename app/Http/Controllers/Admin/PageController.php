<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::all();

        return view('admin.pages.index', compact('pages'));
    }

    public function create()
    {
        return view('admin.pages.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->page, '-');
        $save = Page::create($data);

        if ($save) {
            return redirect()->route('admin.pages.index')->with('success', 'Registro cadastrado com sucesso.');
        } else {
            return redirect()->route('admin.pages.index')->with('fail', 'Um erro impediu o cadastro.');
        }
    }

    public function edit(Page $page)
    {
        return view('admin.pages.edit', compact('page'));
    }

    public function update(Request $request, $page)
    {
        if (! $save = Page::find($page)) {
            return redirect()->route('admin.pages.index')->with('fail', 'Um erro impediu o cadastro.');
        }

        $data = $request->only('page', 'target', 'active', 'content');
        $data['slug'] = Str::slug($request->page, '-');

        $save->update($data);

        return redirect()->route('admin.pages.index')->with('success', 'Registro cadastrado com sucesso.');
    }

    public function destroy(Page $page)
    {
        if ($page->delete()) {
            return redirect()->route('admin.pages.index')->with('success', 'Registro excluído com sucesso.');
        } else {
            return redirect()->route('admin.pages.index')->with('fail', 'Um erro ocorreu na tentativa de exclusão');
        }
    }
}
