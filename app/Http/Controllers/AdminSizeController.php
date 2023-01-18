<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminSizeController extends Controller
{
    public function edit(): View
    {
        return view('admin.size.edit');
    }
}
