<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>


    <img src="{{ url('imagenes/myimage.jpg') }} " alt=""> <!-- /public/imagenes/myimage.jpg -->
    <header>
        <h1 class="glow">Chollo ░▒▓ Severo</h1>


        <ul>


            <li> <a href={{ route('chollos.listado') }}>Inicio </a>
            <li>
            <li><a href={{ route('chollos.crearFormulario') }}>Nuevos</a>
            <li>
            <li><a href="">Destacados</a>
            <li>

        </ul>
        </nav>
        </div>
    </header>
    @yield('apartado')

    <!--<a href ={{ route('chollos.crearFormulario') }}>crear chollo  </a>-->
    <div class="container-fluid"> 
    <nav aria-label="Page navigation example" >
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
    </nav>
    </div>
    <footer class="text-center text-lg-start bg-light text-muted">

        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            CholloSevero © {{ date('Y') }} 
        </div>
    </footer>
</body>

</html>
