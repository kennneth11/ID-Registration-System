<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $id = $request->id;
        //$userData = DB::connection('sqlsrv_MIS')->table('Student$')->first();
        $userData = DB::connection('sqlsrv_MIS')->table('Student$')->get();
        foreach($userData as $user){
            if((int)$user->StudentNo == $request->id){
                $fullname = $user->Firstname . ' ' .  $user->MiddleName . ' ' . $user->Lastname;
            }
        }

        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'id'  => $id,
            'name' => $fullname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $newUser = User::find($id);
        $newUser->attachRole('student');

        event(new Registered($newUser));

        Auth::login($newUser);

        return redirect(RouteServiceProvider::HOME);
    }

    public function createto()
    {
        return view('auth.registerto');
    }

    public function validateto()
    {
        return view('auth.validate');
    }

    public function validateStudent(Request $request)
    {
        $MISData = DB::connection('sqlsrv_MIS')->table('Student$')->get();
        
        if (!(User::where('id', $request->id)->exists()) && (DB::connection('sqlsrv_MIS')->table('Student$')->where('StudentNo', $request->id)->exists()))
        {
            if(DB::connection('sqlsrv_MIS')->table('Student$')->where('StudentNo', $request->id)->where('RegID', $request->RegistrationNum)->exists())
                return redirect()->route('register',['id'=>$request->id]);
            else 
                return redirect()->route('validateto')->with('failed',$request->id . $request->RegistrationNum);
        }
        else
            return redirect()->route('validateto')->with('failed','credentials');

    }


        


}
