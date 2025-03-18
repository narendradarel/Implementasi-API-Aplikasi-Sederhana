<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SearchController extends Controller
{
    public function index()
    {
        return view('search');
    }

    public function search(Request $request)
    {
        $request->validate([
            'search' => 'required|string|max:255',
        ]);

        $searchQuery = $request->input('search');
        $response = Http::withHeaders([
            'key' => 'SaIMMHs91fccd0e41a05d45aweRfa0CG',
        ])->get('https://rajaongkir.komerce.id/api/v1/destination/international-destination', [
                    'search' => $searchQuery,
                ]);

        if ($response->successful()) {
            $data = $response->json();
            return view('search', ['data' => $data]);
        } else {
            $error = $response->json();
            return back()->withErrors(['error' => $error['message'] ?? 'Gagal mengambil data destinasi']);
        }
    }
}
