<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WEBController extends Controller
{
    public function index() {
        return view('WEB.index');
      }
}
