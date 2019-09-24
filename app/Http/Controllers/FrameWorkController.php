<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrameWorkController extends Controller
{
    public function index() {
        return view('FrameWork.index');
      }
}
