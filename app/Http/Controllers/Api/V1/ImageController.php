<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function store(Request $request)
    {
        // Manejar la solicitud POST aquí
       
        $path = $request->file('image')->store('public/img');
        $url = url('/storage/img/' . basename($path));
        return response()->json(['url' => $url]);

    }
}
