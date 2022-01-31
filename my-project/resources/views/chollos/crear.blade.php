<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap</title>
    <link rel="stylesheet"  href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>


</head>


@extends('plantilla')

@section('apartado')
        @if (session('mensaje'))
        <div class="mensaje-nota-creada">
            {{ session('mensaje') }}
        </div>
      @endif
      <div class="container mt-5">
        <div class="card">
            <h5 class="card-header text-center">Crear chollo</h5>
            <div class="card-body">
        
<form action="{{ route('chollos.crear') }}" method="POST">
    
    @csrf {{-- Cláusula para obtener un token de formulario al enviarlo --}}
    
        <div class="form-group">
            <label>titulo</label>
            <input type="text" class="form-control" name="titulo" placeholder="titulo de chollo" class="form-control mb-2" autofocus>
        </div>
        <div class="form-group">  
            <label>description</label> 
        <input type="text" name="descripcion" placeholder="Descripción de chollo" class="form-control mb-2">
    </div>
    <div class="form-group">   
        <label>url</label> 
        <input type="url" name="url" placeholder="url de chollo" class="form-control mb-2" autofocus>
    </div>
    <div class="form-group">   
        <label>categoria</label> 
        <input type="text" name="categoria" placeholder="categotia de chollo" class="form-control mb-2">
    </div>
    <div class="form-group">   
        <label>puntuacion</label> 
        <input type="number" name="puntuacion" placeholder="puntuacion de chollo" class="form-control mb-2" autofocus>
    </div>
    <div class="form-group">   
        <label>precio</label> 
   
        <input type="number" name="precio" placeholder="precio de chollo" class="form-control mb-2">
    </div>
    <div class="form-group">   
        <label>precio descuento</label> 
   
        <input type="number" name="precio_descuento" placeholder="precio descuento de chollo" class="form-control mb-2">
    
        <div class="form-group">   
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="disponible">
                <label class="form-check-label" for="flexCheckDefault">
                  Disponible
                </label>
    </div>
    <div class="form-group">   

        <label>imagen de chollo</label> 
   
        <input type="file" name="imagen de chollo" placeholder="imagen de chollo" class="form-control mb-2">
    
      
    <div class="form-group">   
     
    <button class="btn btn-primary btn-block" type="submit">
        Crear chollo
    </button>
    
    </div> 
</div>
</div>
</div>
</form>
@endsection


