<?php

namespace app\Http\Controllers;

class ProfileController
{
    /*
     * returns the webpage of the profile
     */
    public function show()
    {
        return view('profile');
    }
}
