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
        //$fullname = $request->fullname;
        $MIS_stuedent = DB::connection('sqlsrv_MIS')->table('Student$')->where('StudentNo', $id)->first();
        $fullname = $MIS_stuedent->Firstname . ' ' .  $MIS_stuedent->MiddleName . ' ' . $MIS_stuedent->Lastname;
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'id' => $id,
            'name' => $fullname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $newUser = User::find($request->id);
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
        $MISDatas = DB::connection('sqlsrv_MIS')->table('Student$')->get();
        
        if (!(User::where('id', $request->id)->exists()) && (DB::connection('sqlsrv_MIS')->table('Student$')->where('StudentNo', $request->id)->exists()))
        {
            
            foreach($MISDatas as $data)
            {
                if($request->id == $data->StudentNo && $request->RegistrationNum == $data->RegID){
                    $fullname = $data->Firstname . ' ' .  $data->MiddleName . ' ' . $data->Lastname;
                    $id = round($data->StudentNo);
                }  
            }
            
            //return redirect()->route('register', [$id]);
            return redirect()->route('register',['id'=>$id]);

        }
        
        //return view('auth.register', ['id' => $id], ['fullname' => $fullname]);


        //if (!empty($id))
        //{
        //    return view('auth.register', ['id' => $id], ['fullname' => $fullname]);
        //}
        //else
        //    return view('HomePage');
        
    }
}
