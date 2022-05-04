<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\daschboardController;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Role;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class UserManagementController extends Controller
{
    public function index()
    {
        $admindata = Role::where('name', 'administrator')->first()->users()->get();
        $studentdata = Role::where('name', 'student')->first()->users()->get();
        
        return view('administrator/user-management/user-management',['administrators'=>$admindata],['students'=>$studentdata]);
        
    }

    public function create()
    {
        return view('administrator/user-management/create-admin');
    }



    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $user->attachRole('administrator');

        event(new Registered($user));
        return redirect()->route('dashboard.user-management');
    
    }


}
