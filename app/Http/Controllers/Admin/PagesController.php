<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;

use App\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function index() {
        return view('admin.pages.index', [
            'pages' => Page::paginate(10)
        ]);
    }
    public function create()
    {
        return view('admin.pages.create', [
          'page'    => [],
          'delimiter'  => ''
        ]);
    }
    public function store(Request $request)
    {
        $page = Page::create($request->all());

        return redirect()->route('admin.page.index');
    }
    public function edit(Page $page)
    {
        return view('admin.pages.edit', [
          'page'    => $page,
          'delimiter'  => ''
        ]);
    }
    public function update(Request $request, Page $page)
    {
        $page->update($request->except('slug'));

        return redirect()->route('admin.page.index');
    }
    public function destroy(Page $page)
    {
        $page->delete();

        return redirect()->route('admin.page.index');
    }
}
