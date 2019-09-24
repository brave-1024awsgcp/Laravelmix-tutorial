<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HOMEController extends Controller
{
    public function index() {
        return view('HOME.index');
      }
}
