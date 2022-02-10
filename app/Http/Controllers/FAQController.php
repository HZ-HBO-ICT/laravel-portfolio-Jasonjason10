<?php

namespace app\Http\Controllers;

use App\Models\Faq;

class FAQController
{
    /*
     * returns the FAQ page
     */
    public function show()
    {
        $posts = Faq::all();
        return view('FAQ', [
            'posts'=>$posts
        ]);
    }
}
