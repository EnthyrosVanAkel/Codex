 @extends('admin')

@section('libros')

                  <div class="page-title">
                        <div class="title_left">
                            <h3>Editar</h3>
                        </div>


                    </div>
                    <div class="clearfix"></div>

                    <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel" style="height:600px;">
                                <div class="x_title">
                                    <div class="clearfix"></div>
                                    {!! Form::model($libro,['method' => 'PATCH','action'=>['AdminController@modificar_libro',$libro->id],'files' => 'true']) !!}
                 <div class="box-body">

                    <div class="form-group col-xs-12">

                      {!! Form::label('nombre','Libro: ') !!}
                        {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre del libro']) !!}
                        <br>
                         {!! Form::label('autor','Autor: ') !!}
                        {!! Form::text('autor',null,['class'=>'form-control','placeholder'=>'Autor del libro']) !!}
                        <br>
                        {!! Form::label('genero','Genero: ') !!}
                        {!! Form::select('genero', ['NOVELA' => 'NOVELA','ENSAYO' => 'ENSAYO','POESIA' => 'POESIA','CUENTO' => 'CUENTO','TEATRO' => 'TEATRO']) !!}
                        <br>
                        {!! Form::label('subgenero','Subgenero: ') !!}
                        {!! Form::text('subgenero',null,['class'=>'form-control','placeholder'=>'Subgenero del libro']) !!}
                        <br>
                        {!! Form::label('url_amazon','URL: ') !!}
                        {!! Form::text('url_amazon',null,['class'=>'form-control','placeholder'=>'URL de amazon del libro']) !!}
                        <br>
                        {!! form::file('imagen',null,['class' => 'form-control']) !!}
                    </div>

                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    {!! Form::submit('Añadir',['class'=>'btn btn-default']) !!}
                  </div>
                  
                {!! Form::close() !!} <!-- End Form -->
@if ($errors->any())
  <ul class="alert alert-damage">
    @foreach ($errors->all() as $error)
      <li>{{$error}}</li>
    @endforeach
  </u>
@endif  
                                </div>
                            </div>
                        </div>
                    </div>

                    @endsection