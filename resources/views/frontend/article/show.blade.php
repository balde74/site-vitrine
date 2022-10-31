@extends('layouts/main-layout-frontend')
@section('title')
    actualité detail
@endsection

@section('content')
<section class="page-title bg-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="block text-center">
           
            <h1 class="text-capitalize mb-4 text-lg">{{$article->titre}}</h1>
            {{-- <ul class="list-inline">
              <li class="list-inline-item"><a href="index.html" class="text-white">Accueil</a></li>
              <li class="list-inline-item"><span class="text-white">/</span></li>
              <li class="list-inline-item text-white-50">
                Actualités
            </li>
            </ul> --}}
          </div>
        </div>
      </div>
    </div>
</section>

<section class="section blog-wrap bg-gray">
	<div class="container">
		<div class="row ">
			<div class="col-md-8">
				<div class="row ">
					<div class="col-md-12">
						<div class="single-blog-item">
							<div class="blog-item-content bg-white p-2">
                                @foreach ($article->sections->sortBy('numero_section') as $section)
							        <img loading="lazy" src="{{asset('documents/'.$section->section_image)}}" alt="image de section" class="img-fluid rounded" style="width: 100%">
								    <p class="text-justify " >{!!$section->section!!}</p>
                                    
                                @endforeach
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-4 mt-5 mt-md-0">
				<div class="sidebar-wrap">


					<div class="sidebar-widget card border-0 mb-3">
						<img loading="lazy" src="{{asset('documents/'.$article->image)}}" alt="blog-author" class="img-fluid">
						<div class="card-body p-4 text-center">
							<h5 class="mb-0 mt-4">{{$article->titre}}</h5>
							<p class="text-justify">{{$article->introduction}}</p>

							{{-- <ul class="list-inline author-socials">
								<li class="list-inline-item mr-3">
									<a href="#"><i class="fab fa-facebook-f text-muted"></i></a>
								</li>
								<li class="list-inline-item mr-3">
									<a href="#"><i class="fab fa-twitter text-muted"></i></a>
								</li>
								<li class="list-inline-item mr-3">
									<a href="#"><i class="fab fa-linkedin-in text-muted"></i></a>
								</li>
								<li class="list-inline-item mr-3">
									<a href="#"><i class="fab fa-pinterest text-muted"></i></a>
								</li>
								<li class="list-inline-item mr-3">
									<a href="#"><i class="fab fa-behance text-muted"></i></a>
								</li>
							</ul> --}}
						</div>
					</div>

					<div class="sidebar-widget latest-post card border-0 p-4 mb-3">
					<h5>Actualités récentes </h5>
							@foreach ($articles->where('status',1)->where('id','<>',$article->id)->take(4) as $article)
								<div class="media border-bottom py-3">
									<div class="col"><a href="{{route('article_show',$article->id)}}"><img loading="lazy" class="mr-4" src="{{asset('documents/'.$article->image)}}" alt="blog" width="100%"></a></div>
									<div class="media-body col">
										<h6 class="my-2"><a href="{{route('article_show',$article->id)}}">{{$article->titre}}</a></h6>
										{{-- <span class="text-sm text-muted">03 Mar 2018</span> --}}
									</div>
									
									
								</div>
							
							@endforeach
				</div>
			</div>
		</div>
	</div>
</section>
@endsection