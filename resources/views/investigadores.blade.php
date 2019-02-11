@include("header")

<section class="header__investigadores">
        <div class="lineaInvestigadores"></div>
        <p class="investigadores__title">
        INVESTIGADORES
        </p>
        <span class="subInvestigadores">Ellos hicieron esto posible</span>
</section>

<section class="investigadores">
    <section class="galeria">
        {{-- <div class="titleGaleria">
            <p class="t2"></p>
            <p class="s2">Empapate un poco de lo que hacemos</p>
        </div> --}}
        <div class="demo-gallery">
            <ul id="lightgallery" class="list-unstyled row">
                <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{ asset('img/inves1.jpg')}} 800" data-src="{{ asset('img/inves1.jpg')}}" data-sub-html="<h4></h4><p></p>">
                    <a href="">
                        <img class="img-responsive" src="{{ asset('img/inves1.jpg')}}">
                    </a>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{ asset('img/inves2.jpg')}} 800" data-src="{{ asset('img/inves2.jpg')}}" data-sub-html="">
                    <a href="">
                        <img class="img-responsive" src="{{ asset('img/inves2.jpg')}}">
                    </a>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{ asset('img/inves3.jpg')}} 800" data-src="{{ asset('img/inves3.jpg')}}" data-sub-html="">
                    <a href="">
                        <img class="img-responsive" src="{{ asset('img/inves3.jpg')}}">
                    </a>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{ asset('img/inves4.jpg')}} 800" data-src="{{ asset('img/inves4.jpg')}}" data-sub-html="">
                    <a href="">
                        <img class="img-responsive" src="{{ asset('img/inves4.jpg')}}">
                    </a>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{ asset('img/inves5.jpg')}} 800" data-src="{{ asset('img/inves5.jpg')}}" data-sub-html="">
                    <a href="">
                        <img class="img-responsive" src="{{ asset('img/inves5.jpg')}}">
                    </a>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{ asset('img/inves6.jpg')}} 800" data-src="{{ asset('img/inves6.jpg')}}" data-sub-html="">
                    <a href="">
                        <img class="img-responsive" src="{{ asset('img/inves6.jpg')}}">
                    </a>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{ asset('img/inves7.jpg')}} 800" data-src="{{ asset('img/inves7.jpg')}}" data-sub-html="">
                    <a href="">
                        <img class="img-responsive" src="{{ asset('img/inves7.jpg')}}">
                    </a>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{ asset('img/inves8.jpg')}} 800" data-src="{{ asset('img/inves8.jpg')}}" data-sub-html="">
                    <a href="">
                        <img class="img-responsive" src="{{ asset('img/inves8.jpg')}}">
                    </a>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{ asset('img/inves9.jpg')}} 800" data-src="{{ asset('img/inves9.jpg')}}" data-sub-html="">
                    <a href="">
                        <img class="img-responsive" src="{{ asset('img/inves9.jpg')}}">
                    </a>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{ asset('img/inves10.jpg')}} 800" data-src="{{ asset('img/inves10.jpg')}}" data-sub-html="">
                    <a href="">
                        <img class="img-responsive" src="{{ asset('img/inves10.jpg')}}">
                    </a>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{ asset('img/inves11.jpg')}} 800" data-src="{{ asset('img/inves11.jpg')}}" data-sub-html="">
                    <a href="">
                        <img class="img-responsive" src="{{ asset('img/inves11.jpg')}}">
                    </a>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{ asset('img/inves12.jpg')}} 800" data-src="{{ asset('img/inves12.jpg')}}" data-sub-html="">
                    <a href="">
                        <img class="img-responsive" src="{{ asset('img/inves12.jpg')}}">
                    </a>
                </li>
            </ul>
        </div>
    </section>
</section>

@include("footer")
