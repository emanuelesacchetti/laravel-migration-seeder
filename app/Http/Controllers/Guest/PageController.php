<?php

namespace App\Http\Controllers\Guest;
use App\Models\Train;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $trains = Train::where('Azienda','Italo');

        return view('home', compact('trains'));
    }
}
