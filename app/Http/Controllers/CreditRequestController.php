<?php

namespace App\Http\Controllers;

use App\Http\Resources\CreditRequestResource;
use App\Models\Credit;
use App\Models\CreditRequest;
use Illuminate\Http\Request;

class CreditRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(CreditRequestResource::collection(CreditRequest::all()));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $credit = Credit::find($request->credit_id);
        if (!$credit) {
            return response()->json(["error" => "Missing credit"], 400);
        }
        if ($credit->min_period > $request->period || $credit->max_period < $request->period) {
            return response()->json(["error" => "Period is not within the limits"], 400);
        }
        if ($credit->min_amount > $request->amount || $credit->max_amount < $request->amount) {
            return response()->json(["error" => "Amount is not within the limits"], 400);
        }
        $cr = CreditRequest::create([
            "credit_id" => $request->credit_id,
            "amount" => $request->amount,
            "period" => $request->period,
            "client_id" => $request->client_id,
            "rate" => $credit->rate
        ]);

        return response()->json($cr);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CreditRequest  $creditRequest
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cr = CreditRequest::find($id);
        if (!$cr) {
            return response()->json(['error' => 'Missing credit request'], 404);
        }

        return response()->json(new CreditRequestResource($cr));
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CreditRequest  $creditRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cr = CreditRequest::find($id);
        if (!$cr) {
            return response()->json(['error' => 'Missing credit request'], 404);
        }
        $cr->delete();
        return response()->noContent();
    }
}
