<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImcController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function imc(Request $request)
    {
        $height = floatval($request->heigth);
        $weight = floatval($request->weigth);
        $imc = $weight / ($height * $height);

        return response()->json(["imc",$imc]);
    }
}
