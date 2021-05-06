@extends('layout.app')

@section('content')
<!-- <main role="main" class="container"> -->
<main role="main">
    <x-title>
        <x-slot name="title">Sobre Nosotros</x-slot>
    </x-title>
    <section class="container mt-6 mb-6 info">
        <div class="columns has-text-justified">
            <div class="slidein_r column mr-6">
                <p>
                    <b>Servicios Industriales Hidráulicos T&G S.A. DE C.V.</b>, es una Empresa Mexicana para el servicio de Sistemas de Bombeo y Control de Fluidos, conjuntando el esfuerzo de 25 años de experiencia con amplios conocimientos en la Industria Metalmecánica, ofreciendo nuevos Productos y Tecnologías comercialmente siempre deseosos de servirles mejor con la Mayor Eficiencia.
                </p><br>
                <p>
                    Ponemos a su disposición nuestros conocimientos en el ramo, para así asesorarlos en sus problemas de bombeo, control de fluidos y corrosión todo lo anterior se ha desempeñado en los siguientes segmentos industriales: Acerero automotriz, papelera, alimenticia, bebidas, farmacéutica, construcción, petroquímica, azucarera, minera, agua potable y alcantarillado etc.
                </p>
            </div>
            <div class="slidein_l column">
                <img src="{{ URL::asset('/img/equipo.png') }}">
            </div>
        </div>
    </section>
    <section id="mision_vision_hero" class="hero is-success is-bold mb-6">
        <div class="hero-body">
            <div class="container">
                <div class="columns has-text-justified">
                    <div class="column mr-6">
                        <img src="{{ URL::asset('/img/mision.svg') }}">
                        <h2 class="subtitle"><b>MISION</b></h2>
                        <p>
                            Nos consideramos una familia dedicada a proporcionar productos, servicios y soluciones de calidad para los diversos sectores industriales transformando el conocimiento en valor y con ayuda de nuestra línea operativa. Siempre enfocada en las necesidades energéticas que el planeta necesita. Con el propósito de generar valor y confianza, contribuyendo para el beneficio de nuestros clientes, nuestra gente y del mercado al cual pertenecemos, ayudando a mejorar la calidad de vida de todos.
                        </p>
                    </div>
                    <div class="column">
                        <img src="{{ URL::asset('/img/vision.png') }}">
                        <h2 class="subtitle"><b>VISION</b></h2>
                        <p>
                            Ponemos a su disposición nuestros conocimientos en el ramo, para así asesorarlos en sus problemas de bombeo, control de fluidos y corrosión todo lo anterior se ha desempeñado en los siguientes segmentos industriales: Acerero automotriz, papelera, alimenticia, bebidas, farmacéutica, construcción, petroquímica, azucarera, minera, agua potable y alcantarillado etc.
                        </p><br>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container mt-6 mb-6 info">
        <div class="columns has-text-justified">
            <div class="slidein_r column mr-6">
                <h2 class="subtitle has-text-weight-semibold">Currículum<h2>
                <p>
                    Por medio de la presente nos permitimos poner a sus órdenes nuestra empresa, la cual inicio como servicio hidráulico industrial / Jesús Trejo Perdomo (persona física) en el año de 2005. En el año 2007 se transformó en una empresa
                    s.a. con el nombre: <b>Servicios Industriales Hidráulicos T&G, S.A. de C.V.</b> la cual se constituyó para el servicio de sistemas de bombeo y control de fluidos conjuntando el esfuerzo y 20 años de experiencia, con amplios conocimientos en la industria metalmecánica, hidráulica, laboratorio de pruebas hidráulicas y técnicamente a la vanguardia, protección para la corrosión ofreciendo nuevos productos y tecnologías, comercialmente siempre deseosos de servirles mejor con la mayor eficiencia.
                </p><br>
                <p>Comercialmente la creación de nuestra empresa es satisfacer al mercado nacional en cualquier necesidad de:</p><br>
                <div class="columns">
                    <ul class="column lista">
                        <li>Venta y rehabilitación de equipo de bombeo.</li>
                        <li>Desinstalación e instalación de equipo de bombeo.</li>
                        <li>Asesoría en sistemas de bombeo.</li>
                        <li>Servicio técnico.</li>
                        <li>Venta y reparación de motores.</li>
                    </ul>
                    <ul class="column lista">
                        <li>Venta y reparación de sellos mecánicos.</li>
                        <li>Venta de accesorios industriales e hidráulicos.</li>
                        <li>Venta e instalación de materiales termoplásticos ppl, hdpe, pvc, cpvc, ptfe y pvdf.</li>
                        <li>Tubería de acero al carbón.</li>
                        <li>Obra civil.</li>
                    </ul>
                </div>
            </div>
            <div class="slidein_l column">
                <img src="{{ URL::asset('/img/equipo-2.jpg') }}">
            </div>
        </div>
    </section>
    <section class="objetivo hero is-primary is-bold mb-6">
        <div class="hero-body">
            <div class="container info">
                <div class="columns has-text-justified">
                    <div class="column mr-6">
                        <img src="{{ URL::asset('/img/fachada.png') }}">
                    </div>
                    <div class="column">
                        <h2 class="subtitle"><b>Objetivo</b></h2>
                        <p>
                            En esta época moderna las empresas requieren de proveedores de servicios capaces de responder a las necesidades específicas de su proceso.
                        </p>
                        <p>
                            T&G ha sido creada para responder de manera dinámica a las demandas de equipo de bombeo, control de fluidos, corrosión en servicio, reparación, venta y asesoría técnica. Con el único propósito de generar la satisfacción del cliente. Logrando así una alternativa en el mercado y estableciendo una cadena de recursos de amplio alcance e incomparable servicio.
                        </p>
                        <p>
                            Para nuestra empresa es una responsabilidad el crear un puente de calidad. Seguridad y confianza, que en conjunto nos llevara a ofrecer el servicio que requiere la industria mexicana.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container mb-6">
        <div class="columns has-text-centered">
            <div id="client_list" class="column is-one-third ">
                <h2 class="subtitle"><b>Nuestros Clientes, Representaciones y Distribuciones</b></h2>
                <p>
                    Trabajamos o hemos trabajado principalmente en los siguientes sectores:
                </p><br>
                <ul>
                    <li><b>Sector Gobierno</b></li>
                    <li><b>Sector Azucarero</b></li>
                    <li><b>Procesos Industriales</b></li>
                    <li><b>Industria Papelera</b></li>
                    <li><b>Minería</b></li>
                </ul>
            </div>
            <div id="prov" class="column is-one-third is-offset-1">
                <img src="{{ URL::asset('/img/proveedores.png') }}">
            </div>
        </div>
    </section>
    <section class="hero is-small hero_us">
        <img src="{{ URL::asset('/img/Pleca-2.jpg') }}">
        <div class="fade"></div>
        <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="title">
                    Expos
                </h1>
                <h2 class="subtitle">
                    Bombas T&G
                </h2>
            </div>
        </div>
    </section>
    <section class="container mt-6 mb-6">
        <div class="columns">
            <div class="column">
                <img src="{{ URL::asset('/img/ph.jpg') }}">
            </div>            
            <div class="column">
                <img src="{{ URL::asset('/img/ph.jpg') }}">
            </div>
        </div>
    </section>
</main>
@endsection