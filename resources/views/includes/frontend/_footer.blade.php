<footer class="footer section">
    <div class="container">
      <div class="row">
        <div class=" col-md-4 col-sm-6">
          <div class="widget">
            <h4 class="text-capitalize mb-4">Groupe</h4>
  
            <ul class="list-unstyled footer-menu lh-35">
              @foreach ($menus->where('type_menu_id',2) as $menu)
               <li><a  href="{{route('menu_show',$menu->id)}}">{{$menu->titre}}</a></li>
              @endforeach
             
            </ul>
          </div>
        </div>
        <div class=" col-md-4 col-sm-6">
          <div class="widget">
            <h4 class="text-capitalize mb-4">Nos Filiales</h4>
  
            <ul class="list-unstyled footer-menu lh-35">
              @foreach ($menus->where('type_menu_id',1) as $menu)
               <li><a  href="{{route('menu_show',$menu->id)}}">{{$menu->titre}}</a></li>
              
               @endforeach
             
            </ul>
          </div>
        </div>
        <div class=" col-md-4 col-sm-6 " id="contact">
          <div class="widget">
            <div class="logo mb-4">
              <h3>{{ config('app.name') }}<span>.</span></h3>
            </div>
            <h6>{{$info->email}}</h6>
            <h6>{{$info->adresse}}</h6>
            <h4><span class="text-color">{{$info->telephone}}</span></h4>
          </div>
        </div>
  
     
      </div>
  
    
      </div>
    </div>
  </footer>