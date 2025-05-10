<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'username' =>['required','string','max:255'],
            
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'age' =>['required','int','max:250'],
            'weight' =>['required','int','max:300'],
            'height' =>['required','int','max:300'],
            'activity_level' =>['required','string','max:10'],
            
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'username'=> $request->username,
            'password' => Hash::make($request->password),
            'gender'=> $request->gender,
            'age'=> $request->age,
            'weight'=>$request->weight,
            'height'=>$request->height,
            'activity_level'=>$request->activity_level,
            
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect('/');
    }
}
