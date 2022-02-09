<?php

namespace app\Http\Controllers;

class FAQController
{
    /*
     * returns the FAQ page
     */
    public function show()
    {
        return view('FAQ');
    }
}
