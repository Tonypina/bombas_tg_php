<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>BombasTg</title>

    <link rel="stylesheet" href="{{ URL::asset('/css/app.css') }}">
    <link rel="shortcut icon" href="{{ URL::asset('/img/Icono_alta.png') }}">

    <script src="https://kit.fontawesome.com/2b61c72af2.js" crossorigin="anonymous"></script>

  </head>
  <body>

    <!--Navbar-->
    <header>
      @include('layout.nav')
    </header>

    @yield('content')

    <!--Footer-->
    <footer class="footer pb-4">
      @include('layout.footer')
    </footer>

		<script src="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.3/dist/js/bulma-carousel.min.js"></script>
    <script defer type="text/javascript" src="{{ URL::asset('/js/app.js') }}"></script>

  </body>
</html>
