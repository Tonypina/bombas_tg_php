@extends('layout.app')

@section('content')
<!-- <main role="main" class="container"> -->
<main role="main" id="main">
    <x-title>
        <x-slot name="title">Nuestros Servicios</x-slot>
    </x-title>
    <section id="services" class="container">
        <div class="columns info pb-6">
            <div class="column mr-6 slidein_r">
                <h2 class="subtitle has-text-weight-semibold">Propósito</h2>
                <p class="">
                    T&G fué creada para responder de
                    manera dinámica a las demandas
                    de equipos de bombeo, control
                    de fluidos, corrosión, servicio,
                    reparación, venta y asesoría técnica.
                    Con el único propósito de generar
                    la satisfacción del cliente. Logrando
                    así, ser una alternativa en el
                    mercado.
                </p>
            </div>
            <div class="column slidein_l">
                <img src="{{ URL::asset('/img/equipo-de-bombeo.jpg') }}" alt="Placeholder image">           
            </div>
    </section>
	<section class="hero is-small is-success is-bold hero_us">
        <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="title">
                    Todos Nuestros Servicios
                </h1>
                <h2 class="subtitle">
                    Bombas T&G
                </h2>
            </div>
        </div>
    </section>

    <section class="container mt-6 mb-6">
        <div class="tabs is-centered is-boxed has-text-weight-semibold slidein_l">
            <ul>
                <li class="is-active" data-target="vrm">
                    <a>
                        <span>Venta, Reparación y Mantenimiento</span>
                    </a>
                </li>
                <li data-target="ins-des">
                    <a>
                        <span>Instalación y Desinstalación</span>
                    </a>
                </li>
                <li data-target="other-services">
                    <a>
                        <span>Otros Servicios</span>
                    </a>
                </li>
                <li data-target="other-services">
                    <a href="{{ URL::asset('/pdf/Anexo.pdf') }}" target="_blank">
                        <span>Ver catálago de servicios</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="slidein_l" id="tab-content">
            <div id="vrm">
                <div class="columns">
                    <div class="column">
                        <x-card source="Servicios" type="VRM" service="equipo-de-bombeo">
                            <x-slot name="title">Equipo de Bombeo</x-slot>
                            <x-slot name="img">equipo-bombeo.png</x-slot>
                        </x-card>
                    </div>
                    <div class="column">
                        <x-card source="Servicios" type="VRM" service="sellos-mecanicos">
                            <x-slot name="title">Sellos Mecánicos</x-slot>
                            <x-slot name="img">sello.jpg</x-slot>
                        </x-card>
                    </div>
                    <div class="column">
                        <x-card source="Servicios" type="VRM" service="motores">
                            <x-slot name="title">Motores Eléctricos</x-slot>
                            <x-slot name="img">motor.jpg</x-slot>
                        </x-card>
                    </div>
                </div>
            </div>
            <div id="ins-des" class="is-hidden info">
                <div class="columns">
                    <div class="column is-half">
                        <img src="{{ URL::asset('/img/ins-des.png') }}">
                    </div>
                    <div class="column is-half">
                        <div class="card">
                            <header class="card-header">
                                <p class="card-header-title">
                                    Instalación y Desinstalación
                                </p>
                            </header>
                            <div class="card-content">
                                <div class="content has-text-justified">
                                    Solucionamos la necesidad de suministrar líquidos de un
                                    lugar a otro, ya sea de contenedores, cisternas, cárcamos,
                                    fosas y/o pozos, albercas. Instalamos y desinstalamos los
                                    equipos necesarios para su reparación de manera eficiente.
                                    <br>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
            <div id="other-services" class="is-hidden">
                <div class="columns">
                    <div class="column is-one-third is-offset-2">
                        <x-card source="Servicios" type="Otros" service="asesoria-y-servicios">
                            <x-slot name="title">Asesorías y servicios en sistemas de bombeo</x-slot>
                            <x-slot name="img">asesorias.png</x-slot>
                        </x-card>
                    </div>
                    <div class="column is-one-third">
                        <x-card source="Servicios" type="Otros" service="servicios-y-maquinados-industriales">
                            <x-slot name="title">Servicios y maquinados industriales</x-slot>
                            <x-slot name="img">maquinados.png</x-slot>
                        </x-card>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection