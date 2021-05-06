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
                    @case(7)
                        <h2 class="subtitle has-text-weight-semibold">¿Qué es un manómetro?</h2>
                        <p>El manómetro es un instrumento de medición para la presión de fluidos contenidos en recipientes cerrados. Se distinguen dos tipos de manómetros, según se empleen para medir la presión de líquidos o de gases.</p><hr>
                        
                        <h2 class="subtitle has-text-weight-semibold">En nuestro catálogo</h2>
                        <div class="columns">
                            <div class="column">
                                <ul class="lista">
                                    <li>Manómetros secos.</li>
                                    <li>Manómetros de glicerina.</li>
                                    <li>Manómetros generales.</li>
                                </ul>
                            </div>
                            <div class="column">
                                <ul class="lista">
                                    <li>Manómetros industriales.</li>
                                    <li>Manómetros bimetálicos.</li>
                                    <li>Termopozos.</li>
                                </ul>
                            </div>
                        </div>
                        @break
                    @case(8)
                        <h2 class="subtitle has-text-weight-semibold">¿Qué es una válvula?</h2>
                        <p>La válvula es un instrumento de regulación y control de fluido. Una definición más completa describe la válvula como un dispositivo mecánico con el cual se puede iniciar, detener o regular la circulación de líquidos o gases mediante una pieza movible que abre, cierra u obstruye en forma parcial uno o más orificios o conductos.</p><hr>
                        
                        <h2 class="subtitle has-text-weight-semibold">En nuestro catálogo</h2>
                        <p>Tenemos válvulas industriales tipo
                        compuerta vástago fijo o
                        saliente, de globo de retención
                        (Swing check).</p>
                        @break
                    @case(9)
                        <h2 class="subtitle has-text-weight-semibold">¿Qué es un sello mecánico?</h2>
                        <p>Los sellos mecánicos son dispositivos dinámicos de sellado, utilizados para controlar pérdidas o fugas de líquidos y gases en equipos rotativos. La función del sello mecánico es impedir el escape de fluidos a lo largo de ejes o árboles rotatorios. Los sellos llegaron para reemplazar o brindar una mejor solución que las empaquetaduras.</p><hr>
                        
                        <h2 class="subtitle has-text-weight-semibold">En nuestro catálogo</h2>
                        <p>Para bombas y equipos rotativos bajo las normas:</p><br>
                        <ul class="lista">
                            <li>ANSI</li>
                            <li>ISO</li>
                            <li>DIN</li>
                            <li>API</li>
                        </ul>
                        @break
                @endswitch
            </div>
            <div class="column slidein_l">
                @switch($product[0])
                    @case(7)<img src="{{ URL::asset('/img/manometro.jpg') }}">
                        @break
                    @case(8)<img src="{{ URL::asset('/img/valvulas.png') }}">
                        @break
                    @case(9)<img src="{{ URL::asset('/img/sellos.png') }}">
                        @break
                @endswitch
            </div>
        </div>
    </section>
</main>
@endsection