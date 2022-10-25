@extends('layouts/main-layout-frontend')
@section('title')
    actualités
@endsection

@section('content')
<section class="page-title bg-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="block text-center">
           
            <h1 class="text-capitalize mb-4 text-lg">Actualités</h1>
            <ul class="list-inline">
              <li class="list-inline-item"><a href="index.html" class="text-white">Accueil</a></li>
              <li class="list-inline-item"><span class="text-white">/</span></li>
              <li class="list-inline-item text-white-50">
                Actualités
            </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</section>

<section class="section blog-wrap bg-gray">
	<div class="container">
		<div class="row">
            @foreach ($articles as $article)
                
           
                <div class="col-lg-6 col-md-6 mb-5">
                    <div class="blog-item">
                        <img loading="lazy" src="{{asset('documents/'.$article->image)}}" alt="blog"  class="img-fluid rounded" style="min-height: 300px ; max-height: 300px ; height:300px ; width:100%" >

                        <div class="blog-item-content bg-white p-5">
                            <div class="blog-item-meta bg-gray pt-2 pb-1 px-3 text-center">
                                {{-- <span class="text-muted text-capitalize d-inline-block mr-3"><i class="ti-pencil-alt mr-2"></i>Creativity</span> --}}
                                <span class="text-muted text-capitalize d-inline-block mr-3"><i class="ti-comment mr-2"></i>5 Comments</span>
                                <span class="text-black text-capitalize d-inline-block mr-3"><i class="ti-time mr-1"></i> {{$article->created_at->format('d -m -Y')}}</span>
                            </div>

                            <h3 class="mt-3 mb-3"><a href="{{route('article_show',$article->id)}}">{{$article->titre}}</a></h3>
                            <p class="mb-4">{{ str_limit($article->introduction,300)}}</p>
                            
                                <a href="{{route('article_show',$article->id)}}" class="btn btn-small btn-main btn-round-full"  >Détail</a>

                            
                        </div>
                    </div>
                </div>
            @endforeach

		

		
	</div>
</section>





@endsection