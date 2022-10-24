@extends('layouts.main-layout')
@section('title')
Liste des slogans
@endsection
@section('autres_css')
	<link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection
@section('content')
<div class="row">
<div class="col-md-12 col-sm-12 ">
	<div class="x_panel">
		<div class="x_title">
			<h2>Liste des slogans</h2>
			<div class="clearfix"></div>
		</div>
		<div class="x_content">


        <a href="{{ route('slogan.create') }}" class="btn btn-sm btn-outline-info"><span class="fa fa-plus"></span> Nouveau slogan</a>
			<br />
			<table id="example" class="table table-striped table-bordered display text-center">
              <thead>
                <tr>
                  <th>Icone</th>
                  <th>Petit texte</th>
                  
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>
              	@foreach ($slogans as $slogan)
              	<tr>
              		<td >
						{{ $slogan->icone }} 
              		</td>

                  <td>
                    {!! $slogan->texte!!}
                  </td>

              		<td class="parent">
                    <a href="{{ route('slogan.edit',$slogan->id) }}" class="btn btn-sm btn-outline-warning btn-round"> <span class="fa fa-edit"></span> Modifier</a>
                    <a href="#" class="btn btn-sm btn-outline-danger btn-round supprimer"> <span class="fa fa-trash"> </span> Supprimer</a>
						<form action="{{ route('slogan.destroy',$slogan->id) }}" method="post" class="form_suppression">
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
	@include('includes.data_table_simple')
@endsection