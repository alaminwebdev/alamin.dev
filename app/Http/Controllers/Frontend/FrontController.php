<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class FrontController extends Controller
{
    public function index(){
        return Inertia::render('Home', [
            'frameworks'=> [
                'server_side' => 'Laravel',
                'client_side' => 'Vue, Inertia, Vite',
            ],
        ]);
    }
    public function about(){
        return Inertia::render('About');
    }
    public function contact(){
        return Inertia::render('Contact');
    }
}
