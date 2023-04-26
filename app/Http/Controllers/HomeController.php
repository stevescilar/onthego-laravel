<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return inertia(
            'Home/Home',
            [
                'message' => 'I run the World'
            ]
        
        );
    }

    public function about(){
        return inertia('Home/About');
    }
    // public function home(){
    //     return inertia('Home/Index');
    // }
}
