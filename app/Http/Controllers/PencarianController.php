<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PencarianController extends Controller
{
    public function index()
    {
        return view('pencarian');
    }

    public function cari(Request $request)
    {

        $request->validate([
            'search' => 'required|string|max:255',
        ]);

        $searchQuery = $request->input('search');
        $response = Http::withHeaders([
            'key' => 'SaIMMHs91fccd0e41a05d45aweRfa0CG',
        ])->get('https://rajaongkir.komerce.id/api/v1/destination/domestic-destination', [
                    'search' => $searchQuery,
                ]);

        if ($response->successful()) {
            $data = $response->json();
            return view('pencarian', ['data' => $data]);
        } else {
            return back()->withErrors(['error' => 'Gagal mengambil data destinasi']);
        }
    }
}
