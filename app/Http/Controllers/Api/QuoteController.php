<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\QuoteRequest;
use App\Models\Quote;
class QuoteController extends Controller
{
    public function confirmQuote(QuoteRequest $request)
    {
        $quote = new Quote();
        $quote->reference = $request->reference;
        $quote->cost = $request->cost;
        $quote->store_location = $request->store_location;

        $quote->client_name = $request->client_name;
        $quote->client_phone = $request->client_phone;

        $quote->vin = $request->vin;
        $quote->make = $request->make;
        $quote->model = $request->model;
        $quote->year = $request->year;
        $quote->registration = $request->registration;
        $quote->license_issue_date = $request->license_issue_date;
        $quote->license_expiry_date = $request->license_expiry_date;
        $quote->save();

        return response()->json(['quote' => $quote], 200);

        return true;
    }
}
