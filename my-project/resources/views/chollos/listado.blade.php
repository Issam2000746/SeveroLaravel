@extends('plantilla')

@section('apartado')

<!DOCTYPE html>
<html lang="es">
    <head>
      <meta charset="UTF-8">
      <title>Document</title>
      <link rel="stylesheet"  href="/css/style.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <script src="http://code.jquery.com/jquery-latest.js"></script>
    </head>

    <body>

        <div class="container" >
            @foreach ($chollos as $chollo)
            <div class="row">
              <div class="col-2">
                
                <img src="{{asset('imag/dns2.png')}} "  width="60px" height="40px"
                alt=""> 
              </div>
              <div class="col-8">
               {{$chollo -> titulo}}
               
           {{$chollo -> descripcion}}
           
           {{$chollo -> url}}
           
           {{$chollo -> categoria}}
           
           {{$chollo -> puntuacion}}
           
           {{$chollo -> precio}}
           
           {{$chollo -> precio_descuento}}
           
           {{$chollo -> disponible}}
           
              </div>
            
              <div class="col-2">
                <a href="{{ route('chollos.editar', $chollo) }}" class="btn btn-warning btn-sm">
                    Editar
                </a>
            
                <a href="{{ route('chollos.eliminarFormulario', $chollo) }}" class="btn btn-warning btn-sm">
                    Eliminar
                </a>
              </div>
            </div>
         @endforeach
          </div>
          @endsection

          