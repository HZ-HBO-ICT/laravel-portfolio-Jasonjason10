@extends('layout')
@section('content')
    <main>
        <h1>Update Blog</h1>;
        <form method="POST" action="/blog/{{$blogs->id}}">
            @csrf
            @method('PUT')
            <div class="field">
                <label class="label" for="title">title</label>
                <div class="control">
                    <input class="input" required type="text" name="title" id="title" value="{{$blogs->title}}">
                </div>
            </div>
            <div class="field">
                <label class="label" for="body">body</label>
                <div class="control">
                    <textarea class="input" required type="text" name="body" id="body">{{$blogs->body}}</textarea>
                </div>
            </div>
{{--            <div class="field">--}}
{{--                <label class="label" for="link">Link</label>--}}
{{--                <div class="control">--}}
{{--                    <input class="input" type="text" name="link" id="link">--}}
{{--                </div>--}}
            </div>
            <div class="field is-grouped">
                <div class="control">
                    <button class="button-is-text">Submit</button>
                </div>
            </div>
        </form>

        <form method="POST" action="/blog/{{ $blogs->id }}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>


    </main>
@endsection
