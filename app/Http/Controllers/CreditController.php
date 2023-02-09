<?php

namespace App\Http\Controllers;

use App\Http\Resources\CreditResource;
use App\Models\Credit;

class CreditController extends Controller
{
    public function index()
    {
        return response()->json(CreditResource::collection(Credit::all()));
    }
}
