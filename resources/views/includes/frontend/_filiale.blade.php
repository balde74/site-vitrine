<!-- Section Testimonial End -->
<section class="section latest-blog bg-2">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7 text-center">
				<div class="section-title">
					<h2 class="mt-3 content-title text-color">NOS FILIALES</h2>
				</div>
			</div>
		</div>

		<div class="row justify-content-center">
            @foreach ($menus->where('type_menu_id',1) as $menu)
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="card bg-transparent border-0">
                        <img loading="lazy" src="{{asset('documents/'.$menu->image)}}" alt="blog" style="max-height: 250px; height:250px">

                        <div class="card-body mt-2">


                            <h3 class="mt-3 mb-5 lh-36"><a href="{{route('menu_show',$menu->id)}}" class="text-white ">{{$menu->titre}}</a></h3>
                            <p class="mb-4 text-white text-justify">
                                 {{ str_limit($menu->description,400)}}
                            </p>

                            <a href="{{route('menu_show',$menu->id)}}" class="btn btn-small btn-solid-border btn-round-full text-white">Voir Plus</a>

                        </div>
                    </div>
                </div>
            @endforeach

		

			
		</div>
	</div>
</section>