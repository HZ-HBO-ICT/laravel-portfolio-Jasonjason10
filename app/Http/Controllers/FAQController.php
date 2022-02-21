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
        $posts = Faq::all();
        return view('FAQ', [
            'posts' => $posts
        ]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
//
//        $post->questions = request('questions');
//        $post->answers = request('answers');
//        $post->save();

        return redirect(route('faq.show'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Faq $post)
    {
//        $post = Faq::findOrFail($id);
        return view('FAQ-edit', [
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faq $post)
    {
        $post->update($request->validate([
            "questions" => "required",
            "answers" => "required",
        ]));
//        $post = Faq::findOrFail($id);
//        $post->questions = request('questions');
//        $post->answers = request('answers');
//        $post->save();
        return redirect(route('faq.show', $post));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq $post)
    {
//        $post = Faq::findOrFail($id);
        $post->questions = request('questions');
        $post->answers = request('answers');
        $post->delete();
        return redirect(route('faq.show', $post));
    }
}
