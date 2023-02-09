<?php

namespace App\Http\Controllers;

use App\Http\Resources\ClientResource;
use App\Models\Client;

class ClientController extends Controller
{

    public function index()
    {
        return response()->json(ClientResource::collection(Client::all()));
    }
}
