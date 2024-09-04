<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:forms',
            'password' => 'required|string|min:6',
            'mobilenumber' => 'required|string|max:15',
        ]);

       

        Form::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->password),
            'mobilenumber' => $request->input('mobilenumber'),
        ]);
        //dd($request->all());

       // return redirect()->route('login')->with('status', 'You have successfully registered to figma');
       return redirect('/login')->with('success', 'You Have Successfully Registered in Figma! Please log in to continue..');
    }
   
    public function showloginForm()
    {
        return view('login');
    }




    public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|string',
    ]);
    
    $form = Form::where('email', $request->email)->first();
 
    if ($form && Hash::check($request->password, $form->password)) {
        
        Auth::login($form);

        return redirect('/fitnessgoal')->with('success', 'You are logged in!');
    }

    return redirect('/login')->with('error', 'Invalid credentials. Please try again.');
}

    public function showFitnessgoal()
    {
        return view('fitnessgoal');
    }

    

    public function showFitnessguide()
    {
       
        $user = Auth::guard('web')->user();
        return view('fitnessguide', ['name' => $user->name]);

  
        
    }

    public function logout(Request $request)
{
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/login'); 
}
}
