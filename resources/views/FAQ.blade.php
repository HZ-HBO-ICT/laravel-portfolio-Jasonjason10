@extends('layout')
@section('content')

<main>
    <title>FAQ</title>
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
@endsection
