
@php
    $img_url = '/img/'.$img;
    $href = $source.'/'.$type.'/'.$service;
@endphp

<div class="card">
    <header class="card-header">
        <p class="card-header-title">
            {{$title}}
        </p>
    </header>
    <div class="card-image">
        <figure class="image is-4by3">
            <img src="{{ URL::asset($img_url) }}" alt="Placeholder image">
        </figure>
    </div>
    <footer class="card-footer">
        <a href="{{$href}}" class="card-footer-item">Ver más</a>
    </footer>
</div>
