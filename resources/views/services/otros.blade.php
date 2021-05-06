@extends('layout.app')

@section('content')
<main role="main" id="main">
    <x-title>
        <x-slot name="title">{{$service[1]}}</x-slot>
    </x-title>
    <section class="container mt-6 mb-6 info">
        <div class="columns has-text-justified">
            <div class="column slidein_r mr-6">
                @switch($service[0])
                    @case(4)
                        <h2 class="subtitle has-text-weight-semibold">¿En qué consiste?</h2>
                        <p>Nuestros ingenieros y asesores técnicos cuentan con los conocimientos y gran
                        capacidad, pero sobre todo con la experiencia para resolver cualquier tipo de
                        problema, ya sea de aplicación, de diseño o de instalación.</p><hr>
                        <img src="{{ URL::asset('/img/calculos.png') }}">
                        @break
                    @case(5)
                        <h2 class="subtitle has-text-weight-semibold">Maquinados industriales</h2>
                        <p>Los maquinados industriales son procesos de manufactura a partir de remoción de virutas. Actualmente es un servicio muy demandado en la industria debido a la gran cantidad de técnicas que abarca y la variedad de productos que se pueden diseñar y fabricar a partir de este proceso.</p><hr>
                        
                        <h2 class="subtitle has-text-weight-semibold">Proceso en Bombas T&G</h2>
                        <p>Contamos con la capacidad, pero sobre todo con una amplia experiencia en
                        fabricación, adaptación y reparación de piezas industriales, ya sea para equipos
                        o maquinaria en general, nuestros técnicos aseguran la máxima calidad y el menor
                        tiempo posible de entrega. Trabajamos desde una pieza hasta la producción en serie,
                        si se requieren cantidades mayores.</p>
                        @break
                @endswitch
            </div>
            <div class="column slidein_l">
                @switch($service[0])
                    @case(4)
                        <x-carousel>
                            <x-slot name="img_1">graficos.png</x-slot>
                            <x-slot name="img_2">ph.jpg</x-slot>
                            <x-slot name="img_3">ph.jpg</x-slot>
                        </x-carousel>
                        @break
                    @case(5)
                        <x-carousel>
                            <x-slot name="img_1">maquinado.png</x-slot>
                            <x-slot name="img_2">ph.jpg</x-slot>
                            <x-slot name="img_3">ph.jpg</x-slot>
                        </x-carousel>
                        @break
                @endswitch
            </div>
        </div>
    </section>
</main>
@endsection