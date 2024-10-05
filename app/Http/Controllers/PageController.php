<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::all();

        return view('admin.visitor', compact('pages'));
    }

    public function homepage()
    {
        $pages = Page::all()->chunk(3);

        return view('homepage', compact('pages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        Page::create($request->all());

        return redirect()->route('visitor');
    }

    public function show($id)
    {
        $pages = Page::find($id);
        $pages->visitors = $pages->visitors + 1;
        $pages->save();

        return redirect()->route('pages', $id);
    }

    public function pages($id)
    {
        $pages = Page::find($id);

        return view('pages', compact('pages'));
    }
}
