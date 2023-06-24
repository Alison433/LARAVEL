<!DOCTYPE html>
<html lang="en">
<head>
  //ok 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IQO</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logoIQO.png') }}">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
     <link rel="stylesheet" href="{{asset('css/StyleIndex.css')}}" />
     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css" integrity="tu-integridad" crossorigin="anonymous" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-***********" crossorigin="anonymous" />
     <style>
        .carousel-item {
          height: 400px;
          background-color: black;
        }
      </style>
</head>
<body class="bg-dark">

<nav class="navbar navbar-expand-lg navbar navbar-light rounded sticky-top" style="background-color: #e3f2fd;">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/login') }}">
            <img src="{{ asset('images/logoIQO.png') }}" alt="logoIQO" width="170px">
      </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ url('login')}}" style="font-size: 18px;">
                <i class="fas fa-user fa-lg"></i>Iniciar Sesión</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/QuienesSomos')}}" style="font-size: 18px;">
                <i class="fa-solid fa-cloud-question fa-lg"></i>¿Quienes Somos?</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false" style="font-size: 18px;"><i class="fa-duotone fa-book-open-reader fa-lg"></i> Catálogo</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{ url('/CatalogoCamaras')}}">Cámaras</a></li>
                <li><a class="dropdown-item" href="{{ url('/CatalogoDVR')}}">DVR</a></li>
                <li><a class="dropdown-item" href="{{url('/CatalogoDiscoDuro')}}">Discos Duros</a></li>
                <li><a class="dropdown-item" href="{{ url('/CatalogoUPS')}}">UPS</a></li>
                <li><a class="dropdown-item" href=" {{ url('CatalogoFuentes')}}">Fuentes</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/Contacto')}}" style="font-size: 18px;"><i class="fa-solid fa-headset fa-lg"></i> Contacto</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search" Required>
            <button class="btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
          </form>
        </div>
      </div>
    </nav>
  </nav>
      <main>
      
        <section class="py-5 text-center container">
          <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
              <h1 class="fw-light">Cámaras</h1>
              <p class="lead text-muted">Aqui te mostramos las camaras que tenemos a disposicion, son camaras de alta calidad,
                tenemos camaras a blanco y negro, a color, de noche, largas, cortas, con funcionamiento a traves de WI-FI, etc.
                Si quieres comprar algun producto en linea debes registrarte en nuestra pagina aqui o Iniciar Sesion.
              </p>
              <p>
                <a href="{{ url('/login')}}" class="btn btn-primary my-2">Iniciar Sesion</a>
                <a href="{{ url('/Registro')}}" class="btn btn-secondary my-2">Registrate</a>
              </p>
            </div>
          </div>
        </section>
      
        <div class="album py-5 bg-light">
          <div class="container">
      
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
              <div class="col">
                <div class="card shadow-sm">
                 <img src="{{asset('images/camara1.PNG')}}" alt="">
                  <div class="card-body">
                    <h5 class="card-title">Camara Domo Dahua</h5>
                    <p class="card-text">Camara tipo domo plástico full HD 1080p lente 3.6 M.M*</p>
                    <P class="card-text">Tecnología 4 en 1 CVI/AHD/TVI/CVBS</P>
                    <P class="precio">$1000</P>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-primary">Agregar al Carrito</button>
                      </div>
                      <small class="text-muted">10 Disponibles</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card shadow-sm">
                  <img src="{{asset('images/camara1.PNG')}}" alt="">
                  <div class="card-body">
                    <h5 class="card-title">Camara Domo Dahua</h5>
                    <p class="card-text">Camara tipo domo plástico full HD 1080p lente 3.6 M.M*</p>
                    <P class="card-text">Tecnología 4 en 1 CVI/AHD/TVI/CVBS</P>
                    <P class="precio">$1000</P>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-primary">Agregar al Carrito</button>
                      </div>
                      <small class="text-muted">10 Disponibles</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card shadow-sm">
                  <img src="{{asset('images/camara1.PNG')}}" alt="">
                  <div class="card-body">
                    <h5 class="card-title">Camara Domo Dahua</h5>
                    <p class="card-text">Camara tipo domo plástico full HD 1080p lente 3.6 M.M*</p>
                    <P class="card-text">Tecnología 4 en 1 CVI/AHD/TVI/CVBS</P>
                    <P class="precio">$1000</P>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-primary">Agregar al Carrito</button>
                      </div>
                      <small class="text-muted">10 Disponibles</small>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="col">
                <div class="card shadow-sm">
                  <img src="{{asset('images/camara1.PNG')}}" alt="">
                  <div class="card-body">
                    <h5 class="card-title">Camara Domo Dahua</h5>
                    <p class="card-text">Camara tipo domo plástico full HD 1080p lente 3.6 M.M*</p>
                    <P class="card-text">Tecnología 4 en 1 CVI/AHD/TVI/CVBS</P>
                    <P class="precio">$1000</P>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-primary">Agregar al Carrito</button>
                      </div>
                      <small class="text-muted">10 Disponibles</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card shadow-sm">
                  <img src="{{asset('images/camara1.PNG')}}" alt="">
                  <div class="card-body">
                    <h5 class="card-title">Camara Domo Dahua</h5>
                    <p class="card-text">Camara tipo domo plástico full HD 1080p lente 3.6 M.M*</p>
                    <P class="card-text">Tecnología 4 en 1 CVI/AHD/TVI/CVBS</P>
                    <P class="precio">$1000</P>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-primary">Agregar al Carrito</button>
                      </div>
                      <small class="text-muted">10 Disponibles</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card shadow-sm">
                  <img src="{{asset('images/camara1.PNG')}}" alt="">
                  <div class="card-body">
                    <h5 class="card-title">Camara Domo Dahua</h5>
                    <p class="card-text">Camara tipo domo plástico full HD 1080p lente 3.6 M.M*</p>
                    <P class="card-text">Tecnología 4 en 1 CVI/AHD/TVI/CVBS</P>
                    <P class="precio">$1000</P>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-primary">Agregar al Carrito</button>
                      </div>
                      <small class="text-muted">10 Disponibles</small>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="col">
                <div class="card shadow-sm">
                  <img src="{{asset('images/camara1.PNG')}}" alt="">
                  <div class="card-body">
                    <h5 class="card-title">Camara Domo Dahua</h5>
                    <p class="card-text">Camara tipo domo plástico full HD 1080p lente 3.6 M.M*</p>
                    <P class="card-text">Tecnología 4 en 1 CVI/AHD/TVI/CVBS</P>
                    <P class="precio">$1000</P>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-primary">Agregar al Carrito</button>
                      </div>
                      <small class="text-muted">10 Disponibles</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card shadow-sm">
                  <img src="{{asset('images/camara1.PNG')}}" alt="">
                  <div class="card-body">
                    <h5 class="card-title">Camara Domo Dahua</h5>
                    <p class="card-text">Camara tipo domo plástico full HD 1080p lente 3.6 M.M*</p>
                    <P class="card-text">Tecnología 4 en 1 CVI/AHD/TVI/CVBS</P>
                    <P class="precio">$1000</P>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-primary">Agregar al Carrito</button>
                      </div>
                      <small class="text-muted">10 Disponibles</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card shadow-sm">
                  <img src="{{asset('images/camara1.PNG')}}" alt="">
                  <div class="card-body">
                    <h5 class="card-title">Camara Domo Dahua</h5>
                    <p class="card-text">Camara tipo domo plástico full HD 1080p lente 3.6 M.M*</p>
                    <P class="card-text">Tecnología 4 en 1 CVI/AHD/TVI/CVBS</P>
                    <P class="precio">$1000</P>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-primary">Agregar al Carrito</button>
                      </div>
                      <small class="text-muted">10 Disponibles</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      
      </main>
      
      
      
          <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
      
            
    
</body>
</html> 