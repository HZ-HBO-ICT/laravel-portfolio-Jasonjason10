<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('faqs')->insert([
            'questions' => 'Hoe print je een document hier op de HZ?',
            'answers' => 'print.hz.nl'
        ]);

        \DB::table('faqs')->insert([
            'questions' => 'Hoe scan je een document en stuur je dit naar je laptop hier op de HZ?',
            'answers' => 'Als je verbonden bent met de printer kan je je HZ pas scannen en dan met de printer inscannen. Het PDF
                        bestand zou automatisch op je computer moeten komen'
        ]);
        \DB::table('faqs')->insert([
            'questions' => 'Wat moet je doen als je ziek bent of symptomen van het corona virus?',
            'answers' => 'Als je ziek bent of coronaklachten hebt moet je echt niet naar school komen en het je docent via teams
                        laten weten. Volg alle lessen zodat je geen achterstand oploopt.'
        ]);
        \DB::table('faqs')->insert([
            'questions' => 'Hoe kun je een projectruimte boeken in één van de vleugels van het gebouw?',
            'answers' => 'Als je inlogt op MyHZ kan je via je persoonlijke menu naar Selfservice Portal gaan. Vanuit hier kan je een ruimte boeken'
        ]);
        \DB::table('faqs')->insert([
            'questions' => 'Wat zijn de instructies om je auto te parkeren op het HZ parkeerterrein?',
            'answers' => 'Gratis parkeren is mogelijk op het parkeerterrein van PZEM aan de Poelendaelesingel 10 in Middelburg. Dit
                              is op een paar minuten lopen afstand naar de HZ. Het is helaas niet mogelijk om direct bij het HZ-pand te
                              parkeren. Bij het pand zelf zijn wel twee invalideplaatsen en plekken voor HZ-auto’s.
                              Let op, parkeer je aan de Poelendaelesingel, dan kun je niet via het tunneltje de HZ bereiken i.v.m. de
                              bouwwerkzaamheden voor het Joint Research Center Zeeland. Je kan via het kruispunt bij de stoplichten
                              oversteken.'
        ]);
    }
}
