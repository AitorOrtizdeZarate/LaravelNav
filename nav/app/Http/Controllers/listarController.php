<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\departamento;


class listarController extends Controller
{
   public function departamentos()
    {
        $departamentos = departamento::all();
        return view('departamentos.index')->with('departamentos', $departamentos);
    }
}
