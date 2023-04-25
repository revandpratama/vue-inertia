<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

    public function store(Request $request) 
    {
        
        $validatedData = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        return redirect('/home')->with('success', 'Data Valid');
    }
}
