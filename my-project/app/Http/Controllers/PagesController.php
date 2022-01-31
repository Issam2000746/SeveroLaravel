<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\chollos;
use Illuminate\Support\Facades\Storage;

class PagesController extends Controller
{
    public function crearFormulario()
    {
        return view('chollos.crear');
    }

    public function eliminarFormulario($id)
    {
        $chollo = Chollos::findOrFail($id);

        return view('chollos.eliminar', compact('chollo'));
    }

    public function eliminar($id) {
        $cholloEliminar = Chollos::findOrFail($id);
        $cholloEliminar -> delete();
      
        return redirect()->route('chollos.listado');
      }

    public function listado()
    {
        $chollos = Chollos::all();

        return view('chollos.listado', compact('chollos'));
    }

    public function crear(Request $request)
    {
       /*dd($request);*/

        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'url' => 'required',
            'categoria' => 'required',
            'puntuacion' => 'required',
            'precio' => 'required',
            'precio_descuento' => 'required',
            'disponible' => 'required',

        ]);
        /*Storage::disk('local')->put('example.txt', 'Contents');*/
        $cholloNuevo = new Chollos;

        $cholloNuevo->titulo = $request->titulo;
        $cholloNuevo->descripcion = $request->descripcion;
        $cholloNuevo->url = $request->url;
        $cholloNuevo->categoria = $request->categoria;
        $cholloNuevo->puntuacion = $request->puntuacion;
        $cholloNuevo->precio = $request->precio;
        $cholloNuevo->precio_descuento = $request->precio_descuento;
        $cholloNuevo->disponible = $request->disponible;

        $cholloNuevo->save();

        return back()->with('mensaje', 'Chollo agregada exitósamente');
    }
    public function detalle($id) {
        $chollo = Chollos::findOrFail($id);

        return view('chollos.detalle', compact('chollo'));
    }

    public function editar($id) {
        $chollo = Chollos::findOrFail($id);
        
        return view('chollos.editar', compact('chollo'));
    }
    public function actualizar(Request $request, $id) {
        $request -> validate([
            'titulo' => 'required',
            'descripcion' => 'required'
        ]);
      
        $cholloActualizar = Chollos::findOrFail($id);
      
        $cholloActualizar -> titulo = $request -> titulo;
        $cholloActualizar -> descripcion = $request -> descripcion;
      
        $cholloActualizar -> save();
      
        return back() -> with('mensaje', 'Chollo actualizado');
      }
}


