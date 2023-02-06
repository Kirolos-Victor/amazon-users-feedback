<?php

namespace App\Http\Controllers;

use HttpException;
use HttpRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        return Http::withHeaders([
            'X-RapidAPI-Key' => '34544e8a35msh6a50cccb2e58a42p182029jsnd7ec91e014c0',
            'X-RapidAPI-Host' => 'amazon23.p.rapidapi.com'
        ])->get('https://amazon23.p.rapidapi.com/reviews', [
            'asin' => 'B07XQXZXJC',
            'sort_by' => 'recent',
            'country' => 'US'
        ]);
    }
}
