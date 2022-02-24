<?php

namespace app\Http\Controllers;

use App\Models\Grade;

class DashboardController
{
    /*
     * returns the dashboard page
     */
    public function show()
    {
        $grades = Grade::all();
        return view('dashboard', ['grades' => $grades]);
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
        Grade::create($request->validate([
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
     * @param  \App\Models\Grade  $grades
     * @return \Illuminate\Http\Response
     */
    public function edit(Grade $grades)
    {
        return view('grade.edit', [
            'grades' => $grades
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Grade  $grades
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grade $grades)
    {
        $grades->update($request->validate([
            "course_name" => "required",
            "test_name" => "required",
            "lowest_passing_grade" => "required",
            "best_grade" => "required",
            "EC" => "required",
            "Quartile"=> "required",
        ]));

        return redirect(route('dashboard.show', $grades));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grade  $grades
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grade $grades)
    {
        $grades->course_name=request('course_name');
        $grades->test_name=request('test_name');
        $grades->lowest_passing_grade=request('lowest_passing_grade');
        $grades->best_grade=request('best_grade');
        $grades->EC=request('EC');
        $grades->Quartile=request('Quartile');
        $grades->delete();
        return redirect(route('dashboard.show', $grades));
    }
}
