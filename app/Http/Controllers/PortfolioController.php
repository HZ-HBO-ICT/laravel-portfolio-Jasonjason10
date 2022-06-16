<?php

namespace App\Http\Controllers;

use App\Models\Person;
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
        $Persons = Person::where('name', $name)->firstOrFail();
//        dd($persons);
        return view("portfolio", [
            'persons' => $Persons
        ]);
    }
}
