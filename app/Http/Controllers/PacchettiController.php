<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;

class PacchettiController extends Controller
{
    public function index() {
        $packages = Trip::paginate(5);
        
        return view('pacchetti', compact('packages'));
    }
}
