@extends('layout.app')

@section('content')
<main role="main" id="main">
    <x-title>
        <x-slot name="title">{{$service[1]}}</x-slot>
    </x-title>
    <section class="container mt-6 mb-6 info">
        <div class="columns has-text-justified">
            <div class="column is-half slidein_r mr-6">
                @switch($service[0])
                    @case(1)
                        <h2 class="subtitle has-text-weight-semibold">¿Qué es un equipo de bombeo?</h2>
                        <p>El equipo de bombeo es un transformador de energía mecánica que procede de un motor eléctrico y convirtiendo así en energía fluida que adquiere presión y velocidad.</p>
                        <p>Este tipo de equipos tiene por objetivo elevar la presión del fluido líquido (agua) térmico para vencer la resistencia que pondrá el circuito en circulación. La presión del trabajo debe ser tal que se garantice en todo momento que el fluido permanezca en estado líquido y que no tenga vaporización.</p><hr>
                        
                        <h2 class="subtitle has-text-weight-semibold">Proceso en Bombas T&G</h2>
                        <p>El proceso que se lleva a cabo para la reparación de los equipos requiere de
                        tecnología de punta especializada para cada tipo de máquina, que garantiza su
                        alto rendimiento y funcionalidad al ser instalada de nuevo.</p>
                        @break
                    @case(2)
                        <h2 class="subtitle has-text-weight-semibold">¿Qué es un sello mecánico?</h2>
                        <p>Los sellos mecánicos son dispositivos dinámicos de sellado, utilizados para controlar pérdidas o fugas de líquidos y gases en equipos rotativos. La función del sello mecánico es impedir el escape de fluidos a lo largo de ejes o árboles rotatorios. Los sellos llegaron para reemplazar o brindar una mejor solución que las empaquetaduras.</p><hr>
                        
                        <h2 class="subtitle has-text-weight-semibold">Importancia</h2>
                        <p>Para nosotros es importante que nuestros clientes nos consideren
                        una opción viable para cumplir con sus necesidades,
                        es por ello que contamos con este servicio de reparación
                        de cualquier marca y modelo de sellos mecánicos,
                        ofreciendo los mejores costos del mercado y mejorando
                        tiempos de entrega, buscando la satisfacción
                        del cliente con nuestro servicio.</p>
                        @break
                    @case(3)
                        <h2 class="subtitle has-text-weight-semibold">¿Qué es un motor?</h2>
                        <p>El motor eléctrico es un artefacto que transforma la energía eléctrica en energía mecánica, de manera que puede impulsar el funcionamiento de una máquina. Esto ocurre por acción de los campos magnéticos que se generan gracias a las bobinas, (aquellos pequeños cilindro con hilo metálico conductor aislado).</p><hr>
                        
                        <h2 class="subtitle has-text-weight-semibold">Proceso en Bombas T&G</h2>
                        <p>En la reparación de motores eléctricos
                        tenemos como objetivo asegurar el perfecto funcionamiento
                        de la máquina, tomando como referencia los parámetros
                        y estándares internacionales para cada equipo.
                        De esta manera garantizamos la “puesta a punto”,
                        prácticamente dejando el motor como nuevo.</p>
                        @break
                @endswitch
            </div>
            <div class="column slidein_l">
                @switch($service[0])
                    @case(1)
                        <x-carousel>
                            <x-slot name="img_1">ph.jpg</x-slot>
                            <x-slot name="img_2">ph.jpg</x-slot>
                            <x-slot name="img_3">ph.jpg</x-slot>
                        </x-carousel>
                        @break
                    @case(2)
                        <x-carousel>
                            <x-slot name="img_1">sello.JPG</x-slot>
                            <x-slot name="img_2">ph.jpg</x-slot>
                            <x-slot name="img_3">ph.jpg</x-slot>
                        </x-carousel>
                        @break
                    @case(3)
                        <x-carousel>
                            <x-slot name="img_1">motor.jpg</x-slot>
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