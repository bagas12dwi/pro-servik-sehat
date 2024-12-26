<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormulirUserController extends Controller
{
    public function index()
    {
        return view('user.formulir.index', [
            'title' => 'Formulir Pasien'
        ]);
    }
}
