<?php

namespace app\Http\Controllers;

use App\Models\Faq;

use Illuminate\Http\Request;

class FAQController
{
    /*
     * returns the FAQ page
     */
    public function show()
    {
        $FAQ = Faq::all();
        return view('FAQ/{FAQ}', [
            'FAQ' => $FAQ
        ]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $FAQ = Faq::all();
        return view('FAQ', [
            'FAQ' => $FAQ
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('FAQ-create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $post = new Faq();
        Faq::create($request->validate([
            "questions" => "required",
            "answers" => "required",
        ]));


        return redirect(route('FAQ.index'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Faq $FAQ)
    {
//        $post = Faq::findOrFail($id);
        return view('FAQ-edit', [
            'FAQ' => $FAQ
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faq $FAQ)
    {
        $FAQ->update($request->validate([
            "questions" => "required",
            "answers" => "required",
        ]));
//        $post = Faq::findOrFail($id);
//        $post->questions = request('questions');
//        $post->answers = request('answers');
//        $post->save();
        return redirect(route('FAQ.show', $FAQ));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq $FAQ)
    {
//        $post = Faq::findOrFail($id);
        $FAQ->questions = request('questions');
        $FAQ->answers = request('answers');
        $FAQ->delete();
        return redirect(route('FAQ.show', $FAQ));
    }
}
