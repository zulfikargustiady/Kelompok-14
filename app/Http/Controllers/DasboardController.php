<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DasboardController extends Controller
{
    public function index(){
        return view('dashboard.index');
    }
    public function voting(){
        return view('dashboard.voting');
    }
}
