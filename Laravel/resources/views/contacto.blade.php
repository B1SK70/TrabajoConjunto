@include('head')
@include('header')

  <main style="margin-top: 100px;">
    <h2 class="text-center">Ponte en contacto con nosotros</h2>
    <div class="container bg-light text-center abs-center mt-3 p-3 rounded">
      <form method="POST" action="{{route('enviado')}}">
        @csrf
        <h4 class="text-center small">Simplemente rellena este formulario.</h4>
        <div class="form-group">
          <label for="usr">Nombre:</label>
          <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre...">
        </div>
        <div class="form-group">
          <label for="pwd">Tu correo:</label>
          <input type="text" class="form-control" id="email" name="email" placeholder="Email...">
        </div>
        <div class="form-group">
          <label for="usr">Asunto:</label>
          <input type="text" class="form-control" id="asunto" name="asunto" placeholder="Asunto...">
        </div>
        <br>
        <div class="form-group">
          <textarea class="form-control" rows="5" id="comment" name="contenido" placeholder="Contenido..."></textarea>
        </div>
        <br>
        <button type="submit" class="btn btn-primary mx-auto d-block">Enviar</button>
      </form>
    </div>
  </main>
    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>      
</body>

  @include('footer')
