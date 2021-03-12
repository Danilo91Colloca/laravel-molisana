<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Molisana DC</title>
      <link rel="stylesheet" href="{{asset('css/app.css') }}">        
       
    </head>
    <body>
      <div id="app">
        <header>
          <div class="logo">
            <img src= {{ url ('/img/brand.png') }} alt="">
          </div>
          <nav>
            <ul>
              <li>
                <a href="/pages/home">
                  Home
                </a>
              </li>
              <li>
                <a href="/pages/products">
                  Prodotti
                </a>
              </li>
              <li>
                <a href="/pages/news">
                  News
                </a>
              </li>
            </ul>
          </nav>
        </header>
        <div class="main-container">
          @yield('main')
        </div>
        <footer>
          <div class="foot-wrapper">
            <div class="foot-left">
              <div class="logo">
                <img src={{ url ('/img/brand.png') }} alt="">
              </div>
              <ul>
                <li>Regione sociale: La Molisana S.P.A.</li>
                <li>Sede legale: Contrada Colle delle Api, 100/A</li>
                <li>86100-Campobasso (CB)</li>
                <li>Pec: lamolisana@pec.it</li>
                <li>Tel: +39 0874 4981</li>
                <li>Fax: +39 0874 629584</li>
                <li>info@lamolisana.it (per segnalazioni degli utent)</li>
                <li>commerciale@lamolisana.it</li>
                <li>export@lamolisana.it</li>
                <li>numero verde 800818081</li>
                <li>telefono 3801292455</li>
              </ul>
            </div>
            <div class="foot-box-list">
              <span class="service-title">pastificio</span>
              <ul>
                <li>
                  <a href="">
                    Il Pastificio
                  </a>
                </li>
                <li>
                  <a href="">
                    Grano decorticato a pietra
                  </a>
                </li>
                <li>
                  <a href="">
                    Il Molise c'è
                  </a>
                </li>
                <li>
                  <a href="">
                    Filiera Integrata
                  </a>
                </li>
                <li>
                  <a href="">
                    100 anni di pasta
                  </a>
                </li>
                <li>
                  <a href="">
                    Sartoria della psta
                  </a>
                </li>
                <li>
                  <a href="">
                    Spaghetto Quadrato
                  </a>
                </li>
                <li>
                  <a href="">
                    Le Persone
                  </a>
                </li>
              </ul>

              <span class="service-title">prodotti</span>
              <ul>
                <li>
                  <a href="">
                    Le Classiche
                  </a>
                </li>
                <li>
                  <a href="">
                    Le Integrali
                  </a>
                </li>
                <li>
                  <a href="">
                    Le Speciali
                  </a>
                </li>
                <li>
                  <a href="">
                    Le Biologiche
                  </a>
                </li>
                <li>
                  <a href="">
                    Le Gluten-Free
                  </a>
                </li>
                <li>
                  <a href="">
                    Le Semole
                  </a>
                </li>
                <li>
                  <a href="">
                    Le Extra di Lusso
                  </a>
                </li>
              </ul>
            </div>
            <div class="foot-box-list">
              <span class="service-title">collezione da chef</span>
              <ul class="footerList collezione">
                <li>
                  <a href="">
                    Collezione da Chef
                  </a>
                </li>
                <li>
                  <a href="">
                    Grandi Cucine
                  </a>
                </li>
                <li>
                  <a href="">
                    Biologiche
                  </a>
                </li>
                <li>
                  <a href="">
                    Quadrate
                  </a>
                </li>
              </ul>  
            </div>
          </div>
          <div class="bottom-img">
            <img src="{{ url ('/img/footer-montagne-bottom.jpeg') }}" alt="">
          </div>
        </footer>
      </div>
      
    </body>
</html>
