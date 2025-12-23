<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
public function uploadImage(Request $request)
{
    if ($request->hasFile('upload')) {
        $originName = $request->file('upload')->getClientOriginalName();
        $fileName = pathinfo($originName, PATHINFO_FILENAME);
        $extension = $request->file('upload')->getClientOriginalExtension();
        $fileName = $fileName . '_' . time() . '.' . $extension;
    
        // Move to public/media
        $request->file('upload')->move(public_path('media'), $fileName);

        $url = asset('media/' . $fileName);

        // CKEditor expects this exact JSON response
        return response()->json([
            'uploaded' => 1,
            'fileName' => $fileName,
            'url' => $url
        ]);
    }
}
}