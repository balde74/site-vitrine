@extends('layouts.main-layout')
@section('title')
Liste des articles
@endsection

@section('autres_css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
@endsection
@section('content')
<div class="row">
<div class="col-md-12 col-sm-12 ">
	<div class="x_panel">
		<div class="x_title">
			<h2>Liste des articles</h2>
			<div class="clearfix"></div>
		</div>
		<div class="x_content">

        <a href="{{ route('article.create') }}" class="btn btn-sm btn-outline-info"><span class="fa fa-plus"></span> Nouvel article</a>
			<br />
			<table id="example" class="table table-striped table-bordered text-center" >
              <thead>
                <tr>
                  <th>Date</th>
                  <th>Titre</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>
              	@foreach ($articles as $article)
              	<tr>
              		<td>
              			@php
              				$date = date_create($article->created_at);
              				echo date_format($date,'d/m/Y');
              			@endphp
              		</td>
              		<td>{{ $article->titre }}</td>
              		

              		<td>
									@if ($article->status == 0)
										Non publié
									@elseif($article->status == 1)
										Publié
									@endif		
								</td>
              		
              		<td class="parent">

						@if ($article->status == 0)
							<a href="{{ route('status_article',$article->id) }} " class="btn btn-sm btn-outline-success btn-round"> <span class="fa fa-share"></span> Publier</a>
						@elseif($article->status == 1)
							<a href="{{ route('status_article',$article->id) }} " class="btn btn-sm btn-outline-warning btn-round"> <span class="fa fa-eye-slash"></span> Masquer</a>

						@endif
						
										<a href="{{ route('section',$article->id) }}" class="btn btn-sm btn-outline-secondary btn-round"><span class="fa fa-align-justify"></span> Section </a>
				            <a href="{{ route('article.show',$article->id) }}" class="btn btn-round btn-sm btn-outline-info btn-round "><span class="fa fa-eye"></span> Détails</a>
										<a href="{{ route('article.edit',$article->id) }}" class="btn btn-round btn-sm btn-outline-warning btn-round "><span class="fa fa-pencil"></span> Modifier</a>
										<a href="#" class="btn btn-round btn-sm btn-outline-danger btn-round supprimer"> <span class="fa fa-trash"></span> Supprimer</a>
										<form action="{{ route('article.destroy',$article->id) }}" method="post" class="form_suppression ">
											@csrf
											@method('DELETE')

											{{-- <input type="submit" value="Supprimer" class="btn btn-sm btn-danger"> --}}
										</form>

              			
              		</td>
				              		
              	</tr>
              	@endforeach
              </tbody>
            </table>
		</div>
	</div>
</div>
</div>

@endsection
@section('autres_scripts')
	@include('includes/data_table_simple')
@endsection