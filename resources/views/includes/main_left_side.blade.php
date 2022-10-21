<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
      <div class="navbar nav_title" style="border: 0;">
        <a href="/" class="site_title"><span>{{ config('app.name') }}</span></a>
      </div>

      <div class="clearfix"></div>

      <!-- menu profile quick info -->
       <div class="profile clearfix">
        <div class="profile_pic">
          <img src="images/img.jpg" alt="..." class="img-circle profile_img">
        </div>
        <div class="profile_info">
          <span>Welcome,</span>
          <h2>John Doe</h2>
        </div>
      </div> 
      <!-- /menu profile quick info -->

      <br />

      <!-- sidebar menu -->
    

      <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
          <h3>General</h3>
          <ul class="nav side-menu">
            <li><a><i class="fa fa-align-justify"></i> Menus <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href=" {{route('menu.index')}} ">Liste des menus</a></li>
                <li><a href=" {{route('menu.create')}} ">Nouveau menu</a></li>
              </ul>
            </li>

          

            <li><a><i class="fa fa-newspaper-o"></i> Articles <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="{{route('article.index')}}">Liste des articles</a></li>
                <li><a href="{{route('article.create')}}">Nouvel article</a></li>
              </ul>
            </li>

            <li><a><i class="fa fa-image"></i> Images <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="{{route('galerie.index')}}">Liste des images</a></li>
                <li><a href="{{route('galerie.create')}}">Nouvelle image</a></li>
              </ul>
            </li>

            <li><a><i class="fa fa-home"></i> Informations  <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="{{route('info_complementaire.edit',1)}}">Contact</a></li>
                <li><a href="{{route('mot_directeur',1)}}">Mot directeur</a></li>
              </ul>
            </li>

          

          </ul>

         
        </div>

      </div>
      <!-- /sidebar menu -->

      <!-- /menu footer buttons -->
      {{-- <div class="sidebar-footer hidden-small">
        <a data-toggle="tooltip" data-placement="top" title="Settings">
          <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
          <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Lock">
          <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Déconnexion" href="{{ url('/logout') }}">
          <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
        </a>
      </div> --}}
      <!-- /menu footer buttons -->
    </div>
  </div>