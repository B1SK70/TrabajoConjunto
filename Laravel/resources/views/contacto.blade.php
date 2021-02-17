@include('head')

@include('header')

<h1 class="text-center text-light" style="margin-top: 100px;">Contáctanos</h1>
<div class="container">
    <div class="bg-light text-center abs-center mt-3 p-3 rounded">
        <hr>
        <form>
            <div class="form-group">
              <label for="exampleInputFullName">Nombre completo</label>
              <input type="text" class="form-control" id="exampleInputFullName" placeholder="Introduce tu nombre...">
            </div>
            <div class="form-group">
              <label for="exampleInputSubject">Asunto</label>
              <input type="text" class="form-control" id="exampleInputSubject" placeholder="Asunto...">
            </div>
            <div class="form-group">
                <label for="exampleTextArea">Mensaje</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Escribe aquí..."></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
          </form>
    </div>
</div>

@include('footer')