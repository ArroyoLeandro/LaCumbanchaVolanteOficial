@extends('layouts.master')
@section('content')
<!-- ##### Hero Area Inicio ##### -->
<section class="hero-area">
        <div class="hero-slides owl-carousel">

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(img/bg-img/bg_01.jpg);"></div>
                <!-- Slide Content -->
                <div class="hero-slides-content text-center">
                    <h2 data-animation="fadeInUp" data-delay="100ms">La Cumbancha <span>La Cumbancha</span></h2>
                    <p data-animation="fadeInUp" data-delay="300ms">Volante</p>
                </div>
                <!-- Big Text -->
                <h2 class="big-text">Cumbancha</h2>
            </div>

        </div>
        <!-- bg gradiente -->
        <div class="bg-gradients"></div>

        <!-- Slide Bajar -->
        <div class="slide-down" id="scrollDown">
            <h6>Bajar</h6>
            <div class="line"></div>
        </div>
    </section>
    <!-- ##### Hero Area fin ##### -->

    <!-- ##### sobre nosotros Area inicio ##### -->
    <div class="about-us-area section-padding-100-0 bg-img bg-overlay" style="background-image: url(img/bg-img/bg-8.jpg);" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Nosotros</h2>
                        <h6>LA CUMBANCHA VOLANTE </h6>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- sobre nosotros Thumbnail -->
                <div class="col-12 col-lg-6">
                    <div class="about-thumbnail mb-100">
                        <img src="img/bg-img/bg-0.jpg" alt="">
                    </div>
                </div>
                <!-- sobre nosotros  Contenido -->
                <div class="col-12 col-lg-6">
                    <div class="about-content mb-100">
                        <h2 style="color:#fff;">{{ $datos->titulo }}</h2>
                        <p>{{ $datos->desCorta }}</p>
                        <div class="buy-tickets">
                                <!--el href tiene que ser dinamico-->
                                <a href="{{url('aboutUs')}}" class="btn musica-btn">Saber Mas</a>
                            </div>
                            
                                   <!-- INICIO DEL BOTON -->
                                   <br>
                                   <div class="buy-tickets">
                                   @if(Auth::user()!=null && Auth::user()->tipoUser=='admin')
                                   <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#ActDesCorta">
                                   Actualizar Descripcion Corta
                                   </button>
                               @endif
                               </div>
                                <!-- FIN DEL BOTON -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### sobre nosotros Area End ##### -->

    <!-- ##### Proximos Shows Area Start ##### -->
    <div class="upcoming-shows-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Proximos shows</h2>
                        <h6>#QueNoTeLaCuenten  - #FamiliaCumbanchera</h6>
                    </div>
                  
                </div>
            </div>

            
            <div class="row">
                <div class="col-12">

                    <!-- Proximos Shows Content -->
                    <div class="upcoming-shows-content">

                        @foreach($fechas as $Fec)

                     
                        <!-- Single Proximos Shows -->
                        <div class="single-upcoming-shows d-flex align-items-center flex-wrap">
                            <div class="shows-date">
                            @if(Auth::user()!=null && Auth::user()->tipoUser=='admin')
                            <span><h6 style="color:#fff;">ID: {{ $Fec->id}}</h6></span>
                            @endif
                                <!--el DIA Y MES tiene que ser dinamico-->
                                <h2>{{ $Fec->dia}} <span>{{ $Fec->mes}}</span></h2>
                            </div>
                            <div class="shows-desc d-flex align-items-center">
                                <div class="shows-img">
                                    <!--Foto Promocional del evento-->
                                    <!--el src tiene que ser dinamico-->
                                    <img src="{{ $Fec->Imagen }}" alt="">
                                </div>
                                <div class="shows-name">
                                    <!--el NOMBRE tiene que ser dinamico-->
                                    <h6>{{ $Fec->nombre}}</h6>
                                    <!--el LUGAR tiene que ser dinamico-->
                                    <p>{{ $Fec->lugar}}</p>
                                </div>
                            </div>
                            <div class="shows-location">
                               <!--Tomar el mismo que en la clase show name-->
                                <p>{{ $Fec->lugar}}</p>
                            </div>
                            <div class="shows-time">
                                <!--LA HORA tiene que ser dinamico-->
                                <p>{{ $Fec->hora}}</p>
                            </div>
                            <div class="buy-tickets">
                                <!--el href tiene que ser dinamico-->
                                <a href="{{ 'http://'.$Fec->link }}" class="btn musica-btn" target="_blank">Ir a Evento</a>
                            </div>
                        </div>

                        @endforeach
                    </div>
                </div>
            </div>
            
        </div>
    </div>


<!--BOTONES MAS EL MODAL PARA EDITAR-->
    <div class="row">
            <div class="col-12" style="background-color:#0c0527;">
                    @if(Auth::user()!=null && Auth::user()->tipoUser=='admin')
                      
                    
                    <div class="btn-group btn-group-justified"  style="margin-left: 35%;"> 
                        <!-- Button trigger modal nuevo -->
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalNuevo">
                            Nueva Fecha
                            </button>

                             <!-- Button trigger modal editar-->
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalEditar"
                         style="margin-left: 5%;">
                            Editar Fecha
                            </button>

                            <!-- Button trigger modal borrar-->
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalBorrar" 
                        style="margin-left: 5%;">
                            Eliminar Fecha
                            </button>
                   </div>      
<!--------------------------------- -----------------INICIO DEL Modal  NUEVA FECHA -------------------------------->
                            <div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                             <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Nueva</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    
                                    <!--FORMULARIO EN MODAL-->
                                    <form form action="{{ 'NuevaFecha' }}" id="myForm" role="form" data-toggle="validator" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                                           <meta name="csrf-token" content="{{ csrf_token() }}">
                                           {{ csrf_field() }}
                                
                                        <div class="form-group">
                                         <label>Dia</label>
                                         <input type="text" class="form-control" name="dia" placeholder="Ej: 22" required>
                                        </div>
                                        <div class="form-group">
                                         <label>Mes</label>
                                         <input type="text" class="form-control" name="mes" placeholder="Ej: Diciembre" required>
                                        </div>
                                        <div class="form-group">
                                         <label>Nombre</label>
                                         <input type="text" class="form-control" name="nombre" placeholder="Ej: AHI VA!" required>
                                        </div>
                                        <div class="form-group">
                                         <label>Lugar</label>
                                         <input type="text" class="form-control" name="lugar" placeholder="Ej: City Bar" required>
                                        </div>
                                        <div class="form-group">
                                         <label>Hora</label>
                                         <input type="text" class="form-control" name="hora" placeholder="Ej: 22:00" required>
                                        </div>
                                        <div class="form-group">
                                         <label>Link Evento Facebook</label>
                                         <input type="text" class="form-control" name="link" placeholder="Ej: www.facebook.com/evento" required>
                                        </div>

                                
                                <div class="form-group">
                                        
                                    <div class="input-group image-preview">
                                        <span class="input-group-btn">
                                            <!-- image-preview-input -->
                                            <div class="btn btn-default image-preview-input">
                                                <span class="glyphicon glyphicon-folder-open">Buscar Imagen</span><br>
                                                 <!-- <span class="image-preview-input-title">Buscar Imagen->  </span> -->
                                                <input type="file" accept="image/jpg" name="foto" required/> <!-- rename it -->
                                            </div>
                                        </span>
                                    </div>
                                        </div>
                           

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-success">Guardar Cambios</button>
                                </div>
                                </div>
                                </form>
        <!--------------------------------- -----------------FINAL DEL Modal  NUEVA FECHA -------------------------------->
        @endif
                        </div>
                    </div>



        <!--------------------------------- -----------------INICIO DEL Modal  EDITAR FECHA -------------------------------->
<div class="row">
            <div class="col-12" style="background-color:#0c0527;">
                    @if(Auth::user()!=null && Auth::user()->tipoUser=='admin')
                            
                            <div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                             <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Editar</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    
                                    <!--FORMULARIO EN MODAL-->
                                    <form form action="{{ 'ActualizarFechas' }}" id="myForm" role="form" data-toggle="validator" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                                           <meta name="csrf-token" content="{{ csrf_token() }}">
                                           {{ csrf_field() }}
                                           <div class="form-group">
                                        <label>Ingrese el ID de la Fecha a Editar: </label>
                                          <input type="text" class="form-control" name="identificador" placeholder="Ej: 1" required>
                                        </div> 
                                        <div class="form-group">
                                         <label>Nuevo Dia</label>
                                         <input type="text" class="form-control" name="dia" placeholder="Ej: 22" required>
                                        </div>
                                        <div class="form-group">
                                         <label>Nuevo Mes</label>
                                         <input type="text" class="form-control" name="mes" placeholder="Ej: Diciembre" required>
                                        </div>
                                        <div class="form-group">
                                         <label>Nuevo Nombre</label>
                                         <input type="text" class="form-control" name="nombre" placeholder="Ej: AHI VA!" required>
                                        </div>
                                        <div class="form-group">
                                         <label>Nuevo Lugar</label>
                                         <input type="text" class="form-control" name="lugar" placeholder="Ej: City Bar" required>
                                        </div>
                                        <div class="form-group">
                                         <label>Nueva Hora</label>
                                         <input type="text" class="form-control" name="hora" placeholder="Ej: 22:00" required>
                                        </div>
                                        <div class="form-group">
                                         <label>Nuevo Link Evento Facebook</label>
                                         <input type="text" class="form-control" name="link" placeholder="Ej: www.facebook.com/evento" required>
                                        </div>

                                
                                <div class="form-group">
                                        
                                    <div class="input-group image-preview">
                                        <span class="input-group-btn">
                                            <!-- image-preview-input -->
                                            <div class="btn btn-default image-preview-input">
                                                <span class="glyphicon glyphicon-folder-open">Nueva Imagen</span><br>
                                                 <!-- <span class="image-preview-input-title">Buscar Imagen->  </span> -->
                                                <input type="file" accept="image/jpg" name="foto" required /> <!-- rename it -->
                                            </div>
                                        </span>
                                    </div>
                                        </div>
                           

                                </div>
                                <div class="modal-footer"> 
                                    <button type="submit" class="btn btn-success">Guardar Cambios</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                </div>
                                </div>
                                </form>

        @endif
                        </div>
                    </div>
        <!--------------------------------- -----------------FINAL DEL Modal  EDITAR FECHA -------------------------------->


                <!--------------------------------- -----------------INICIO DEL Modal  BORRAR FECHA -------------------------------->
<div class="row">
            <div class="col-12" style="background-color:#0c0527;">
                    @if(Auth::user()!=null && Auth::user()->tipoUser=='admin')
                            
                            <div class="modal fade" id="modalBorrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                             <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Eliminar</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    
                                    <!--FORMULARIO EN MODAL-->
                                <form form action="{{ 'BorrarFecha' }}" id="myForm" role="form" data-toggle="validator" method="post"           accept-charset="utf-8" enctype="multipart/form-data">
                                           <meta name="csrf-token" content="{{ csrf_token() }}">
                                           {{ csrf_field() }}
                                
                                        <div class="form-group">
                                        <label>Ingrese el ID de la Fecha a eliminar: </label>
                                          <input type="text" class="form-control" name="identificador" placeholder="Ej: 1" required>
                                        </div>   
                                        </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-outline-danger"
                                        onclick="return confirm('¿Seguro que desea Eliminarlo?')">Eliminar</button>
                                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancelar</button>
                                    </div>
                                    </div>
                                </form>

        @endif
                        </div>
                    </div>
        <!--------------------------------- -----------------FINAL DEL Modal  BORRAR FECHA -------------------------------->
       <!--------------------------------- -----------------INICIO DEL Modal  ACTUALIZAR ALBUM -------------------------------->
            
       <div class="row">
            <div class="col-12" style="background-color:#0c0527;">
                   
            @if(Auth::user()!=null && Auth::user()->tipoUser=='admin')
                            <div class="modal fade" id="ActAlbum" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                             <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Actualizar</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    
                                    <!--FORMULARIO EN MODAL-->
                                <form form action="{{ 'ActualizarAlbum' }}" id="myForm" role="form" data-toggle="validator" method="post"           accept-charset="utf-8" enctype="multipart/form-data">
                                           <meta name="csrf-token" content="{{ csrf_token() }}">
                                           {{ csrf_field() }}
                                
                               

                                <div class="form-group">
                                         <label>Nuevo Link del Album</label>
                                         <input type="text" class="form-control" name="link" placeholder="Ej: https://open.spotify.com/album/xxx" required>
                                        </div>

                                
                                <div class="form-group">
                                   <div class="input-group image-preview">
                                        <span class="input-group-btn">
                                            <!-- image-preview-input -->
                                            <div class="btn btn-default image-preview-input">
                                                <span class="glyphicon glyphicon-folder-open">Nueva Imagen</span><br>
                                                 <!-- <span class="image-preview-input-title">Buscar Imagen->  </span> -->
                                                <input type="file" accept="image/jpg" name="foto" required /> <!-- rename it -->
                                            </div>
                                        </span>
                                    </div>
                                </div>
                                </div><!--MODAL BODY-->
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary"
                                        onclick="return confirm('¿Seguro que desea Actualizar?')">Actualizar</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                    </div>
                                    </div>
                                </form>

                                @endif
                        </div>
                    </div>
                    
        <!--------------------------------- -----------------FINAL DEL Modal  ACTUALIZAR ALBUM -------------------------------->


 <!--------------------------------- -----------------INICIO DEL Modal  ACTUALIZAR DESCRIPCION CORTA -------------------------------->
            
 <div class="row">
            <div class="col-12" style="background-color:#0c0527;">
                   
            @if(Auth::user()!=null && Auth::user()->tipoUser=='admin')
                            <div class="modal fade" id="ActDesCorta" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                             <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Actualizar</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    
                                    <!--FORMULARIO EN MODAL-->
                                <form form action="{{ 'ActualizarDesCorta' }}" id="myForm" role="form" data-toggle="validator" method="post"           accept-charset="utf-8" enctype="multipart/form-data">
                                           <meta name="csrf-token" content="{{ csrf_token() }}">
                                           {{ csrf_field() }}
                                
                               

                                    <div class="form-group">
                                        <label>Nueva Descripcion Corta</label>
                                        <textarea class="form-control" rows="3" name="desCorta" placeholder="Ej: Banda de ROCK ubicada en Tigre" require></textarea>
                                    </div>

                                </div><!--MODAL BODY-->
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary"
                                        onclick="return confirm('¿Seguro que desea Actualizar?')">Actualizar</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                    </div>
                                    </div>
                                </form>

                                @endif
                        </div>
                    </div>
                    
        <!--------------------------------- -----------------FINAL DEL Modal  ACTUALIZAR DESCRIPCION CORTA -------------------------------->




    <!-- ##### Proximos Shows Area Fin ##### -->



    <!-- #####  Album Area Start ##### -->
    <div class="featured-album-area section-padding-100 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                        <div class="section-heading">
                                <h2>Ultimo Album</h2>
                            
                                <h6>#Spotify</h6>
                            </div>
                    <div class="featured-album-content d-flex flex-wrap">

                        <!-- Album Thumbnail image: url(img/bg-img/album.jpg);-->
                        <div class="album-thumbnail h-100 bg-img">
                            <img src="{{ $album->imagen }}" alt="Portada Album" style="margin:7% 5%; 7% 5%;">
                            </div>
                        <!-- Album Songs -->
                        <div class="album-songs h-100">

                            <!-- Album Info -->
                            <div class="album-info mb-50 d-flex flex-wrap align-items-center justify-content-between">
                               
                                <div class="album-buy-now">
                                        <p></p>
                                    <iframe src="https://open.spotify.com/follow/1/?uri=spotify:artist:2rTSqY8x1KT76ImiGYcFlp&size=detail&theme=dark&show-count=0" width="300" height="56" scrolling="no" frameborder="0" style="border:none; overflow:hidden;" allowtransparency="true"></iframe>
                                </div>

                                 <!-- INICIO DEL BOTON -->
                            @if(Auth::user()!=null && Auth::user()->tipoUser=='admin')
                                   
                                   <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#ActAlbum">
                                   Actualizar Disco
                                   </button>
                               @endif
                                <!-- FIN DEL BOTON -->
                            </div>

                            <div class="album-all-songs">
                                        <!--Link del album dinamico-->
                                    <iframe src="{{ $album->link }}" 
                                    width="500" height="500" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                            </div>

                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Featured Album Area End ##### -->

@endsection