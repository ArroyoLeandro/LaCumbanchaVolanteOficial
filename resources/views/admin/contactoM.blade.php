@extends('layouts.master')
@section('content')

<!-- ##### Proximos Shows Area Start ##### -->
<div class="upcoming-shows-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Proximos Shows Content -->
                    <div class="upcoming-shows-content">

                        <!-- Single Proximos Shows -->
                        <div class="single-upcoming-shows d-flex align-items-center flex-wrap">

                            <form form action="{{ route('actualizardatosBiografia') }}" id="myForm" role="form" data-toggle="validator" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                                     <meta name="csrf-token" content="{{ csrf_token() }}">
                                  {{ csrf_field() }}
                                
                                <div class="form-group">
                                    <label>Titulo</label>
                                    <input type="text" class="form-control" name="titulo">
                                </div>

                                <div class="form-group">
                                    <label>Descripcion</label>
                                    <textarea class="form-control" rows="3" name="descripcion"></textarea>
                                </div>
                                <div class="form-group">
                                            <!-- <label for="exampleFormControlFile1">Seleccione una Imagen</label>
                                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="imagen"> -->
                                            <!-- image-preview-filename input [CUT FROM HERE]-->
                                    <div class="input-group image-preview">
                                        <span class="input-group-btn">
                                            <!-- image-preview-input -->
                                            <div class="btn btn-default image-preview-input">
                                                <span class="glyphicon glyphicon-folder-open"></span>
                                                {{-- <span class="image-preview-input-title">Buscar</span> --}}
                                                <input type="file" accept="image/jpg" name="foto"/> <!-- rename it -->
                                            </div>
                                        </span>
                                    </div>
                            {{-- --------------------------------------------------- --}}
                                        </div>
                                <div class="row mb-10">
                                    <div class="col-md-12">
                                        <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Actualizar cambios</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</div>
    <!-- ##### Proximos Shows Area Fin ##### -->


@endsection