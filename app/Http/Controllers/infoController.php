<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class infoController extends Controller
{
    public function index()
    {
        $response = Http::get('https://api.kawalcorona.com/indonesia');
        $data = $response->json();
        return view('index', compact('data'));
    }
}
