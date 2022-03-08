<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FanController extends Controller
{
    public function index() {
        return view('fans');
    }
}
