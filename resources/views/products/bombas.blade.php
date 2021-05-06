@extends('layout.app')

@section('content')
<main role="main" id="main">
    <x-title>
        <x-slot name="title">{{$product[1]}}</x-slot>
    </x-title>
    <section class="container mt-6 mb-6 info">
        <div class="columns has-text-justified">
            <div class="column slidein_r mr-6">
                @switch($product[0])
                    @case(1)
                        <h2 class="subtitle has-text-weight-semibold">Bombas T&G Distibuidor Autorizado</h2>
                        <p>Distribución de bombas ANSI en apego a las normas ansi B73.1 y API 610, este equipo se fabrica en tamaños del 1 1/2 al 8.<br><br>
                            Sus metalurgias son: </p><br>
                        <ul class="lista ml-4">
                            <li>Acero inoxidable</li>
                            <li>CD4MCU al 25% de cromo</li>
                            <li>Hierro al alto niquel</li>
                            <li>Bronce</li>
                            <li>Hierro nodular</li>
                            <li>Hierro gris</li>
                        </ul><br>
                        <p>Bomba diseñada para todo tipo de industrias.</p>
                        <p>Las capacidades de gasto son desde 50 hasta 4000 gpm y en cargas dinámicas de 40 a 300 pies. Impulsor semiabierto.</p>
                        @break
                    @case(2)
                        <h2 class="subtitle has-text-weight-semibold">Bombas T&G Distibuidor Autorizado</h2>
                        <p>Distribución de equipos tipo turbina vertical que se fabrican en diferentes metalurgias como son: </p><br>
                        <ul class="lista ml-4">
                            <li>Aceros inoxidables</li>
                            <li>CD4MCU al 25% de cromo</li>
                            <li>Bronce</li>
                            <li>Hierro nodular</li>
                            <li>Hierro gris</li>
                        </ul><br>
                        <p>Su fabricación es del tamaño 6 al 36, de pasos múltiples, impulsor tipo semiabierto y cerrado, columna de transmisión, cabezal de descarga sobre superficie o bajo superficie. Esta linea se fabrica en capacidades de gasto de 50 hasta 18000 gpm y en cargas dinámicas desde 20 hasta 1875 pies.</p>    
                        @break
                    @case(3)
                        <h2 class="subtitle has-text-weight-semibold">¿Cómo funciona?</h2>
                        <p>Una bomba sumergible es una bomba que tiene un impulsor sellado a la carcasa. El conjunto se sumerge en el líquido a bombear. La ventaja de este tipo de bomba es que puede proporcionar una fuerza de elevación significativa pues no depende de la presión de aire externa para hacer ascender el líquido.</p><hr>
                        
                        <h2 class="subtitle has-text-weight-semibold">Aplicaciones</h2>
                        <p>Para agua en procesos industriales, agrícolas, hoteleros etc.</p>
                        @break
                    @case(4)
                        <h2 class="subtitle has-text-weight-semibold">¿Cómo funciona?</h2>
                        <p>Una bomba sumergible es una bomba que tiene un impulsor sellado a la carcasa. El conjunto se sumerge en el líquido a bombear. La ventaja de este tipo de bomba es que puede proporcionar una fuerza de elevación significativa pues no depende de la presión de aire externa para hacer ascender el líquido.</p><hr>
                        
                        <h2 class="subtitle has-text-weight-semibold">Aplicaciones</h2>
                        <p>Para estación de bombeo de
                        aguas residuales de tipo
                        doméstico municipal, e industrial
                        de aguas pluviales y freáticas, para lodos.</p>
                        @break
                    @case(5)
                        <h2 class="subtitle has-text-weight-semibold">Problemas con los fluidos viscosos</h2>
                        <p>Para fluidos de alta viscosidad, las bombas centrífugas no son ideales debido a las estrechas tolerancias críticas y la falta de capacidad para mezclar materiales tixotrópicos para proporcionar un efecto de dilución de cizallamiento. Sin este efecto de adelgazamiento, la acción de la bomba no reduce naturalmente la viscosidad, lo que hace que la bomba requiera cada vez más potencia a medida que aumenta la viscosidad.
                        A medida que aumenta la viscosidad, el rendimiento de la bomba debe ajustarse para que coincida con las propiedades del líquido y la resistencia al cizallamiento. El bombeo de líquidos viscosos generalmente significa una reducción en el flujo y la cabeza, así como un aumento significativo en la potencia necesaria para mover el fluido.</p><br>
                        @break
                    @case(6)
                        <h2 class="subtitle has-text-weight-semibold">Electrobomba</h2>
                        <p>Genéricamente, son aquellas accionadas por un motor eléctrico, para distinguirlas de las motobombas, habitualmente accionadas por motores de combustión interna.</p><hr>
                        
                        <h2 class="subtitle has-text-weight-semibold">En el catálogo</h2>
                        <ul class="lista">
                            <li>Electrobombas sumergibles de hasta 4''.</li><br>
                            <li>Electrobombas centrífugas horizontales.</li>
                        </ul>
                        @break
                @endswitch
            </div>
            <div class="column slidein_l">
                @switch($product[0])
                    @case(1)<img src="{{ URL::asset('/img/bombas.png') }}">
                        @break
                    @case(2)<img src="{{ URL::asset('/img/ph.jpg') }}">
                        @break
                    @case(3)<img src="{{ URL::asset('/img/sumer.png') }}">
                        @break
                    @case(4)<img src="{{ URL::asset('/img/sum_inata.png') }}">
                        @break
                    @case(5)<img src="{{ URL::asset('/img/viscosas.png') }}">
                        @break
                    @case(6)<img class="pt-6" src="{{ URL::asset('/img/Electrobombas.png') }}">
                        @break
                @endswitch
            </div>
        </div>
    </section>
</main>
@endsection