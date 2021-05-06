@extends('layout.app')

@section('content')
<main role="main" id="main">
    <section class="hero hero_us">
        <img src="{{ URL::asset('/img/Pleca-2.jpg') }}">
        <div class="fade"></div>
        <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="title">
                    <%= get_prod(@product) %>
                </h1>
                <h2 class="subtitle">
                    Bombas T&G
                </h2>
            </div>
        </div>
    </section>
</main>
@endsection