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
        $blogs = Article::all();

        return view('blog', ['blogs' => $blogs]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
//        $blogs = new Article();
        Article::create($request->validate([
            "title" => "required",
            "body" => "required",
        ]));
//
//        $blogs->title = request('title');
//        $blogs->body = request('body');
//        $blogs->save();

        return redirect(route('blog.show'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $blogs)
    {
//        $blogs = Article::findOrFail($id);
        return view('blog-edit', ['blogs' => $blogs]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $blogs)
    {
//        $blogs = Article::findOrFail($id);

        $blogs->update($request->validate([
            "title" => "required",
            "body" => "required",
        ]));

//        $blogs->title = request('title');
//        $blogs->body = request('body');
//        $blogs->save();
        return redirect(route('blog.show', $blogs));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $blogs)
    {
//        $blogs = Article::findOrFail($id);

        $blogs->title = request('title');
        $blogs->body = request('body');
        $blogs->delete();
        return redirect(route('blog.show', $blogs));
    }
}
