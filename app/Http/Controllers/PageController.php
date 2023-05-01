<?php

namespace App\Http\Controllers;

use App\Models\User;
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
            'title' => 'inertia - About',
            'names' => ['alexi', 'ginger', 'fonso']
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

    public function editAccount() 
    {
        

        return Inertia::render('EditAccount', [
            'title' => 'Inertia - Edit Account'
        ]);
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',

        ]);

        User::where('id', $request->id)->update($validatedData);
        
        // return Inertia::location('/edit/' . $request->username)->with('accountUpdate' , 'Account Updated!');
        return redirect('/edit/' . $request->username)->with('accountUpdate', 'Account Updated!');
    }
}
