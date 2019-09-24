<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class serverserviceController extends Controller
{
    public function index() {
        return view('serverservice.index');
      }
}
