<?php

namespace app\Http\Controllers;

class BlogController
{
    /*
     * returns the webpage of the blog
     */
    public function show()
    {
        return view('blog');
    }
}
