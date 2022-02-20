<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Article;

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
        $blogs = new Article();

        $blogs->title = request('title');
        $blogs->body = request('body');
        $blogs->save();

        return redirect('/blog');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blogs = Article::find($id);
        return view('blog-edit', ['blogs' => $blogs]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blogs = Article::find($id);

        $blogs->title = request('title');
        $blogs->body = request('body');
        $blogs->save();
        return redirect('/blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
