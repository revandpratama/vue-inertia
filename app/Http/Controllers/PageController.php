<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $lectures = ['Programming', 'BioAqua', 'Social'];
        return Inertia::render('Home', [
            'lectures' => $lectures,
            'title' => 'Inertia - Laravel'
        ]);
    }
    public function about()
    {
        return Inertia::render('About', [
            'title' => 'inertia - About'
        ]);
    }
}
