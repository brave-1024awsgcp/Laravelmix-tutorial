<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SIERController extends Controller
{
    public function index() {
        return view('SIER.index');
      }
}
