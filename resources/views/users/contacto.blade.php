@extends('layouts.master')
@section('content')
<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area bg-img bg-overlay2" style="background-image: url(img/bg-img/breadcumb4.jpg);">
        <div class="bradcumbContent">
            <h2>Contact</h2>
        </div>
    </div>
    <!-- bg gradients -->
    <div class="bg-gradients"></div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    
    <div class="featured-album-area section-padding-100 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                        <div class="section-content">
                                <h1 class="section-header"><span class="asignarColor " data-wow-delay="0.2s" data-wow-duration="2s">CONTRATACIONES</span></h1>

                                <h4><span class="asignarColor " data-wow-delay="0.2s" data-wow-duration="2s">por favor completar el siguiente formulario y en breves estaremos respondiendo.</span></h4>
                             
                            </div>
                    <section id="contact">
                        <div class="container">
                            <form>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername">Nombre Completo</label>
                                        <input type="text" class="form-control" id="" placeholder=" Ingrese su Nombre">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail">Email</label>
                                        <input type="email" class="form-control" id="exampleInputEmail" placeholder=" Ingrese su Email">
                                    </div>
                               </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for ="description"> Mensaje</label>
                                        <textarea  class="form-control" id="description" placeholder="Mensaje"></textarea>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="buy-tickets">
                                            <button type="button" class="btn musica-btn"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Enviar</button>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </div>
    <!-- ##### Contact Area End ##### -->
    @endsection
    