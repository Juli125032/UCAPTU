@include("header")

<section class="eventos2">
    <div class="lineaInvestigadores"></div>
    <p class="investigadores__title">
    EVENTOS
    </p>
    <span class="subInvestigadores">Ahora tu tambien puedes ser parte de esta historia</span>
</section>

<section class="eventosContent">
    <div class="row">
        <div class="col-md-3">
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
</section>

@include("footer")
