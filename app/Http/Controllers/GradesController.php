<?php

namespace App\Http\Controllers;

use App\Models\Grades;
use Illuminate\Http\Request;

class GradesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grade = Grades::all();
        return view('grades.index', ['grades' => $grade]);
    }


    public function show()
    {
        $grade = Grades::all();
        return view('dashboard', ['grades' => $grade]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('grade.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Grades::create($request->validate([
            "course_name" => "required",
            "test_name" => "required",
            "lowest_passing_grade" => "required",
            "best_grade" => "required",
            "EC" => "required",
            "Quartile"=> "required",
        ]));

        return redirect(route('dashboard.show'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Grades  $grade
     * @return \Illuminate\Http\Response
     */
    public function edit(Grades $grade)
    {
        return view('grade.edit', [
            'grade' => $grade
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Grades  $grades
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grades $grade)
    {
        $grade->update($request->validate([
            "course_name" => "required",
            "test_name" => "required",
            "lowest_passing_grade" => "required",
            "best_grade" => "required",
            "EC" => "required",
            "Quartile"=> "required",
        ]));

        return redirect(route('dashboard.show', $grade));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grades  $grades
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grades $grade)
    {
        $grade->course_name=request('course_name');
        $grade->test_name=request('test_name');
        $grade->lowest_passing_grade=request('lowest_passing_grade');
        $grade->best_grade=request('best_grade');
        $grade->EC=request('EC');
        $grade->Quartile=request('Quartile');
        $grade->delete();
        return redirect(route('dashboard.show', $grade));
    }
}
