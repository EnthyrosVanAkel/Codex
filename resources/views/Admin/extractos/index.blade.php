 @extends('admin')

@section('libros')

                  <div class="page-title">
                        <div class="title_left">
                            <h3>Extractos</h3>
                        </div>

                    </div>
                    <div class="clearfix"></div>

                    <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel" style="height:600px;">
                                <div class="x_title">
                                    <button onclick="location.href='/xyz/admin/home/addbook';" class="btn btn-md pull-right" ><i class="fa fa-plus-circle"></i> Agregar</button>
                  
                                    <div class="clearfix"></div>
                                </div>
                                
                               <div class="x_content">

                                    <div class="col-xs-2">
                                        <!-- required for floating -->
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs tabs-left">
                                            
                                            <li class="active"><a href="#home" data-toggle="tab">Extractos</a>
                                            </li>
                                            @foreach($libro->extractos as $extracto)
                                            <li><a href="#{{ $extracto->id }}" data-toggle="tab">{{ $extracto->id }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>

                                    <div class="col-xs-10">
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="home">
                                                <p class="lead">Extracto</p>
                                                <p>Texto del extracto....</p>
                                            </div>
                                            @foreach($libro->extractos as $extracto)
                                            <div class="tab-pane" id="{{ $extracto->id }}">
                                            
                                                <p class="lead">
                                                    <a><i class="fa fa-wrench"></i></a>
                                                    <a><i class="fa fa-close"></i></a> 
                                                </p>
                                            <p>{{ $extracto->extracto_texto }}</p>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="clearfix"></div>

                                </div>
                           
                            </div>
                        </div>
                    </div>

                    @endsection