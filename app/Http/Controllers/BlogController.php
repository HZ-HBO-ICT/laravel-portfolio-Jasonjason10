<?php

namespace app\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class BlogController
{
    /*
     * returns the webpage of the blog
     */
    public function show()
    {
        $blog = Article::all();

        return view('blog', ['blogs' => $blog]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Article::all();

        return view('blog', ['blogs' => $blog]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog-create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Article::create($request->validate([
            "title" => "required",
            "body" => "required",
        ]));

        return redirect(route('blog.index'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $blog)
    {
        return view('blog-edit', ['blog' => $blog]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $blog)
    {
        $blog->update($request->validate([
            "title" => "required",
            "body" => "required",
        ]));
        return redirect(route('blog.show', $blog));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $blog)
    {
        $blog->title = request('title');
        $blog->body = request('body');
        $blog->delete();
        return redirect(route('blog.show', $blog));
    }
}
