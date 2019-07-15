<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\welcome;
use App\Gallery;
use App\Paket;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $gallery = Gallery::all();
        return view('welcome', compact('gallery'));
    }
    public function paket()
    {
        $paket = Paket::all();
        return view('welcome', compact('paket'));
    }
}
