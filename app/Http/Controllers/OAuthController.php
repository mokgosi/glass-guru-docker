<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OAuthController extends Controller
{
    public function redirect(Request $request) 
    {
        $query = http_build_query([
            'client_id' => '1',
            'redirect_uri' => 'http://localhost:84/callback',
            'response_type' => 'code',
            // 'scope' => 'place-orders check-status',
        ]);

        return redirect('http://localhost:84/oauth/authorize?'.$query);

    }

    public function callback(Request $request) 
    {
        $response = Http::asForm()->post('http://localhost:84/oauth/token', [
            'grant_type' => 'authorization_code',
            'client_id' => '1',
            'client_secret' => 'OPU1GSAb1WBV6rvpYggzTDaiWPwKWC3fR87QomQc',
            'redirect_uri' => 'http://third-party-app.com/callback',
            'code' => $request->code,
        ]);
    }
}
