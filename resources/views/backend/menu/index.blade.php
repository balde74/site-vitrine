@extends('layouts.main-layout')
@section('title')
	Liste des menus
@endsection

@section('autres_css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
@endsection

@section('content')
  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Liste des menus</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">

        <a href="{{ route('menu.create') }}" class="btn btn-sm btn-outline-info"><span class="fa fa-plus"></span> Nouveau menu</a>

        <br />

        <table id="example" class="table table-hover table-bordered text-center">
          <thead>
            <tr>
              <th>Titre</th>
              <th>Type de menu</th>
              <th>Description</th>
              <th>Actions</th>
            </tr>
          </thead>

          <tbody>
            @foreach ($menus as $menu)
              <tr>
                <td>{{ $menu->titre }}</td>
                <td>
                {{$menu->type_menu->type}}
                </td>
                <td>
                  {{ str_limit($menu->description,40) }} 
                  
                    @if (strlen($menu->description)>40)
                    <a href="#" data-toggle="modal" data-target="#modal_description" data-bouton="lien"  data-description="{{ $menu->description }}" class="bouton_description">Voir plus </a>
                  @endif
                </td>
                <td class="parent">
                  <a href="#" class="btn btn-round btn-sm btn-outline-secondary btn-round "><span class="fa fa-plus"></span> Fichier</a>
                  <a href="{{ route('menu.show',$menu->id) }}" class="btn btn-round btn-sm btn-outline-info btn-round "><span class="fa fa-eye"></span> Detail</a>

                  <a href="{{ route('menu.edit',$menu->id) }}" class="btn btn-round btn-sm btn-outline-warning btn-round "><span class="fa fa-pencil"></span> Modifier</a>
                  <a href="#" class="btn btn-round btn-sm btn-outline-danger btn-round supprimer"> <span class="fa fa-trash"></span> Supprimer</a>

                   <form action="{{ route('menu.destroy',$menu->id) }}" method="post" class="form_suppression ">
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

@section('script')
{{-- @include('includes.data_table_simple') --}}


{{-- 
	//confirmation de suppression
	 function ConfirmDelete()
      {
            if (confirm("Etes vous sure"))
	            	$('.form_suppression').submit()
      }
  </script> --}}

  <div class="modal fade" id="modal_description" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered " role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLongTitle">Description</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body" id="modal_body">
			<p></p>
		</div>
	 
	  </div>
	</div>
  </div>
@endsection 