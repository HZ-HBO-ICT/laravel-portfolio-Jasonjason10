<?php

namespace app\Http\Controllers;

use App\Models\Grades;

class DashboardController
{
    /*
     * returns the dashboard page
     */
    public function show()
    {
        $grades = Grades::all();
        return view('dashboard', ['grades' => $grades]);
    }
}
