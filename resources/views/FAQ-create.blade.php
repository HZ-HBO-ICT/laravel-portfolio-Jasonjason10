@extends('layout')
@section('content')
    <main>
        <form method="post" action="/FAQ">
            @csrf
            <div class="field">
                <label class="label" for="questions">Question</label>
                <div class="control">
                    <input class="input" type="text" name="questions" id="questions">
                </div>
            </div>
            <div class="field">
                <label class="label" for="answer">Answer</label>
                <div class="control">
                    <textarea class="input" type="text" name="answers" id="answers"></textarea>
                </div>
            </div>
            <div class="field">
                <label class="label" for="link">Link</label>
                <div class="control">
                    <input class="input" type="text" name="link" id="link">
                </div>
            </div>
            <div class="field is-grouped">
                <div class="control">
                    <button class="button-is-text">Submit</button>
                </div>
            </div>
        </form>


    </main>

@endsection
