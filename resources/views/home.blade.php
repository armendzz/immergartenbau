@extends('layouts.app')

@section('content')
    


<h1 class="text-center fontsansita">Ihr Garten und Landschaftsbau in NRW</h1>
<div class="card-group">
    <div class="card">
      <img class="mr-1 ml-1 mt-1" height="200px" src="https://images.squarespace-cdn.com/content/v1/56d252832b8dde6611c90bac/1458541068052-H0UJ8GEH03LIB3358FYB/ke17ZwdGBToddI8pDm48kLxnK526YWAH1qleWz-y7AFZw-zPPgdn4jUwVcJE1ZvWEtT5uBSRWt4vQZAgTJucoTqqXjS3CfNDSuuf31e0tVFUQAah1E2d0qOFNma4CJuw0VgyloEfPuSsyFRoaaKT76QvevUbj177dmcMs1F0H-0/image-asset.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Beratung</h5>
          </div>
    </div>
    <div class="card">
        <img class="mr-1 ml-1 mt-1" height="200px" src="https://www.fantasticgardenersmelbourne.com.au/wp-content/uploads/2017/06/garden-plan-1024x576.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Planung</h5>
            </div>
      </div>
      <div class="card">
        <img class="mr-1 ml-1 mt-1" height="200px" src="https://gardenandhappy.com/wp-content/uploads/2019/02/Summer-Vegetable-Garden-Layout-800x483.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Gestaltung</h5>
            </div>
      </div>
      <div class="card">
        <img class="mr-1 ml-1 mt-1" height="200px" src="https://webstockreview.net/images/clipart-grass-cut-out.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Pflege</h5>
            </div>
      </div>
  </div>

  <div class="row mt-3 mb-3">
      <div class="col-6"><img src="https://www.dlf.pt/png/big/23/234508_garden-png.png" width="100%" alt=""></div>
      <div class="col-6">
          <h1>UNSERE PHILOSOPHIE</h1>
          <h5>Wir möchten, dass Sie sich in Ihrem Garten wohlfühlen!</h5>
          <p>Zufriedene Kunden - das ist unser höchstes Ziel. Wir führen unser Geschäft nach alten traditionsreichen Tugenden und christlichen Werten und das sind unsere Geschäftsprinzipien: Offene und ehrliche Beratung, fachlich kompetente Arbeitsweise, faire Kalkulation, zuverlässige Terminabsprachen und transparente, offizielle Abrechnungen. Vielleicht sehen wir uns schon bald in Ihrem Garten zu einem persönlichen Beratungsgespräch.</p>
      </div>
  </div>
</div>
<div class="gallerie mt-3 mb-3" id="galleriee">
    <div class="container">
        <h1 class="text-center">Projekt Galerie</h1>
        <p class="text-center">Unsere Erfahrung mit hochwertigen Materialien im Gartenbau konnten wir bereits mehrfach unter Beweis stellen.</p>
        <p class="text-center">Hier finden Sie einen Auszug unserer Projekte.</p>
        <div class="col-sm-offset-2">    
            <!-- Galley wrapper that contains all items -->
            <div id="gallery" class="gallery" itemscope itemtype="http://schema.org/ImageGallery">
    
           <div class="row">
               
            <div class="col-3">
                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                  <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
                  <a href="https://gartenbau-kabashi.de/wp-content/uploads/2020/08/5.jpg" data-caption="Sea side, south shore<br><em class='text-muted'>© Dominik Schröder</em>" data-width="1200" data-height="900" itemprop="contentUrl">
                    <!-- Thumbnail -->
                    <img src="https://gartenbau-kabashi.de/wp-content/uploads/2020/08/5.jpg" class="foto"  width="100%" itemprop="thumbnail" alt="Image description">
                  </a>
                </figure>
              </div>
              <div class="col-3">
                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                  <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
                  <a href="https://gartenbau-kabashi.de/wp-content/uploads/2020/08/6.jpg" data-caption="Sea side, south shore<br><em class='text-muted'>© Dominik Schröder</em>" data-width="1200" data-height="900" itemprop="contentUrl">
                    <!-- Thumbnail -->
                    <img src="https://gartenbau-kabashi.de/wp-content/uploads/2020/08/6.jpg" class="foto"  width="100%" itemprop="thumbnail" alt="Image description">
                  </a>
                </figure>
              </div>
              <div class="col-3">
                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                  <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
                  <a href="https://gartenbau-kabashi.de/wp-content/uploads/2020/08/7.jpg" data-caption="Sea side, south shore<br><em class='text-muted'>© Dominik Schröder</em>" data-width="1200" data-height="900" itemprop="contentUrl">
                    <!-- Thumbnail -->
                    <img src="https://gartenbau-kabashi.de/wp-content/uploads/2020/08/7.jpg" class="foto"  width="100%" itemprop="thumbnail" alt="Image description">
                  </a>
                </figure>
              </div>
              <div class="col-3">
                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                  <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
                  <a href="https://gartenbau-kabashi.de/wp-content/uploads/2020/08/8.jpg" data-caption="Sea side, south shore<br><em class='text-muted'>© Dominik Schröder</em>" data-width="1200" data-height="900" itemprop="contentUrl">
                    <!-- Thumbnail -->
                    <img src="https://gartenbau-kabashi.de/wp-content/uploads/2020/08/8.jpg" class="foto"  width="100%" itemprop="thumbnail" alt="Image description">
                  </a>
                </figure>
              </div>
              <div class="col-3">
                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                  <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
                  <a href="https://gartenbau-kabashi.de/wp-content/uploads/2020/08/4.jpg" data-caption="Sea side, south shore<br><em class='text-muted'>© Dominik Schröder</em>" data-width="1200" data-height="900" itemprop="contentUrl">
                    <!-- Thumbnail -->
                    <img src="https://gartenbau-kabashi.de/wp-content/uploads/2020/08/4.jpg"class="foto"   width="100%" itemprop="thumbnail" alt="Image description">
                  </a>
                </figure>
              </div>
              <div class="col-3">
                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                  <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
                  <a href="https://gartenbau-kabashi.de/wp-content/uploads/2020/08/3.jpg" data-caption="Sea side, south shore<br><em class='text-muted'>© Dominik Schröder</em>" data-width="1200" data-height="900" itemprop="contentUrl">
                    <!-- Thumbnail -->
                    <img src="https://gartenbau-kabashi.de/wp-content/uploads/2020/08/3.jpg" class="foto"  width="100%" itemprop="thumbnail" alt="Image description">
                  </a>
                </figure>
              </div>
              <div class="col-3">
                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                  <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
                  <a href="https://gartenbau-kabashi.de/wp-content/uploads/2020/08/1.jpg" data-caption="Sea side, south shore<br><em class='text-muted'>© Dominik Schröder</em>" data-width="1200" data-height="900" itemprop="contentUrl">
                    <!-- Thumbnail -->
                    <img src="https://gartenbau-kabashi.de/wp-content/uploads/2020/08/1.jpg" class="foto"  width="100%" itemprop="thumbnail" alt="Image description">
                  </a>
                </figure>
              </div>
              <div class="col-3">
                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                  <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
                  <a href="https://gartenbau-kabashi.de/wp-content/uploads/2020/08/2.jpg" data-caption="Sea side, south shore<br><em class='text-muted'>© Dominik Schröder</em>" data-width="1200" data-height="900" itemprop="contentUrl">
                    <!-- Thumbnail -->
                    <img src="https://gartenbau-kabashi.de/wp-content/uploads/2020/08/2.jpg" class="foto"  width="100%" itemprop="thumbnail" alt="Image description">
                  </a>
                </figure>
              </div>
          
            </div>
            <div class="mb-2 d-flex justify-content-center"><p class="btn btn-success">Alle Galerie</p></div>

            
        </div>
          </div>
    </div>
</div>
<div class="container">
  <div class="card mt-2 mb-2">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="https://gartenbau-kabashi.de/wp-content/uploads/2020/08/17.jpg" class="card-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Jeder Garten, jede Landschaft kann ein kleines Paradies sein</h5>
          <p class="card-text">Dazu legen wir den Grundstein – z. B. mit dem Verlegen von Naturstein für Natursteinmauern, mit Pflasterbau für Wege und Einfahrten oder dem Fliesen-Legen bei Terrassen und in Innenbereichen.</p>
        </div>
      </div>
    </div>
  </div>
  @endsection