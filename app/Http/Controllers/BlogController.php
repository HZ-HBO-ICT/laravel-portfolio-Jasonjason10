<?php

namespace app\Http\Controllers;

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
}
