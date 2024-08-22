<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\TipoAsiento;
use resources\views\components\inicio;


class TiposAsientosController extends Controller
{
    public function inicioTipoAsiento() {
        return view('inicio');
    }

    public function redirectToTiposAsientosMostrar() {
        $tiposAsientosCreados = TipoAsiento::all();
        return view('tiposAsientos', compact('tiposAsientosCreados'));
    }

    public function redirectToTiposAsientosAgregar() {
        return view('agregarTipoAsiento');
    }

    public function guardarTipoAsiento(Request $req) {

        $TipoAsiento = new TipoAsiento();

        $descripcion = $req->input('descripcion');
        $precio = $req->input('precio');
        $estado = $req->input('estado');

        $TipoAsiento->descripcion = $descripcion;
        $TipoAsiento->precio = $precio;
        $TipoAsiento->estado = $estado;

        $TipoAsiento->save();

        return redirect()->route('tipos.asientos.inicio');
    }

    public function eliminarTipoAsiento($id) {
        $TipoAsiento = TipoAsiento::where('idTipoAsiento', $id)->first();
        $TipoAsiento->estado = 'I';
        $TipoAsiento->save();
        return redirect()->route('tipos.asientos.inicio');
    }

    public function guardarTipoAsientoEditado(Request $req, $id) {
        $descripcion = $req->input('descripcion');
        $precio = $req->input('precio');
        $estado = $req->input('estado');

        $TipoAsiento = TipoAsiento::find($id);
        $TipoAsiento->precio = $precio;
        $TipoAsiento->descripcion = $descripcion;
        $TipoAsiento->estado = $estado;

        $TipoAsiento->save();
        return redirect()->route('tipos.asientos.inicio');
    }
}
