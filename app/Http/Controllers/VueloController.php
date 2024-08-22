<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vuelo;
use resources\views\components\inicio;
class VueloController extends Controller
{
    public function inicioVuelo() {
        return view('inicio');
    }
}
