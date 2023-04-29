<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PageController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $lectures = ['Programming', 'BioAqua', 'Social'];
        return Inertia::render('Home', [
            'lectures' => $lectures,
            'title' => 'Inertia - Laravel',
            'user' => $user
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
            'name' => 'required|max:30',
            'username' => 'required|regex:/^[a-zA-Z0-9]+$/',
            'email' => 'required|email:dns',
            'password' => 'required|max:15',
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        return redirect('/home')->with('success', 'Data Valid');
    }
}
