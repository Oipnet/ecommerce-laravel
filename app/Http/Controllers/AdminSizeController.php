<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditSizeRequest;
use App\Models\Category;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminSizeController extends Controller
{
    public function edit(Size $size): View
    {
        return view('admin.size.edit', compact('size'));
    }

    public function update(EditSizeRequest $editSizeRequest, Size $size) {
        $validatedRequest = $editSizeRequest->validated();

        dd($validatedRequest);
    }
}
