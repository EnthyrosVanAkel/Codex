 @extends('admin')

@section('libros')

                  <div class="page-title">
                        <div class="title_left">
                            <h3>Add</h3>
                        </div>

                       
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel" style="height:600px;">
                                <div class="x_title">
                                    <div class="clearfix"></div>


                                    {!! Form::open(['method'  => 'POST','action' =>['HomeController@guardar_libro'],'files' => 'true']) !!}
                  <div class="box-body">

                    <div class="form-group col-xs-12">

                      {!! Form::label('nombre','Libro: ') !!}
                        {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre del libro']) !!}
                        <br>
                         {!! Form::label('autor','Autor: ') !!}
                        {!! Form::text('autor',null,['class'=>'form-control','placeholder'=>'Autor del libro']) !!}
                        <br>
                        {!! form::file('imagen',null,['class' => 'form-control']) !!}

                      <div class="col-xs-4">
                        <h3>S</h3>
                        {!! Form::textarea('extracto1',null,['class'=>'form-control','row'=>'3','placeholder'=>'Extracto chico....']) !!}
                      </div>

                      <div class="col-xs-4">
                        <h3>M</h3>
                        {!! Form::textarea('extracto2',null,['class'=>'form-control','row'=>'5','placeholder'=>'Extracto mediano....']) !!}
                      </div>

                      <div class="col-xs-4">
                        <h3>L</h3>
                        {!! Form::textarea('extracto3',null,['class'=>'form-control','row'=>'8','placeholder'=>'Extracto grande....']) !!}
                      </div>
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