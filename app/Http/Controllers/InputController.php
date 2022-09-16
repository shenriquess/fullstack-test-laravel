<?php

namespace App\Http\Controllers;
use App\Models\Input as Input;

use Illuminate\Http\Request;

class InputController extends Controller
{
    //
    public function store(Request $request)
    {
        return response()->json([
            $request['texto']
        ]);
    }
}
