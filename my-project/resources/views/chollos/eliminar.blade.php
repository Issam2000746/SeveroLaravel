@extends('plantilla')

@section('apartado')
<form action="{{ route('chollos.eliminar', $chollo) }}" method="POST" class="d-inline">
    @method('DELETE')
    @csrf
  
    <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
  </form>
@endsection