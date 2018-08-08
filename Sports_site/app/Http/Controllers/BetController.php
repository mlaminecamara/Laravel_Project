<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class BetController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function bet()
    {
        return view('Pages/bet');
    }
}
