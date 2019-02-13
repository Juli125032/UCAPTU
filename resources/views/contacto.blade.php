@include("header")

<section class="contacto">
            <div class="titleContacto">
                <div class="lineaContacto"></div>
                <p>CONTACTANOS</p>
            </div>
</section>

<section class="contacto__formulario">
    <form class="form">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Nombre">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" placeholder="Email">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Asunto">
        </div>
        <div class="form-group">
            <textarea type="text" class="form-control" placeholder="Mensaje"></textarea>
        </div>
        <button class="btn btn-primary botonContacto">
            Enviar
        </button>
    </form>
</section>

@include("footer")
