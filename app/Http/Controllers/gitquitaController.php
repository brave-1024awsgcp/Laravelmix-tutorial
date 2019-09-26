<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class gitquitaController extends Controller
{
    public function index() {
        return view('gitquita.index');
      }
}
