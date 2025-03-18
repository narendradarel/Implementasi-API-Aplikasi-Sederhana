<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OngkirController extends Controller
{
    public function index()
    {
        $response = Http::withHeaders([
            'key' => 'SaIMMHs91fccd0e41a05d45aweRfa0CG',
        ])->get('https://rajaongkir.komerce.id/api/v1/calculate/domestic-cost');


        return view('ongkir', );
    }
}
