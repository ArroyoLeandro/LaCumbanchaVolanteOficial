@extends('layouts.master')
@section('content')
<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area bg-img bg-overlay2" style="background-image: url(img/bg-img/breadcumb5.jpg);">
        <div class="bradcumbContent">
            <h2>Biografia</h2>
        </div>
    </div>
    <!-- bg gradients -->
    <div class="bg-gradients"></div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### About Us Area Start ##### -->
    <div class="about-us-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- About Thumbnail -->
                <div class="col-12 col-lg-6">
                    <div class="about-thumbnail mb-100">
                        <!-- <img src="img/bg-img/bg-0.jpg" alt=""> -->
                        <img src="img/fotoBio.jpg" alt="">
                    </div>
                </div>
                <!-- About Content -->
                <div class="col-12 col-lg-6">
                    <div class="about--content mb-100">
                        <h4>{{ $datos->titulo }}</h4>
                        
                        <p> {{$datos->descripcion}} </p> 


                     <!--todo lo que este aca se va a mostrar siempre y cuando este logeado-->
                        @if(Auth::user()!=null && Auth::user()->tipoUser=='admin')
                 
                        <!-- Button trigger modal -->
                            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModalCenter">
                            Editar
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                             <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Editar</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    
                                    <!--FORMULARIO EN MODAL  -->
                                    <form form action="{{ 'actualizardatosBiografia' }}" id="myForm" role="form" data-toggle="validator" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                                           <meta name="csrf-token" content="{{ csrf_token() }}">
                                           {{ csrf_field() }}
                                
                                        <div class="form-group">
                                         <label>Titulo</label>
                                         <input type="text" class="form-control" name="titulo" placeholder="Ej: Hola, Somos La Cumbancha Volante">
                                        </div>

                                <div class="form-group">
                                    <label>Descripcion</label>
                                    <textarea class="form-control" rows="3" name="descripcion" placeholder="Ej: Banda de ROCK ubicada en Tigre, Prov. de Buenos Aires. Están invitados a escuchar."></textarea>
                                </div>
                                <div class="form-group">
                                        
                                    <div class="input-group image-preview">
                                        <span class="input-group-btn">
                                            <!-- image-preview-input -->
                                            <div class="btn btn-default image-preview-input">
                                                <span class="glyphicon glyphicon-folder-open">Buscar Imagen</span><br>
                                                 <!-- <span class="image-preview-input-title">Buscar Imagen->  </span> -->
                                                <input type="file" accept="image/jpg" name="foto"/> <!-- rename it -->
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
                            </div>
                            </div>
                        <!--FORMULARIO EN MODAL-->

                        @endif                             
                        
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### About Us Area End ##### -->

<!-- ##### Miembros Banda Area Start ##### -->
<div class="featured-shows-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading dark">
                    <h2>Miembros de la Banda</h2>
                    <h6>#FamiliaCumbanchera</h6>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="featured-shows-slides owl-carousel">

                    <!-- Single Miembros Banda  -->
                    <div class="single-featured-shows">
                        <img src="img/bg-img/fs1.jpg" alt="">
                        <!-- Content -->
                        <div class="featured-shows-content">
                            <div class="shows-text">
                                <h4>TAMOEMMA</h4>
                                <p>Voz</p>
                                <a href="#" class="buy-tickets-btn">Instagram</a>
                            </div>
                            <div class="bg-gradients"></div>
                        </div>
                    </div>

                    <!-- Single Miembros Banda  -->
                    <div class="single-featured-shows">
                        <img src="img/bg-img/fs2.jpg" alt="">
                        <!-- Content -->
                        <div class="featured-shows-content">
                            <div class="shows-text">
                                <h4>Nelson Alvarez </h4>
                                <p>Guitarra</p>
                                <a href="#" class="buy-tickets-btn">Facebook</a>
                            </div>
                            <div class="bg-gradients"></div>
                        </div>
                    </div>

                    <!-- Single Miembros Banda  -->
                    <div class="single-featured-shows">
                        <img src="img/bg-img/fs3.jpg" alt="">
                        <!-- Content -->
                        <div class="featured-shows-content">
                            <div class="shows-text">
                                <h4>Bruno Carbone</h4>
                                <p>Guitarra</p>
                                  <a href="#" class="buy-tickets-btn">Instagram</a>
                            </div>
                            <div class="bg-gradients"></div>
                        </div>
                    </div>
                    
                    <!-- Single Miembros Banda  -->
                    <div class="single-featured-shows">
                        <img src="img/bg-img/fs4.jpg" alt="">
                        <!-- Content -->
                        <div class="featured-shows-content">
                            <div class="shows-text">
                                <h4>Gabriel Molinos</h4>
                                <p>Bajo</p>
                     <a href="#" class="buy-tickets-btn">Instagram</a>
                            </div>
                            <div class="bg-gradients"></div>
                        </div>
                    </div>
                    <!-- Single Miembros Banda  -->
                    <div class="single-featured-shows">
                        <img src="img/bg-img/fs4.jpg" alt="">
                        <!-- Content -->
                        <div class="featured-shows-content">
                            <div class="shows-text">
                                <h4>Lucas Salto</h4>
                                <p>Bateria</p>
                     <a href="#" class="buy-tickets-btn">Instagram</a>
                            </div>
                            <div class="bg-gradients"></div>
                        </div>
                    </div>


                    <!-- Single Miembros Banda  -->
                    <div class="single-featured-shows">
                        <img src="img/bg-img/fs4.jpg" alt="">
                        <!-- Content -->
                        <div class="featured-shows-content">
                            <div class="shows-text">
                                <h4>Marcos</h4>
                                <p>Teclado</p>
                     <a href="#" class="buy-tickets-btn">Instagram</a>
                            </div>
                            <div class="bg-gradients"></div>
                        </div>
                    </div>


                    <!-- Single Miembros Banda  -->
                    <div class="single-featured-shows">
                            <img src="img/bg-img/fs4.jpg" alt="">
                            <!-- Content -->
                            <div class="featured-shows-content">
                                <div class="shows-text">
                                    <h4>mai tevez</h4>
                                    <p>Manager</p>
                         <a href="#" class="buy-tickets-btn">Instagram</a>
                                </div>
                                <div class="bg-gradients"></div>
                            </div>
                        </div>


                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Featured Shows Area End ##### -->
@endsection