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
                        <h4>Hola, Somos La Cumbancha Volante</h4>
                        <p>Banda de ROCK ubicada en Tigre, Prov. de Buenos Aires. Están invitados a escuchar.</p>
                        <div class="buy-tickets">
                                <!--el href tiene que ser dinamico-->
                                <a href="{{url('aboutUs')}}" class="btn musica-btn">Saber Mas</a>
                            </div>
                        <!--   <img src="img/core-img/signature.png" alt="">-->
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

                        <!-- Single Proximos Shows -->
                        <div class="single-upcoming-shows d-flex align-items-center flex-wrap">
                            <div class="shows-date">
                                <!--el DIA Y MES tiene que ser dinamico-->
                                <h2>22 <span>Diciembre</span></h2>
                            </div>
                            <div class="shows-desc d-flex align-items-center">
                                <div class="shows-img">
                                    <!--Foto Promocional del evento-->
                                    <!--el src tiene que ser dinamico-->
                                    <img src="img/bg-img/d5.jpg" alt="">
                                </div>
                                <div class="shows-name">
                                    <!--el NOMBRE tiene que ser dinamico-->
                                    <h6>AHI VA!</h6>
                                    <!--el LUGAR tiene que ser dinamico-->
                                    <p>City Bar</p>
                                </div>
                            </div>
                            <div class="shows-location">
                               <!--Tomar el mismo que en la clase show name-->
                                <p>City Bar</p>
                            </div>
                            <div class="shows-time">
                                <!--LA HORA tiene que ser dinamico-->
                                <p>22:30</p>
                            </div>
                            <div class="buy-tickets">
                                <!--el href tiene que ser dinamico-->
                                <a href="#" class="btn musica-btn">Ir a Evento</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Proximos Shows Area Fin ##### -->

    <!-- ##### Music Player Area Start ##### 
    <div class="music-player-area section-padding-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="music-player-slides owl-carousel">
    
                             Single Music Player (comentar)
                            <div class="single-music-player">
                                <img src="img/bg-img/mp1.jpg" alt="">
    
                                <div class="music-info d-flex justify-content-between">
                                    <div class="music-text">
                                        <h5>Artist’s/Band Name</h5>
                                        <p>Love is all Around</p>
                                    </div>
                                    <div class="music-play-icon">
                                        <audio preload="auto" controls>
                                        <source src="audio/dummy-audio.mp3">
                                    </audio>
                                    </div>
                                </div>
                            </div>
    
                          
    
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ##### Music Player Area End ##### -->

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
                            <img src="img/bg-img/album.jpg" alt="Portada Album" style="margin:7% 5%; 7% 5%;">
                            </div>
                        <!-- Album Songs -->
                        <div class="album-songs h-100">

                            <!-- Album Info -->
                            <div class="album-info mb-50 d-flex flex-wrap align-items-center justify-content-between">
                               
                                <div class="album-buy-now">
                                    <iframe src="https://open.spotify.com/follow/1/?uri=spotify:artist:2rTSqY8x1KT76ImiGYcFlp&size=detail&theme=dark&show-count=0" width="300" height="56" scrolling="no" frameborder="0" style="border:none; overflow:hidden;" allowtransparency="true"></iframe>
                                </div>
                            </div>

                            <div class="album-all-songs">
                                        <!--Link del album dinamico-->
                                    <iframe src="https://open.spotify.com/embed/album/0alVJan5Y0c2PIATNngNwX" 
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