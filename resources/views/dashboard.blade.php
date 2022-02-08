<!DOCTYPE html>
<html>

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

<body>

<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <img src="https://vmh-hbo.nl/wp-content/uploads/2018/06/hz-logo.jpg" alt="HZ logo" width="180" height="150">
    <a href="https://hz.nl/over-de-hz/regelingen-documenten-1/onderwijs-en-examenregelingen" target="_blank"
       rel="noopener noreferrer">Onderwijs-en-examenregelingen</a>
    <a href="https://apps.hz.nl/angular/studievoortgang/studiestatus" target="_blank"
       rel="noopener noreferrer">Studievoortgang</a>
    <a href="https://learn.hz.nl/" target="_blank" rel="noopener noreferrer">Learn HZ</a>
    <a href="https://hz.nl/uploads/documents/Regelingen/OERS/2019-2020/2020-2021-ICT-Implementation-Regulations-CER-HZ-DEF1.0.pdf"
       target="_blank" rel="noopener noreferrer">Uitvoersregeling</a>
    <a href="https://github.com/" target="_blank" rel="noopener noreferrer">Github</a>
    <a href="https://teams.microsoft.com/l/team/19%3a827654897ab746089c081f24aff1c984%40thread.skype/conversations?groupId=337e8cca-f67d-4132-9fa9-b0c761bbeb94&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c"
       target="_blank" rel="noopener noreferrer">Teams HBO-ICT</a>

</div>


<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>

<script>
    function openNav() {
        document.getElementById("mySidenav").style.display = "block";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.display = "none";
    }
</script>

<nav>
    <ul>
        <li><a href="/"> Home</a></li>
        <li><a href="profile">Profile</a></li>
        <li><a href="FAQ">FAQ</a></li>
        <li><a href="dashboard">Dashboard</a></li>
        <li><a href="blog">Blog</a></li>
    </ul>
</nav>

<main>


    <header>
        Studievoortgang
    </header>



    <div class="table">
        <table id="cijfer">
            <div id="tablehead">
                <tr>
                    <th>Kwartaal</th>
                    <th>Vakken</th>
                    <th>Studiepunten</th>
                    <th>Toetsen</th>
                    <th>Cijfers</th>
                </tr>
            </div>
            <tr>
                <td rowspan="3">1</td>
                <td>Computer science basics </td>
                <td>5</td>
                <td>Written exam</td>
                <td>-</td>
            </tr>


            <tr>
                <td>Program- and Career Orientation</td>
                <td>2,5</td>
                <td>Assessment exam</td>
                <td>-</td>


            </tr>
            <tr>
                <td>Programming Basics</td>
                <td>5</td>
                <td> Case study exam</td>
                <td>-</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Object-oriented programming</td>
                <td>10</td>
                <td>Case Study, Project</td>
                <td>-</td>
            </tr>

            <tr>
                <td rowspan="2">3</td>
                <td>Framework Development 1</td>
                <td>5</td>
                <td>Case study</td>
                <td>-</td>
            </tr>
            <tr>
                <td>Framework Project 1</td>
                <td>7.5</td>
                <td>Project, Assessment, Report</td>
                <td>-</td>

            </tr>
            <tr>
                <td>4</td>
                <td>Framework Project 2</td>
                <td>10</td>
                <td>Portfolio, Project, Assessment</td>
                <td>-</td>
            </tr>
            <tr>
                <td rowspan="2"> Hele jaar</td>
                <td>PPD</td>
                <td>12,5</td>
                <td>Portfolio</td>
                <td>-</td>


            </tr>
            <tr>
                <td>IT Personality</td>
                <td>2,5</td>
                <td>-</td>
                <td>-</td>
            </tr>

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
</body>


</html>
