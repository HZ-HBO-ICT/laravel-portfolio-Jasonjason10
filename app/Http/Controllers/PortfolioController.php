<?php

namespace App\Http\Controllers;

use App\Models\persons;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Portfolio;

use Database;

class PortfolioController
{
    /*
     * returns the blog safari page
     */
    public function show($name)
    {
        $persons = persons::where('name', $name)->firstOrFail();
//        dd($persons);
        return view("portfolio", [
            'persons' => $persons
        ]);
    }
}
