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
        $imc = $request->weight/($request->height * $request->height);

        return response()->json(["imc",$imc], $request);
    }
}
