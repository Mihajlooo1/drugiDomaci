<?php

namespace App\Http\Controllers;

use App\Http\Resources\CreditResource;
use App\Models\Credit;
use Illuminate\Http\Request;

class CreditController extends Controller
{
    public function index()
    {
        return response()->json(CreditResource::collection(Credit::all()));
    }


    public function update(Request $request, $id)
    {
        $credit = Credit::find($id);
        if (!$credit) {
            return response()->json(["error" => "Missing credit"], 404);
        }
        $credit->update($request->all());
        return new CreditResource($credit);
    }
}
