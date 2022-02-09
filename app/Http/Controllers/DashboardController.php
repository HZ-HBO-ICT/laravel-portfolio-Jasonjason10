<?php

namespace app\Http\Controllers;

class DashboardController
{
    /*
     * returns the dashboard page
     */
    public function show()
    {
        return view('dashboard');
    }
}
