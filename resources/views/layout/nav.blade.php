<nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="/">
      <img src="{{ URL::asset('/img/Icono_alta.png') }}" width="60">
    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="burgerMenu">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="nav_menu" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item nav_menu_item has-text-white" href="/">
        Inicio
      </a>

      <a class="navbar-item nav_menu_item has-text-white" href="/Nosotros">
        Nosotros
      </a>
      
      <div class="navbar-item nav_menu_item has-dropdown is-hoverable is-mega">
        <a class="navbar-item navbar-link has-text-white" href="/Catalogo">
          Catálogo
        </a>
        <div id="blogDropdown" class="navbar-dropdown has-text-white">
          <div class="container is-fluid">
            <div class="columns">
              <div class="column">
                <h1 class="title is-6 is-mega-menu-title">Bombas</h1>
                <ul>
                  <li>
                    <a class="navbar-item" href="/Catalogo/Bombas/centrifugas">
                      <div class="navbar-content">
                        <p>Centrífugas Horizontales</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="navbar-item" href="/Catalogo/Bombas/turbina-vertical">
                      <div class="navbar-content">
                        <p>Turbina Vertical</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="navbar-item" href="/Catalogo/Bombas/sumergibles">
                      <div class="navbar-content">
                        <p>Sumergibles</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="navbar-item" href="/Catalogo/Bombas/sumergibles-inatascables">
                      <div class="navbar-content">
                        <p>Sumergibles Inatascables</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="navbar-item" href="/Catalogo/Bombas/fluidos-viscosos">
                      <div class="navbar-content">
                        <p>Fluidos Viscosos</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="navbar-item" href="/Catalogo/Bombas/electrobombas">
                      <div class="navbar-content">
                        <p>Electrobombas</p>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="column">
                <h1 class="title is-6 is-mega-menu-title">Materiales</h1>
                <ul>
                  <li>
                    <a class="navbar-item" href="/Catalogo">
                      <div class="navbar-content">
                        <p>Plásticos Metálicos, adhesivos, sprays metálicos, <br>
                        líquidos técnicos y bronce colada continua.</p>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="column">
                <h1 class="title is-6 is-mega-menu-title">Accesorios</h1>
                <ul>
                  <li>
                    <a class="navbar-item" href="/Catalogo/Accesorios/manometros">
                      <div class="navbar-content">
                        <p>Manómetros</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="navbar-item" href="/Catalogo/Accesorios/valvulas">
                      <div class="navbar-content">
                        <p>Válvulas</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="navbar-item" href="/Catalogo/Accesorios/sellos-mecanicos">
                      <div class="navbar-content">
                        <p>Sellos Mecánicos</p>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>      
            </div>
          </div>
        </div>
      </div>

      <div class="navbar-item nav_menu_item has-dropdown is-hoverable is-mega">
        <a class="navbar-item navbar-link has-text-white" href="/Servicios">
          Servicios
        </a>
        <div id="blogDropdown" class="navbar-dropdown has-text-white">
          <div class="container is-fluid">
            <div class="columns">
              <div class="column">
                <h1 class="title is-6 is-mega-menu-title">Venta, Reparación y Mantenimiento</h1>
                <ul>
                  <li>  
                    <a class="navbar-item" href="/Servicios/VRM/equipo-de-bombeo">
                      <div class="navbar-content">
                        <p>Equipo de bombeo</p>
                      </div>
                    </a>
                  </li>
                  <li>  
                    <a class="navbar-item" href="/Servicios/VRM/sellos-mecanicos">
                      <div class="navbar-content">
                        <p>Sellos mecánicos</p>
                      </div>
                    </a>
                  </li>
                  <li>  
                    <a class="navbar-item" href="/Servicios/VRM/motores">
                      <div class="navbar-content">
                        <p>Motores</p>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="column">
                <h1 class="title is-6 is-mega-menu-title">Instalación y Desinstalación</h1>
                <ul>
                  <li>
                    <a class="navbar-item" href="/Servicios">
                      <div class="navbar-content">
                        <p>Instalación y desinstalación de equipos de bombeo</p>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="column">
                <h1 class="title is-6 is-mega-menu-title">Otros servicios</h1>
                <ul>  
                  <li>
                    <a class="navbar-item" href="/Servicios/Otros/asesoria-y-servicios">
                      <div class="navbar-content">
                        <p>Asesoría y servicios en sistemas de bombeo</p>
                      </div>
                    </a>
                  </li>
                  <li>  
                    <a class="navbar-item" href="/Servicios/Otros/servicios-y-maquinados-industriales">
                      <div class="navbar-content">
                        <p>Servicios y maquinados industriales</p>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>      
            </div>
          </div>
        </div>
      </div>
      
      <a class="navbar-item nav_menu_item has-text-white" href="/Contacto">
        Contacto
      </a>

    </div>

    <div class="navbar-item">
      <img src="{{ URL::asset('/img/Eslogan_alta.png') }}" width="275">
    </div>
  </div>
</nav>

<div id="burgerMenu" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item has-text-white nav_menu_item ml-4" href="/Inicio">Inicio</a>
      <a class="navbar-item has-text-white nav_menu_item ml-4" href="/Nosotros">Nosotros</a>
      <a class="navbar-item has-text-white nav_menu_item ml-4" href="/Servicios">Servicios</a>
      <a class="navbar-item has-text-white nav_menu_item ml-4" href="/Catalogo">Catálogo</a>
      <a class="navbar-item has-text-white nav_menu_item ml-4" href="/Contacto">Contacto</a>
    </div>
</div>