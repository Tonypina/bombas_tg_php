@extends('layout.app')

@section('content')
<!-- <main role="main" class="container"> -->
<!-- <main role="main" class="container"> -->
<main role="main" id="main">
    <x-title>
        <x-slot name="title">Catálogo</x-slot>
    </x-title>
    <section id="services" class="container">
        <div class="columns">
            <div class="column slidein_r">
                <div class="tabs is-centered is-boxed has-text-weight-semibold">
                    <ul>
                        <li class="is-active" data-target="bombas">
                        <a>
                            <span>Bombas</span>
                        </a>
                        </li>
                        <li data-target="materiales">
                        <a>
                            <span>Materiales</span>
                        </a>
                        </li>
                        <li data-target="accesorios">
                        <a>
                            <span>Accesorios</span>
                        </a>
                        </li>
                        <li data-target="bombas">
                        <a href="{{ URL::asset('/pdf/Catalogo.pdf') }}" target="_">
                            <span>Ver catálogo completo</span>
                        </a>
                        </li>
                    </ul>
                </div>
                <div class="slidein_b" id="tab-content">
                    <div id="bombas">
                        <div class="columns">
                            <div class="column is-one-third">
                                <x-card source="Catalogo" type="Bombas" service="centrifugas">
                                    <x-slot name="title">Centrífugas Horizontales</x-slot>
                                    <x-slot name="img">bi-partida.png</x-slot>
                                </x-card>
                            </div>
                            <div class="column is-one-third">
                                <x-card source="Catalogo" type="Bombas" service="turbina-vertical">
                                    <x-slot name="title">Turbina Vertical</x-slot>
                                    <x-slot name="img">ph.jpg</x-slot>
                                </x-card>
                            </div>
                            <div class="column is-one-third">
                                <x-card source="Catalogo" type="Bombas" service="sumergibles">
                                    <x-slot name="title">Sumergibles</x-slot>
                                    <x-slot name="img">sumer.png</x-slot>
                                </x-card>
                            </div>
                        </div>
                        <div class="columns">
                            <div class="column is-one-third">
                                <x-card source="Catalogo" type="Bombas" service="fluidos-viscosos">
                                    <x-slot name="title">Fluidos Viscosos</x-slot>
                                    <x-slot name="img">viscosas.png</x-slot>
                                </x-card>
                            </div>
                            <div class="column is-one-third">
                                <x-card source="Catalogo" type="Bombas" service="electrobombas">
                                    <x-slot name="title">Electrobombas</x-slot>
                                    <x-slot name="img">motor.jpg</x-slot>
                                </x-card>
                            </div>
                            <div class="column is-one-third">
                                <x-card source="Catalogo" type="Bombas" service="sumergibles-inatascables">
                                    <x-slot name="title">Sumergibles Inatascables</x-slot>
                                    <x-slot name="img">equipo-bombeo.png</x-slot>
                                </x-card>
                            </div>
                        </div>
                    </div>
                    <div id="materiales" class="is-hidden">
                        <div class="columns">
                            <div class="column is-one-third">
                                <div class="card">
                                    <header class="card-header">
                                        <p class="card-header-title">
                                            Plásticos Metálicos
                                        </p>
                                    </header>
                                    <div class="card-image">
                                        <figure class="image is-4by3">
                                        <img src="{{ URL::asset('/img/ph.jpg') }}" alt="Placeholder ">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="column is-one-third">
                                <div class="card">
                                    <header class="card-header">
                                        <p class="card-header-title">
                                            Adhesivos
                                        </p>
                                    </header>
                                    <div class="card-image">
                                        <figure class="image is-4by3">
                                        <img src="{{ URL::asset('/img/ph.jpg') }}" alt="Placeholder ">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="column is-one-third">
                                <div class="card">
                                    <header class="card-header">
                                        <p class="card-header-title">
                                            Sprays Metálicos
                                        </p>
                                    </header>
                                    <div class="card-image">
                                        <figure class="image is-4by3">
                                        <img src="{{ URL::asset('/img/ph.jpg') }}" alt="Placeholder ">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="columns">
                            <div class="column is-one-third is-offset-2">
                                <div class="card">
                                    <header class="card-header">
                                        <p class="card-header-title">
                                            Líqudos técnicos
                                        </p>
                                    </header>
                                    <div class="card-image">
                                        <figure class="image is-4by3">
                                        <img src="{{ URL::asset('/img/ph.jpg') }}" alt="Placeholder ">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="column is-one-third">
                                <div class="card">
                                    <header class="card-header">
                                        <p class="card-header-title">
                                            Bronce Colada Continua
                                        </p>
                                    </header>
                                    <div class="card-image">
                                        <figure class="image is-4by3">
                                        <img src="{{ URL::asset('/img/ph.jpg') }}" alt="Placeholder ">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="accesorios" class="is-hidden">
                        <div class="columns">
                            <div class="column is-one-third">
                                <x-card source="Catalogo" type="Accesorios" service="manometro">
                                    <x-slot name="title">Manómetros</x-slot>
                                    <x-slot name="img">manometro.jpg</x-slot>
                                </x-card>
                            </div>
                            <div class="column is-one-third">
                                <x-card source="Catalogo" type="Accesorios" service="valvulas">
                                    <x-slot name="title">Válvulas</x-slot>
                                    <x-slot name="img">valvulas.png</x-slot>
                                </x-card>
                            </div>
                            <div class="column is-one-third">
                                <x-card source="Catalogo" type="Accesorios" service="sellos-mecanicos">
                                    <x-slot name="title">Sellos Mecánicos</x-slot>
                                    <x-slot name="img">sello-2.png</x-slot>
                                </x-card>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column ml-6 is-3 slidein_l">
                <h2 class="subtitle has-text-weight-semibold">Propósito</h2>
                <p>
                    Nos constituimos con un claro compromiso
                    de servicio, enfocado
                    a sistemas de bombeo
                    respaldados por el
                    esfuerzo de más
                    de 30 años de
                    experiencia en la
                    industria hidráulica,
                    metalmecánica y
                    laboratorio de
                    pruebas hidráulicas.
                </p>
                <br>
                <p>
                    En T&G contamos
                    con tecnología
                    y equipos de última
                    generación en el ramo;
                    sustentados en un
                    inmejorable servicio y
                    eficiencia que nos
                    posiciona en un lugar
                    privilegiado.
                </p>
            </div>
        </div>    
    </section>
</main>
@endsection