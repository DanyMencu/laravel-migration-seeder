<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;

class TripController extends Controller
{
    public function index() {
        $trips = Trip::all();

        return view('home', compact('trips'));
    }
}
