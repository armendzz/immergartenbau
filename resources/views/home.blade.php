@extends('layouts.app')

@section('content')
    


<h1 class="text-center fontsansita">Ihr Garten und Landschaftsbau in STUTTGART</h1>
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
          <h2>UNSERE PHILOSOPHIE</h2>
          <h5>Wir möchten, dass Sie sich in Ihrem Garten wohlfühlen!</h5>
          <p>Zufriedene Kunden - das ist unser höchstes Ziel. Wir führen unser Geschäft nach alten traditionsreichen Werten und das sind unsere Geschäftsprinzipien: Offene und ehrliche Beratung, fachlich kompetente Arbeitsweise, faire Kalkulation, zuverlässige Terminabsprachen und transparente offizielle Abrechnungen. Vielleicht sehen wir uns schon bald in Ihrem Garten zu einem persönlichen Beratungsgespräch.</p>
      </div>
  </div>
</div>
asd


<div class="container">


<div class="gallerie mt-3 mb-3" id="galleriee">
          <div id="gallery" class="gallery" itemscope itemtype="http://schema.org/ImageGallery">
     
           <div class="row">
               
          

              @foreach ($images as $image)
              <div class="col-md-4 col-sm-6">
                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                  <a href="http://eddigartenbau.de/img/{{ $image }}" data-width="1200" data-height="900" itemprop="contentUrl">
                     <img src="http://eddigartenbau.de/img/{{ $image }}" class="foto" height="300px"  width="100%" itemprop="thumbnail" alt="Image description">
                  </a>
                </figure>
              </div>
          @endforeach

            
           
              
            
          
            </div>
           <!--  <div class="mb-2 d-flex justify-content-center"><p class="btn btn-success">Alle Galerie</p></div> -->
 
            
        </div>
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