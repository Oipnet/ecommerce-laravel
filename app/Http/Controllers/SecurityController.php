<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class SecurityController extends Controller
{
    public function login(): View
    {
        return view('security.login');
    }
}
