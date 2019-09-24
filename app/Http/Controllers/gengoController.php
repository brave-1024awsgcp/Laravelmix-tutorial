<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class gengoController extends Controller
{
    public function index() {
        return view('gengo.index');
      }
}
