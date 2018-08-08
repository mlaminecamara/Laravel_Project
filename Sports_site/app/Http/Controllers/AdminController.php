<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function modify_settings()
    {
        $checkAuth = \Auth::user()->is_admin;

        if ($checkAuth == 1)
        {
            return view('Pages/admin');
        }

    }
}
