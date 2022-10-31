@extends('layouts.main-layout')

@section('autres_css')
	<link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection
@section('content')
<div class="row">
<div class="col-md-12 col-sm-12 ">
	<div class="x_panel">
		<div class="x_title">
			<h2>Liste des utilisateurs</h2>
			<div class="clearfix"></div>
		</div>
		<div class="x_content">
			<br />
			<table id="example" class="table table-striped table-bordered display">
              <thead>
                <tr>
                  <th>Nom</th>
                  <th>E-mail</th>
                  <th>rôle</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>
              	@foreach ($users as $user)
              	<tr>
              		<td>{{ $user->getFullName() }}</td>
              		<td>{{ $user->email }}</td>
              		
              		<td>
						{{ $user->role->nom }} 
              		</td>
              		<td class="parent">
          			{{-- @if (Auth::user()->id != $user->id) --}}
					<a href="{{ route('user.edit',$user->id) }}" class="btn btn-sm btn-outline-info btn-round">Modifier</a>
					<a href="#" class="btn btn-sm btn-outline-danger btn-round supprimer">Supprimer</a> 
					<form action="{{ route('user.destroy',$user->id) }}" method="post" class="form_suppression">
						@csrf
						@method('DELETE')

					</form>
				 {{-- @endif --}}

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
	{{-- {{-- @include('layouts/partials/_data_table_simple') --}}
@endsection