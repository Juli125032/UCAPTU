@include('header')

<section class="heading">
    <div class="heading__background">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('img/heading.jpg')}}" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('img/heading-02.png')}}" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </div>
</section>

<section class="eventos">
    <div class="row">
        <div class="col-md-4">
            <div class="title">
                <p class="title__p">PRÓXIMOS <br> EVENTOS</p>
                <p class="sub">Enterate de los eventos que tendremos en unos días, se uno mas de nuestra comunidad</p>
            </div>
        </div>
        <div class="col-md-8">
            <div class="eventos__items">
                <section id="demos">
                    <div class="row">
                        <div class="large-12 col-md-12 columns">
                            <div class="owl-carousel row owl-theme">
                                <div class="item col-md-12">
                                    <div class="evento__card">
                                        <div class="card__photo">
                                            <img src="{{ asset('img/evento1.png')}}" alt="">
                                            <div class="linea1"></div>
                                            <div class="linea2"></div>
                                        </div>
                                        <div class="card__title">
                                            <p class="title2">EVENTO NUMERO 1</p>
                                        </div>
                                        <div class="card__descripcion">
                                            <p class="description">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates tempore iusto voluptatum, asperiores libero sapiente dignissimos vero laborum ipsam quisquam culpa laudantium exercitationem corrupti, nemo officia voluptas reiciendis consectetur quasi?
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item col-md-12">
                                    <div class="evento__card">
                                        <div class="card__photo">
                                            <img src="{{ asset('img/evento1.png')}}" alt="">
                                            <div class="linea1"></div>
                                            <div class="linea2"></div>
                                        </div>
                                        <div class="card__title">
                                            <p class="title2">EVENTO NUMERO 1</p>
                                        </div>
                                        <div class="card__descripcion">
                                            <p class="description">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates tempore iusto voluptatum, asperiores libero sapiente dignissimos vero laborum ipsam quisquam culpa laudantium exercitationem corrupti, nemo officia voluptas reiciendis consectetur quasi?
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="item col-md-12">
                                    <div class="evento__card">
                                        <div class="card__photo">
                                            <img src="{{ asset('img/evento1.png')}}" alt="">
                                            <div class="linea1"></div>
                                            <div class="linea2"></div>
                                        </div>
                                        <div class="card__title">
                                            <p class="title2">EVENTO NUMERO 1</p>
                                        </div>
                                        <div class="card__descripcion">
                                            <p class="description">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates tempore iusto voluptatum, asperiores libero sapiente dignissimos vero laborum ipsam quisquam culpa laudantium exercitationem corrupti, nemo officia voluptas reiciendis consectetur quasi?
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="item col-md-12">
                                    <div class="evento__card">
                                        <div class="card__photo">
                                            <img src="{{ asset('img/evento1.png')}}" alt="">
                                            <div class="linea1"></div>
                                            <div class="linea2"></div>
                                        </div>
                                        <div class="card__title">
                                            <p class="title2">EVENTO NUMERO 1</p>
                                        </div>
                                        <div class="card__descripcion">
                                            <p class="description">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates tempore iusto voluptatum, asperiores libero sapiente dignissimos vero laborum ipsam quisquam culpa laudantium exercitationem corrupti, nemo officia voluptas reiciendis consectetur quasi?
                                            </p>
                                        </div>
                                    </div>
                                </div>


                                </div>

                              </div>
                            </div>
                    </section>


            </div>
        </div>
    </div>
</section>

<section class="galeria">
    <div class="titleGaleria">
        <p class="t2">GALERIA</p>
        <p class="s2">Empapate un poco de lo que hacemos</p>
    </div>
    <div class="demo-gallery">
        <ul id="lightgallery" class="list-unstyled row">
            <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{ asset('img/g1.jpg')}} 800" data-src="{{ asset('img/g1.jpg')}}" data-sub-html="<h4></h4><p></p>">
                <a href="">
                    <img class="img-responsive" src="{{ asset('img/g1.jpg')}}">
                </a>
            </li>
            <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{ asset('img/g2.jpg')}} 800" data-src="{{ asset('img/g2.jpg')}}" data-sub-html="">
                <a href="">
                    <img class="img-responsive" src="{{ asset('img/g2.jpg')}}">
                </a>
            </li>
            <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{ asset('img/g3.jpg')}} 800" data-src="{{ asset('img/g3.jpg')}}" data-sub-html="">
                <a href="">
                    <img class="img-responsive" src="{{ asset('img/g3.jpg')}}">
                </a>
            </li>
            <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{ asset('img/g4.jpg')}} 800" data-src="{{ asset('img/g4.jpg')}}" data-sub-html="">
                <a href="">
                    <img class="img-responsive" src="{{ asset('img/g4.jpg')}}">
                </a>
            </li>
        </ul>
    </div>
</section>

<section class="patrocinadores">
    <div class="titlePatrocinadores">
        <p class="t2">PATROCINADORES</p>
        <p class="s2">Conoce a quienes nos apoyan en esta causa</p>
    </div>
    <div class="img__patrocinadores">
            <img src="{{ asset('img/patrocinadores.png')}}" alt="">
        </div>
    <div class="row">
        <div class="col-md-12">

        </div>
    </div>
</section>

@include('footer')

