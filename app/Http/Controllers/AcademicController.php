<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcademicController extends Controller
{
    public function index()
    {
        # code...
        return view('academics.index');
    }
}
