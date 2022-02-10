<!DOCTYPE html>
<html>

<head>
    <title>FAQ</title>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


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
        <h1>This is my FAQ page</h1>
    </header>
    <article>
        <h1>Veel gestelde vragen</h1>
        {{--        <ol>--}}
        {{--            <li>Hoe print je een document hier op de HZ?</li>--}}
        {{--            <li>Hoe scan je een document en stuur je dit naar je laptop hier op de HZ?</li>--}}
        {{--            <li>Wat moet je doen als je ziek bent of symptomen van het corona virus?</li>--}}
        {{--            <li>Hoe kun je een projectruimte boeken in één van de vleugels van het gebouw?</li>--}}
        {{--            <li>Wat zijn de instructies om je auto te parkeren op het HZ parkeerterrein?</li>--}}
        {{--        </ol>--}}
        {{--        <h2>Antwoorden</h2>--}}
        {{--        <ol>--}}
        {{--            <li>print.hz.nl</li>--}}
        {{--            <li>Als je verbonden bent met de printer kan je je HZ pas scannen en dan met de printer inscannen. Het PDF--}}
        {{--                bestand zou automatisch op je computer moeten komen. </li>--}}
        {{--            <li>Als je ziek bent of coronoklachten hebt moet je echt niet naar school komen en het je docent via teams--}}
        {{--                laten weten. Volg alle lessen zodat je geen achterstand oploopt. </li>--}}
        {{--            <li>Als je inlogt op MyHZ kan je via je persoonlijke menu naar Selfservice Portal gaan. Vanuit hier kan je een--}}
        {{--                nieuwe resevering aanvragen.Hierna kies je een tijdspan voor wanneer je de ruimte wil huren en je klaar--}}
        {{--                bent.</li>--}}
        {{--            <li>Gratis parkeren is mogelijk op het parkeerterrein van PZEM aan de Poelendaelesingel 10 in Middelburg. Dit--}}
        {{--                is op een paar minuten lopen afstand naar de HZ. Het is helaas niet mogelijk om direct bij het HZ-pand te--}}
        {{--                parkeren. Bij het pand zelf zijn wel twee invalideplaatsen en plekken voor HZ-auto’s.--}}
        {{--                Let op, parkeer je aan de Poelendaelesingel, dan kun je niet via het tunneltje de HZ bereiken i.v.m. de--}}
        {{--                bouwwerkzaamheden voor het Joint Research Center Zeeland. Je kan via het kruispunt bij de stoplichten--}}
        {{--                oversteken.</li>--}}
        {{--        </ol>--}}
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
</body>


</html>
