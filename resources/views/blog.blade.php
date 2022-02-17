@extends('layout')
@section('content')
    <main>
        <title>Blog</title>
        <section>
            @foreach($blogs as $blog);
            <h1>{{$blog->title}}</h1>

            <p>  {{$blog->body}}</P>
            @endforeach

        </section>

        <section>
            <h1>SWOT-Analyse</h1>
            <table border="1">
                <th>Strengths</th>
                <th>Weaknesses</th>
                <tr>
                    <td>Ik ben een erg gemotiveerd. En ik ben een harde werker die niet snel opgeeft.</td>
                    <td>Soms kijk ik te moeilijk naar een probleem, waardoor ik een makkelijkere en snellere oplossing
                        pas
                        later zie.
                    </td>
                </tr>
                <th>Opportunties</th>
                <th>Threats</th>
                <tr>
                    <td>Veel te leren over programeren en nieuwe mensen te ontmoeten.</td>
                    <td>Dat ik door de coronacrisis nog online les heb en ik daardoor minder goed les krijg.</td>
                </tr>
            </table>
        </section>
    </main>
@endsection
