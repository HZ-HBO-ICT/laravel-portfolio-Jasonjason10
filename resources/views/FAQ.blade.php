@extends('layout')
@section('content')

<main>
    <title>FAQ</title>
    <header>
        <h1>This is my FAQ page</h1>
    </header>
    <article>
        <h1>Veel gestelde vragen</h1>
        <ul>
            @foreach($posts as $post)
                <li>{{ $post->questions }}</li>
            @endforeach
        </ul>
        <ul>
            @foreach($posts as $post)
                <li>{{ $post->answers }}</li>
            @endforeach
        </ul>
    </article>
</main>
@endsection
