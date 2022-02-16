@extends('layout')
@section('head-content')
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        header {
            color: white;
        }
        #cijfer {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
            color: white;
        }

        #cijfer td,
        #cijfer th {
            border: 1px solid #ddd;
            padding: 8px;
        }



        #cijfer tr:hover {
            background-color: #ddd;
        }

        #cijfer th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;


        }
        #tablehead {
            background-color: white;

        }
        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }


    </style>
</head>
@endsection

@section('content')

<main>


    <header>
        Studievoortgang
    </header>



    <div class="table">
        <table id="cijfer">
            <div id="tablehead">
                <tr>
                    <th>Quartile</th>
                    <th>Courses </th>
                    <th>Exams</th>
                    <th>Grades</th>
                    <th>EC</th>
                </tr>
                @foreach($grades as $grade)
                <tr>
                    <td>{{$grade->Quartile}}</td>
                    <td>{{$grade->course_name}}</td>
                    <td>{{$grade->test_name}}</td>
                    <td>{{$grade->best_grade}}</td>
                    <td>{{$grade->EC}}</td>
                </tr>
                @endforeach
            </div>



{{--            <tr>--}}
{{--                <td>Program- and Career Orientation</td>--}}
{{--                <td>2,5</td>--}}
{{--                <td>Assessment exam</td>--}}
{{--                <td>-</td>--}}


{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td>Programming Basics</td>--}}
{{--                <td>5</td>--}}
{{--                <td> Case study exam</td>--}}
{{--                <td>-</td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td>2</td>--}}
{{--                <td>Object-oriented programming</td>--}}
{{--                <td>10</td>--}}
{{--                <td>Case Study, Project</td>--}}
{{--                <td>-</td>--}}
{{--            </tr>--}}

{{--            <tr>--}}
{{--                <td rowspan="2">3</td>--}}
{{--                <td>Framework Development 1</td>--}}
{{--                <td>5</td>--}}
{{--                <td>Case study</td>--}}
{{--                <td>-</td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td>Framework Project 1</td>--}}
{{--                <td>7.5</td>--}}
{{--                <td>Project, Assessment, Report</td>--}}
{{--                <td>-</td>--}}

{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td>4</td>--}}
{{--                <td>Framework Project 2</td>--}}
{{--                <td>10</td>--}}
{{--                <td>Portfolio, Project, Assessment</td>--}}
{{--                <td>-</td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td rowspan="2"> Hele jaar</td>--}}
{{--                <td>PPD</td>--}}
{{--                <td>12,5</td>--}}
{{--                <td>Portfolio</td>--}}
{{--                <td>-</td>--}}


{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td>IT Personality</td>--}}
{{--                <td>2,5</td>--}}
{{--                <td>-</td>--}}
{{--                <td>-</td>--}}
{{--            </tr>--}}

        </table>
    </div>

    </div>

    <div class="container">
        <h3>NBSA Progress</h3>
        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"
                 style="width:0%">
                0%
            </div>


</main>
@endsection
