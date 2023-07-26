<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JuryController extends Controller
{
    public function index(Request $request)
    {
        return view('jury.home');
    }
}
