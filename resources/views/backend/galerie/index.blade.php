@extends('layouts.main-layout')
@section('title')
Liste des images
@endsection
@section('autres_css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
@endsection
@section('content')
<div class="row">
<div class="col-md-12 col-sm-12 ">
	<div class="x_panel">
		<div class="x_title">
			<h2>Liste des images</h2>
			<div class="clearfix"></div>
		</div>
		<div class="x_content">


        <a href="{{ route('galerie.create') }}" class="btn btn-sm btn-outline-info"><span class="fa fa-plus"></span> Nouvelles images</a>
			<br />
			<table id="example" class="table table-striped table-bordered display text-center">
              <thead>
                <tr>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>
              	@foreach ($galeries as $galerie)
              	<tr>
              		<td >
              			<img src="{{ asset('documents/'.$galerie->image) }}" alt="image" style="width:100px;">
              		</td>
              		<td class="parent">
                    {{-- <a href="{{ route('galerie.edit',$galerie->id) }}" class="btn btn-sm btn-warning">Modifier</a> --}}
                    <a href="#" class="btn btn-sm btn-danger supprimer">Supprimer <span class="fa fa-trash-o"></span></a>
						<form action="{{ route('galerie.destroy',$galerie->id) }}" method="post" class="form_suppression">
							@csrf
							@method('DELETE')
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