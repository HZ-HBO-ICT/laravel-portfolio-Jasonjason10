@extends('layout')
@section('content')
    <main>
        <h1>create a Blog post</h1>
        <form method="POST" action="/blog">
            @csrf
            <div class="field">
                <label class="label" for="title">title</label>
                <div class="control">
                    <input class="input" required="text" type="text" name="title" id="title">
                </div>
            </div>
            <div class="field">
                <label class="label" for="body">body</label>
                <div class="control">
                    <textarea class="input" required="text" type="text" name="body" id="body"></textarea>
                </div>
            </div>
{{--            <div class="field">--}}
{{--                <label class="label" for="link">Link</label>--}}
{{--                <div class="control">--}}
{{--                    <input class="input" type="text" name="link" id="link">--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="field is-grouped">
                <div class="control">
                    <button class="button-is-text">Submit</button>
                </div>
            </div>
        </form>


    </main>
@endsection
