@extends('layout.app')

@section('content')
<!-- <main role="main" class="container"> -->
<main role="main">
    <x-title>
        <x-slot name="title">Contacto</x-slot>
    </x-title>
    <div class="columns pr-6">
        <section id="info_contact" class="slidein_r column has-text-centered">
            <div class="hero is-success is-bold pt-6 pb-6">
                <h1 class="title mt-6">Bombas T&G</h1>
                <h2 class="subtitle mt-1">Teléfonos</h2><br>
                <p>Oficina: (55) 4333-0715</p><br>
                <p>Móvil: (55) 2239-5258</p><br>
                <p>E-mail: servicios@bombastg.com.mx</p><br>
                <p>E-mail: ventas@bombastg.com.mx</p><br>
                <p>Horario: Lun - Vie --> 9:00 - 18:00 hrs</p><br><br><br><br>
            </div>
        </section>
        <section class="slidein_l column is-7 container pl-6 pt-6 pb-6">
            <h1 class="title has-text-centered mb-6">
                Envíanos un mensaje
            </h1>
            <form action="{{ route('contacto.store') }}" method="POST">
            @csrf
                <div class="columns is-multiline">
                    <div class="column is-half">
                        <div class="field">
                            <label class="label">Nombre</label>
                            <div class="control has-icons-left">
                                <input name="name" class="input" type="text" placeholder="Nombre" required>
                                <span class="icon is-small is-left">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Apellido</label>
                            <div class="control has-icons-left">
                                <input name="lname" class="input" type="text" placeholder="Apellido" required>
                                <span class="icon is-small is-left">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                        </div>

                    </div>

                    <div class="column is-half">
                        <div class="field">
                            <label class="label">Email</label>
                            <div class="control has-icons-left">
                                <input name="email" class="input" type="email" placeholder="ejemplo@outlook.com" required>
                                <span class="icon is-small is-left">
                                    <i class="fas fa-envelope"></i>
                                </span>
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Asunto</label>
                            <div class="control has-icons-left">
                                <input name="subject" class="input" type="text" placeholder="Asunto" required>
                                <span class="icon is-small is-left">
                                    <i class="fas fa-envelope"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="column is-full">
                        <div class="field">
                            <label class="label">Mensaje</label>
                            <div class="control">
                                <textarea name="body" class="textarea" placeholder="Escribe tu mensaje..." required></textarea>
                            </div>
                        </div>
                    </div>

                    <button class="button is-success column is-offset-6 is-2 has-text-centered" type="submit">Enviar</button>
                </div>
            </form>

            @if(session('info'))
                <script>
                    alert("{{ session('info') }}");
                </script>
            @endif
        </section>
    </div>
</main>
@endsection