<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class CobaController extends Controller
{
    public function index()
    {
        $parameters = ["wind", "dewpoint", "rh", "pressure", "ptype", "convPrecip", "temp"];
        $levels =  ["surface", "800h", "300h"];
        return view('coba', compact('parameters', "levels"));
    }

    public function post(Request $request)
    {
        $apiUrl = 'https://api.windy.com/api/point-forecast/v2';
        $apiKey = 'vTDBD8ZOCdnJZ8cikarfReoZwmYOefhw';

        $lat = $request->input('lat');
        $lon = $request->input('lon');
        $model = $request->input('model');
        $parameters = $request->input('parameters');
        $levels = $request->input('levels');
        
        $response = Http::post($apiUrl, [
            'lat' => $lat,
            'lon' => $lon,
            'model' => $model,
            'parameters' => $parameters,
            'levels' => $levels,
            'key' => $apiKey,
        ]);
        
        //dd($request);
        $datas = $response->json();
        return view('hasil', compact('datas'));
    }
}
