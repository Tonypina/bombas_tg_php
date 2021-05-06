@extends('layout.app')

@section('content')
<main role="main">
    
	<section class="hero is-fullheight hero_us">
		<video src="{{ URL::asset('/img/cascadas.mp4') }}" muted autoplay loop></video>
		<div class="fade"></div>
		<div class="columns">
			<div class="column">
				<section class="hero is-fullheight hero_us">			
					<div class="carousel">
						<div id="img_inicio" class="item-1 hero-body">
							<img src="{{ URL::asset('/img/Logo_alta.png') }}">
						</div>
						<div id="img_inicio" class="item-2 hero-body">
							<h1 class="title has-text-centered has-text-white is-uppercase is-size-2">Integración de servicios de alto nivel</h1>
						</div>
						<div id="img_inicio" class="item-3 hero-body">
							<h1 class="title has-text-centered has-text-white is-size-2">DINAMISMO E INTEGRACIÓN EN SISTEMAS DE BOMBEO!</h1>
						</div>
					</div>
				</section>
			</div>
			<div class="column is-2 mt-6 is-hidden-touch">
				<section class="">
					<section class=" hero-body pt-4 pb-4">
						<ul class="has-text-centered">
							<li class="mt-6">
								<a href="{{ URL::asset('/pdf/Catalogo.pdf') }}" target="_blank"><div class="rombo"><p class="has-text-white">Catálogo</p></div></a>
							</li>
							<li class="mt-6">
								<a href="{{ URL::asset('/pdf/Anexo.pdf') }}" target="_blank"><div class="rombo"><p class="has-text-white">Servicios</p></div></a>
							</li>
							<li class="mt-6">
								<a href="{{ URL::asset('/pdf/Reporte.pdf') }}" target="_blank"><div class="rombo"><p class="has-text-white">Casos de éxito</p></div></a>
							</li>
						</ul>
					</section>
				</section>
			</div>
		</div>
	</section>

	<section class="hero pt-6 is-hidden-tablet">
		<section class=" hero-body pt-4 mb-6 pb-4">
			<div class="mt-6 mb-6 columns has-text-centered">
				<div class="column">
					<a class="button is-success" href="{{ URL::asset('/pdf/Anexo.pdf') }}" target="_blank">Servicios</a>
				</div>
				<div class="column">
					<a class="button is-success" href="{{ URL::asset('/pdf/Catalogo.pdf') }}" target="_blank">Catálogo</a>
				</div>
				<div class="column">
					<a class="button is-success" href="{{ URL::asset('/pdf/Reporte.pdf') }}" target="_blank">Casos de éxito</a>
				</div>
			</div>
		</section>
	</section>
</main>
@endsection