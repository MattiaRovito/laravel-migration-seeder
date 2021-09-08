<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Home
     */

    public function home() {
        return view('home');
    }




     /**
     * Chi siamo
     */


    public function noi() {
        return view('noi');
    }   


     /**
     * Contatti
     */

    public function contatti() {
        return view('contatti');
    }




     /**
     * Social
     */

    public function social() {
        return view('social');
    }


}
