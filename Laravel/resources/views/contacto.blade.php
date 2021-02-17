@include('head')

@include('header')

<h1 class="text-center text-light" style="margin-top: 100px;">Inicio</h1>
<div class="container">
    <div class="bg-light text-center abs-center mt-3 p-3 rounded">
        <h1>Contacto</h1>
        <hr>
        <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Correo electrónico</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Nombre</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="exampleTextArea">Mensaje</label>
                <input type="text" class="form-text">
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Checkear</label>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
          </form>
    </div>
</div>

@include('footer')