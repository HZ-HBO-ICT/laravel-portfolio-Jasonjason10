@extends('layout')
@section('content')
    <main>
        <form method="POST" action="/FAQ/{{$FAQ->id}}">
            @csrf
            @method("PUT")
            <div class="field">
                <label class="label" for="questions">Question</label>
                <div class="control">
                    <input class="input" required="text" type="text" name="questions" id="questions" value="{{$FAQ->questions}}">
                </div>
            </div>
            <div class="field">
                <label class="label" for="answers">Answer</label>
                <div class="control">
                    <textarea class="input" required="text" type="text" name="answers" id="answers">{{$FAQ->answers}}</textarea>
                </div>
            </div>
            <!-- <div class="field">
                <label class="label" for="link">Link</label>
                <div class="control">
                    <input class="input" type="text" name="link" id="link">
                </div>
            </div> -->
            <div class="field is-grouped">
                <div class="control">
                    <button class="button-is-text">Submit</button>
                </div>
            </div>
        </form>

        <form method="POST" action="/FAQ/{{ $FAQ->id }}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>


    </main>
@endsection
