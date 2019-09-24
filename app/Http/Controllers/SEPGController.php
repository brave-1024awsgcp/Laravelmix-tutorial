<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SEPGController extends Controller
{
    public function index() {
        return view('SEPG.index');
      }
}
