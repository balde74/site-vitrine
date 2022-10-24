<!-- Header Start -->
<header class="navigation">
    <div class="header-top ">
      <div class="container">
        <div class="row justify-content-between align-items-center">
          <div class="col-lg-2 col-md-4">
            <div class="header-top-socials text-center text-lg-left text-md-left">
              <a href="https://www.facebook.com/themefisher" aria-label="facebook"><i class="fab fa-facebook-f"></i></a>
              <a href="https://twitter.com/themefisher" aria-label="twitter"><i class="fab fa-twitter"></i></a>
              <a href="https://github.com/themefisher/" aria-label="github"><i class="fab fa-github"></i></a>
            </div>
          </div>
          <div class="col-lg-10 col-md-8 text-center text-lg-right text-md-right">
            <div class="header-top-info mb-2 mb-md-0">
              <a href="tel:{{$info->telephone}}">Téléphone : <span>+224 {{$info->telephone}}</span></a>
              <a href="#"><i class="fas fa-envelope mr-2"></i><span>{{$info->email}}</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <div id="navbar">
      <div class="container-fluid ">
        <div class="row">
          <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg px-0 py-4">
              <a class="navbar-brand" href="/">
                {{ config('app.name') }}<span>.</span>
                <img src="{{asset('frontend/images/portfolio/3.jpg')}}" alt="" style="width: 20%">
              </a>

        
              <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09"
                aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
              </button>
        
              <div class="collapse navbar-collapse text-center" id="navbarsExample09">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="/">Accueil</a>
                  </li>
                  <li class="nav-item dropdown  ">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Groupe Emab <i class="fas fa-chevron-down small"></i></a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown03">
                        @foreach ($menus->where('type_menu_id',2) as $menu)
                            <li><a class="dropdown-item " href="{{route('menu_show',$menu->id)}}">{{$menu->titre}}</a></li>
                        @endforeach
                    </ul>
                  </li>

                  <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nos filiales <i class="fas fa-chevron-down small"></i></a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown03">
                        @foreach ($menus->where('type_menu_id',1) as $menu)
                            <li><a class="dropdown-item " href="{{route('menu_show',$menu->id)}}">{{$menu->titre}}</a></li>
                            
                        @endforeach
                    </ul>
                  </li>


                  <li class="nav-item "><a class="nav-link" href="/#portofolio"> Galerie</a></li>
                  <li class="nav-item "><a class="nav-link" href="service.html">Actualités</a></li>
                 
                </ul>
        
                <div class="my-2 my-md-0 ml-lg-4 text-center">
                  <a href="#contact" class="btn btn-solid-border btn-round-full">Nous contacter</a>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- Header Close -->