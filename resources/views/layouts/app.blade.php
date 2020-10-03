<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href={{ asset("/css/app.css") }} rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.0/photoswipe.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.0/default-skin/default-skin.css">    <link href={{ asset("/css/style.css") }} rel="stylesheet" />
       <title>ImmerGartenBau.Com</title>

</head>

<body>
   
    <div class="container mt-2">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" id="navbar-brand" href="#">ImmerGartenBau.Com</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                  </ul>
                  <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Leistungen</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Projekte</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#galleriee">Gallerie</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Über uns</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/kontakt">Kontakt</a>
                  </li>
                </ul>
                </div>
              </nav>
    </header>

    <div class="jumbotron bg-cover text-white" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.6) 0%,rgba(0,0,0,0.6) 100%), url(https://www.schwimmbad.de/wp-content/uploads/sites/8/2019/10/72_Beitragsbild2_tm_7559-1024x683.jpg)">
        <div class="container">
        <h1 class="display-4">Wir machen Ihren Garten zum Highlight!</h1>
        <p class="lead">Unser Team bringt Ihr privates und öffentliches Grün in Topform. Mit außergewöhnlichen Gestaltungsideen, professioneller Planung und liebevoller Ausführung bekommen Sie bei uns alles rund um Natur und Garten.</p>
        <hr class="my-4">
        <p>Jetzt kostenfreien Beratungstermin vereinbaren.</p>
        <a class="btn btn-success btn-lg" href="tel:017636616027" role="button"><i class="material-icons">phone_in_talk</i> <span style="font-size: 20px">017636616027</span></a>
          </div>
      </div>
    @yield('content')


  <footer class="page-footer font-small green pt-4">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">
  
      <!-- Grid row -->
      <div class="row">
  
        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">
  
          <!-- Content -->
          <h5 class="text-uppercase">Bürozeiten</h5>
          <p>Mo - Sa:  &nbsp;&nbsp; &nbsp;&nbsp;  7:00 - 17:00</p>
          <p>So:  &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;    Geschlossen</p>
  
        </div>
        <!-- Grid column -->
  
        <hr class="clearfix w-100 d-md-none pb-3">
  
        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">
  
          <!-- Links -->
          <h5 class="text-uppercase">Links</h5>
  
          <ul class="list-unstyled">
            <li>
              <a href="#!">Facebook</a>
            </li>
            <li>
              <a href="#!">Instagram</a>
            </li>
            <li>
              <a href="#!">Kunden seite</a>
            </li>
            <li>
              <a href="#!">Bewertungen</a>
            </li>
          </ul>
  
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">
  
          <!-- Links -->
          <h5 class="text-uppercase">Links</h5>
  
          <ul class="list-unstyled">
            <li>
              <a href="#!">Projekten</a>
            </li>
            <li>
              <a href="#!">Leistungen</a>
            </li>
            <li>
              <a href="#!">Datenschutz</a>
            </li>
            <li>
              <a href="#!">Impressum</a>
            </li>
          </ul>
  
        </div>
        <!-- Grid column -->
  
      </div>
      <!-- Grid row -->
  
    </div>
    <!-- Footer Links -->
  
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      <a href="https://immergartenbau.com/">ImmerGartenBau.com</a>
    </div>
    <!-- Copyright -->
  
  </footer>

 

  <!-- Some spacing 😉 -->
  <div class="spacer"></div>


  <!-- Root element of PhotoSwipe. Must have class pswp. -->
  <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
      <!-- Background of PhotoSwipe. 
           It's a separate element as animating opacity is faster than rgba(). -->
      <div class="pswp__bg"></div>
      <!-- Slides wrapper with overflow:hidden. -->
      <div class="pswp__scroll-wrap">
          <!-- Container that holds slides. 
              PhotoSwipe keeps only 3 of them in the DOM to save memory.
              Don't modify these 3 pswp__item elements, data is added later on. -->
          <div class="pswp__container">
              <div class="pswp__item"></div>
              <div class="pswp__item"></div>
              <div class="pswp__item"></div>
          </div>
          <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
          <div class="pswp__ui pswp__ui--hidden">
              <div class="pswp__top-bar">
                  <!--  Controls are self-explanatory. Order can be changed. -->
                  <div class="pswp__counter"></div>
                  <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                  <button class="pswp__button pswp__button--share" title="Share"></button>
                  <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                  <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                  <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                  <!-- element will get class pswp__preloader--active when preloader is running -->
                  <div class="pswp__preloader">
                      <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                          <div class="pswp__preloader__donut"></div>
                        </div>
                      </div>
                  </div>
              </div>
              <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                  <div class="pswp__share-tooltip"></div> 
              </div>
              <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
              </button>
              <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
              </button>
              <div class="pswp__caption">
                  <div class="pswp__caption__center"></div>
              </div>
          </div>
      </div>
  </div>
</div>

    <script src="/js/app.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.0/photoswipe.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.0/photoswipe-ui-default.min.js"></script></body>
    <script>
    
        /* global jQuery, PhotoSwipe, PhotoSwipeUI_Default, console */
    
        (function($){
    
          // Init empty gallery array
          var container = [];
    
          // Loop over gallery items and push it to the array
          $('#gallery').find('figure').each(function(){
            var $link = $(this).find('a'),
                item = {
                  src: $link.attr('href'),
                  w: $link.data('width'),
                  h: $link.data('height'),
                  title: $link.data('caption')
                };
            container.push(item);
          });
    
          // Define click event on gallery item
          $('.foto').click(function(event){
    
            // Prevent location change
            event.preventDefault();
    
            // Define object and gallery options
            var $pswp = $('.pswp')[0],
                options = {
                  index: $(this).parent('figure').index(),
                  bgOpacity: 0.85,
                  showHideOpacity: true
                };
    
            // Initialize PhotoSwipe
            var gallery = new PhotoSwipe($pswp, PhotoSwipeUI_Default, container, options);
            gallery.init();
          });
    
        }(jQuery));
      </script>
</html>