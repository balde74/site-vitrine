@extends('layouts.main-layout')
@section('title')
{{ $article->titre }}
@endsection
@section('content')

<div class="row">
	<div class="col-md-9 mx-auto col-sm-12 ">
		<div class="x_panel">
			<div class="x_title">
				<h2>Détails de l'article</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content mx-auto">
				<h4><b>{{ $article->titre }}</b></h4>
					<div style="font-size: 18px;text-align: justify;">
						
							@if ($article->image)
							<img src="{{ asset('documents/'.$article->image) }}" class="" alt="image de l'article" width="100%" >
							@endif
							<br/>
							<h2> <b> Introduction </b> </h2>
							{!! $article->introduction !!} 
							<br>
							<h2> <b> Contenu </b> </h2>
						@foreach ($article->sections->sortBy('numero_section') as $section)
							
							@if ($section->section_image)
								<img src="{{ asset('documents/'.$section->section_image) }}" class="" alt="image de la section" width="100%" >
								<br/><br/>
							@endif
							{!! $section->section !!}
							<br/><br/>
						@endforeach

					</div>

					 <hr/>
	                <h4>
	                  {{-- <i class="fa fa-comments"></i> Commentaires ({{$article->commentaires->count()}}) &nbsp;&nbsp; --}}
	                  <a href="{{ route('article.edit',$article->id) }}"><i class="fa fa-pencil-square"></i> Modifier &nbsp;&nbsp;</a>
	                </h4>

				<!--  commentes -->
                <ul class="messages">
                  {{-- @foreach($article->commentaires as $commentaire)
                  <li>
                    <img src="{{ asset('frontend/image_par_defaut/auteur_commentaire.png') }}" class="avatar" alt="Avatar">

                    <div class="message_wrapper parent">
                      <h4 class="heading">{{$commentaire->nom}} ({{ $commentaire->email }})</h4>
                      <blockquote class="message" style="font-size: 16px;">
                        <?php echo nl2br($commentaire->commentaire); ?>
                      </blockquote>
                      <br />
                      <a href="#" class=" btn btn-sm btn-danger supprimer">supprimer</a>
                      <p class="url">
                        <form action="{{ route('commentaire.destroy',$commentaire->id) }}" method="post" class="form_suppression">
													@csrf
													@method('DELETE')
												</form>
                      </p>
                    </div>
                  </li>
                  @endforeach --}}

                  {{-- {{ $article->commentaires()->links() }} --}}
                </ul>
                <!-- end comments -->





			</div>
		</div>
	</div>
</div> 


@endsection