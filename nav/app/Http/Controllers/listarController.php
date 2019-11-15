<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class listarController extends Controller
{
   public function departamentos()
    {
        $users = DB::table('users')->get();

        return view('departamentos/index', ['id' => $id]);
    }
}
