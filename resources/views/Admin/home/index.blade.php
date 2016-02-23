

@extends('admin')

@section('libros')

<div class="page-title">
	<div class="title_left">
		<h3>Libros
		</h3>
	</div>
</div>

<div class="clearfix"></div>

<div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Libros agregados</h2>
                                    <button onclick="location.href='/admin/home/addbook';" class="btn btn-sm pull-right" ><i class="fa fa-plus-circle"></i> Agregar</button>
                  
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <table id="example" class="table table-striped responsive-utilities jambo_table">
                                        <thead>
                                            <tr class="headings">
                                                <th>ID</th>
                                                <th>Fecha de creación</th>
                                                <th>Libro</th>
                                                <th>Autor</th>
                                                <th>N° extractos</th>
                                                <th>Genero</th>
                                                <th>Modificar</th>
                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach($libros as $libro)
                                            <tr class="odd pointer">
                                                <td class=" ">{{ $libro->id }}</td>
                                                <td class=" ">{{ $libro->created_at }}</td>
                                                <td class=" "><a href="/admin/home/{{ $libro->id }}">{{ $libro->nombre }}</a>
                                                </td>
                                                <td class=" ">{{ $libro->autor }}</td>
                                                <td class=" ">{{ count($libro->extractos) }}</td>
                                                <td class=" ">{{ $libro->genero }}</td>
                                                <td class="a-left a-left ">
                                                    <a href="/admin/home/{{$libro->id}}/editar"<i class="fa fa-wrench"></i></a>
                                                    <a href="#"><i class="fa fa-close"></i></a>
                                                </td>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>

                        <br />
                        <br />
                        <br />

                    </div>

@endsection


