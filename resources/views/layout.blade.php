<!DOCTYPE html>
<html>

<head>
@yield('head-content')
    <link rel="stylesheet" href="/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        header {
            color: white;
        }


        ul {

            color: white;
        }
        .current_page_item {
            background-color: blue;
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
        <li ><a class="{{Request::path()=== '/' ? 'current_page_item' : ''}}" href="/"> Home</a></li>
        <li class="{{Request::path()=== 'profile' ? 'current_page_item' : ''}}"><a href="profile">Profile</a></li>
        <li class="{{Request::path()=== 'FAQ' ? 'current_page_item' : ''}}"><a href="FAQ">FAQ</a></li>
        <li class="{{Request::path()=== 'dashboard' ? 'current_page_item' : ''}}"><a href="dashboard">Dashboard</a></li>
        <li class="{{Request::path()=== 'blog' ? 'current_page_item' : ''}}"><a href="blog">Blog</a></li>
    </ul>
</nav>

<main>
    @yield('content')

</main>
</body>
</html>

