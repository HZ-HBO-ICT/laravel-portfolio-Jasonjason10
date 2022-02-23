@extends('layout')
@section('content')
    <main>
        <h1>Change a grade</h1>
        <form method="POST" action="/grade{{$grades->id}}">
            @csrf
            @method('PUT')
            <div class="field">
                <label class="label" for="course_name">course</label>
                <div class="control">
                    <input class="input" required="text" type="text" name="course_name" id="course_name" value="{{$grades->title}}">
                </div>

            </div>
            <div class="field">
                <label class="label" for="test_name">test</label>
                <div class="control">
                    <textarea class="input" required="text" type="text" name="test_name" id="test_name">{{$grades->title}}</textarea>
                </div>
            </div>
            <div class="field">
                <label class="label" for="lowest_passing_grade">minimum grade</label>
                <div class="control">
                    <textarea class="input" required="text" type="text" name="lowest_passing_grade" id="lowest_passing_grade">{{$grades->title}}</textarea>
                </div>
            </div>
            <div class="field">
                <label class="label" for="best_grade">My grade</label>
                <div class="control">
                    <textarea class="input" required="text" type="text" name="best_grade" id="best_grade">{{$grades->title}}</textarea>
                </div>
            </div>

            <div class="field">
                <label class="label" for="EC">EC</label>
                <div class="control">
                    <textarea class="input" required="text" type="text" name="EC" id="EC"></textarea>
                </div>
            </div>

            <div class="field">
                <label class="label" for="Quartile">kwartaal</label>
                <div class="control">
                    <textarea class="input" required="text" type="text" name="Quartile" id="Quartile"></textarea>
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button-is-text">Submit</button>
                </div>
            </div>
        </form>
        <form method="POST" action="/dashboard/{{ $grades->id }}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>


    </main>
@endsection
