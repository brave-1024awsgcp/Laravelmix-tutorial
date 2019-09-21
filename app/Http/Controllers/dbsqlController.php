<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dbsqlController extends Controller
{
    public function index() {
        return view('dbsql.index');
      }
}
