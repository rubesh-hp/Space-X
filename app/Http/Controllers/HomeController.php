<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application home page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // This is where you can pass data to the home view if needed
        return view('home');  // It returns the "home" blade view
    }
}
