<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class layoutController extends Controller
{
    public function index() {
        return view('layout.index');
    }
}
