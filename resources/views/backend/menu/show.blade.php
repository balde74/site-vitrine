@extends('layouts.main-layout')
@section('title')
affichage du menu
@endsection
@section('content')

<div class="row">
	<div class="col-md-10 mx-auto col-sm-12 ">
		<div class="x_panel">
			<div class="x_title">
				<h2>Détails du menu</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content mx-auto">
				<h4><b>{{ $menu->titre }}</b></h4>
					<div style="font-size: 18px;text-align: justify;">

						@if ($menu->image)
							<img src="{{ asset('documents/'.$menu->image) }}" class="" alt="image de Presentation" width="100%" >
						@endif
							<br/>
							<h2> <b> Description </b> </h2>
							{{ $menu->description }} 

							<br>
							<br>
							<h2> <b> Contenu </b> </h2>
							@foreach ($menu->section_menus->sortBy('numero_section') as $section)
							
							@if ($section->section_image)
								<img src="{{ asset('documents/'.$section->section_image) }}" class="" alt="image de la section" width="100%" >
								<br/><br/>
							@endif
							{!! $section->section !!}
							<br/><br/>
						@endforeach

					</div>
					<br>




					 <hr/>
	                <h4>
	                  {{-- <i class="fa fa-comments"></i> Commentaires ({{$menu->commentaires->count()}}) &nbsp;&nbsp; --}}
	                  <a href="{{ route('menu.edit',$menu->id) }}"><i class="fa fa-pencil-square"></i> Modifier &nbsp;&nbsp;</a>

	                  {{-- <a href="{{ route('menu.edit',$menu->id) }}"><i class="fa fa-plus-square"></i> Ajouter un fichier &nbsp;&nbsp;</a> --}}
	                </h4>

				<!--  commentes -->
                <ul class="messages">
                  {{-- @foreach($commentaires as $commentaire)
                  <li>
                    <img src="{{ asset('frontend/image_par_defaut/auteur_commentaire.png') }}" class="avatar" alt="Avatar">

                    <div class="message_wrapper">
                      <h4 class="heading">{{$commentaire->nom}} ({{ $commentaire->email }})</h4>
                      <blockquote class="message" style="font-size: 16px;">
                        <?php echo nl2br($commentaire->commentaire); ?>
                      </blockquote>
                      <br />
                      <p class="url">
                        <form action="{{ route('commentaire.destroy',$commentaire->id) }}" method="post">
						@csrf
						@method('DELETE')
						<input type="submit" value="supprimer" class="btn btn-sm btn-danger">
					</form>

                      </p>
                    </div>
                  </li>
                  @endforeach --}}

                  {{-- {{ $commentaires->links() }} --}}
                </ul>
                <!-- end comments -->





			</div>
		</div>
	</div>
</div> 


@endsection