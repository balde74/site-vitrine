@extends('layouts.main-layout')
@section('title')
{{ $article->titre }}
@endsection
@section('autres_css')
  <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection
@section('content')

<div class="row">
	<div class="col-md-10 mx-auto col-sm-12 ">
		<div class="x_panel">
			<div class="x_title">
				<h2>Détails de l'article <a href="{{ route('article.show',$article->id) }}"><small>voir l'article>>></small></a></h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content mx-auto">
				<h4><b>{{ $article->titre }}</b></h4>
					<div style="font-size: 18px;text-align: justify;">
						
						
						{!! $article->introduction !!} <br/>

						{{-- @if ($article->image)
						<img src="{{ asset('documents/'.$article->image) }}" class="" alt="image de l'article" width="100%" >
						@endif --}}
					</div>

					 <hr/>
					 <div class="row">
			 					<h4>les sections</h4>
					 	<div class="table-responsive">
             	<table id="example" class="table table-striped table-bordered display text-center">
	              <thead>
		              	<tr>
			        		<th>Numero du section</th>
			        		<th>Action</th>
		        		</tr>
			        </thead>

		        	<tbody>

		        		@foreach ($article->sections->sortBy('numero_section') as $section)
		        			<tr>
		        				<td><a href="#">section N° {{ $section->numero_section }} </a> </td>
		        				<td class="parent">
		        						<a href="{{ route('section.show',$section->id) }}" class="btn  btn-round btn-outline-info btn-sm">Voir</a>
		        					
		        						<a href="{{ route('section.edit',$section->id) }}" class="btn  btn-round btn-outline-warning btn-sm">Modifier</a>

		        						<a href="#" class="btn  btn-round btn-outline-danger btn-sm supprimer">Supprimer</a>
			        					<form action="{{ route('section.destroy',$section->id) }}" method="post" class="form_suppression">
			        						@csrf
			        						@method('DELETE')
			        						{{-- <input type="submit" value="Supprimer" class="btn  btn-round btn-outline-danger btn-sm"> --}}
			        					</form>
		        					
		        				</td>
		        			</tr>
		        		@endforeach
		        	</tbody>

     			</table>
    		</div>
					 	
					 </div>

    		<br>
	             
         <a href="{{ route('section_create',$article->id) }}" class="btn btn-primary">Ajouter une section </a>
                  




			</div>
		</div>
	</div>
</div> 


@endsection
@section('autres_scripts')
	@include('includes.data_table_simple')
@endsection