// estamos en ▓▓▓ editar.blade.php
@extends('plantilla')

@section('apartado')
<h2>Editando chollo {{ $chollo -> id }}</h2>

@if (session('mensaje'))
  <div class="alert alert-success">{{ session('mensaje')}}</div>
@endif

<form action="{{ route('chollos.actualizar', $chollo -> id) }}" method="POST">
  @method('PUT') {{-- Necesitamos cambiar al método PUT para editar --}}
  @csrf {{-- Cláusula para obtener un token de formulario al enviarlo --}}

  @error('titulo')
      <div class="alert alert-danger">
          El titulo es obligatorio
      </div>
  @enderror
  @error('descripcion')
      <div class="alert alert-danger">
          La descripción es obligatoria
      </div>
  @enderror
  @error('url')
      <div class="alert alert-danger">
          La url es obligatoria
      </div>
  @enderror
   @error('categoria')
      <div class="alert alert-danger">
          La categoria es obligatoria
      </div>
  @enderror 
  @error('puntuacion')
      <div class="alert alert-danger">
          La puntuacion es obligatoria
      </div>
  @enderror
   @error('precio')
      <div class="alert alert-danger">
          el precio es obligatoria
      </div>
  @enderror
  @error('precio descuento')
  <div class="alert alert-danger">
      el precio descuento es obligatoria
  </div>
@enderror
@error('disponible')
<div class="alert alert-danger">
    disponible es obligatoria
</div>
@enderror
  <input
      type="text"
      name="titulo"
      class="form-control mb-2"
      value="{{ $chollo -> titulo }}"
      placeholder="Titulo del chollo"
      autofocus
  >
  <input
      type="text"
      name="descripcion"
      placeholder="Descripción del chollo"
      class="form-control mb-2"
      value="{{ $chollo -> descripcion }}"
  >
  <input
  type="url"
  name="url"
  placeholder="url del chollo"
  class="form-control mb-2"
  value="{{ $chollo -> url }}"
>
<input
type="text"
name="categoria"
placeholder="categoria del chollo"
class="form-control mb-2"
value="{{ $chollo -> categoria }}"
>
<input
type="number"
name="puntuacion"
placeholder="puntuacion del chollo"
class="form-control mb-2"
value="{{ $chollo -> puntuacion }}"
>
<input
type="number"
name="precio"
placeholder="precio del chollo"
class="form-control mb-2"
value="{{ $chollo -> precio }}"
>
<input
type="number"
name="precio_descuento"
placeholder="precio de descuento del chollo"
class="form-control mb-2"
value="{{ $chollo -> precio_descuento }}"
>
<input
type="text"
name="disponible"
placeholder="disponible del chollo"
class="form-control mb-2"
value="{{ $chollo -> disponible }}"
>
  <button class="btn btn-primary btn-block" type="submit">Guardar cambios</button>
</form>
@endsection