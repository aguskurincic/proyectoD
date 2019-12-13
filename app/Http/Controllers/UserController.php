<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;


/**
 *
 */
class UserController extends Controller
{
  public function index()
  {
    $usuario = Auth::user();

    return view('verperfilusuario', compact('usuario'));
  }
}
