@extends('layout')
@section('content')
    <main>
        <h1>Add a grade</h1>
        <form method="POST" action="/grade">
            @csrf
            <div class="field">
                <label class="label" for="course_name">course</label>
                <div class="control">
                    <input class="input" required="text" type="text" name="course_name" id="course_name">
                </div>
            </div>
            <div class="field">
                <label class="label" for="test_name">test</label>
                <div class="control">
                    <textarea class="input" required="text" type="text" name="test_name" id="test_name"></textarea>
                </div>
            </div>
            <div class="field">
                <label class="label" for="lowest_passing_grade">minimum grade</label>
                <div class="control">
                    <textarea class="input" required="text" type="text" name="lowest_passing_grade" id="lowest_passing_grade"></textarea>
                </div>
            </div>
            <div class="field">
                <label class="label" for="best_grade">My grade</label>
                <div class="control">
                    <textarea class="input" required="text" type="text" name="best_grade" id="best_grade"></textarea>
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


    </main>
@endsection
