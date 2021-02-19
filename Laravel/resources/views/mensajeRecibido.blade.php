@include('head')
@include('header')

<main style="margin-top: 100px;margin-bottom: 25%;">
    <div class="bg-light text-center abs-center mt-3 p-3 rounded">
        <h1 class="display-3 text-center">Email enviado</h1>
        <h3 class="text-center">Gracias por su colaboración</h3>
        <br><br>
        <div class="row m-2">
            <div class="col-5"></div>
            <a class="btn btn-primary mx-auto col-2" href="{{route('contacto')}}">Volver a contacto</a>
            <div class="col-5"></div>
        </div>
    </div>
</main>
    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>     
</body>
  @include('footer')