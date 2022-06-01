<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Transaction;
use App\Models\TestModal;
use Illuminate\Support\Facades\DB;

class dashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('student')){
            $transactions = Transaction::where('id_number', '=', Auth::user()->id)
            ->get();
            
            $letters = array();

            $i = 0;
            foreach( $letters as $letter ) {
                $letters[$i] = strtolower($letter);
                $i++;
                
            }
            $userData = DB::connection('sqlsrv_MIS')->table('Student$')
                ->where('StudentNo', '=', Auth::user()->id)
                ->first();


            $active = Transaction::where('id_number', '=', Auth::user()->id)
                ->where('active', '=', 1)
                ->first();
            
            
            return view('student/dashboard')
                ->with(['transactions'=>$transactions])
                ->with('student', $userData)
                ->with('letter', $letters)
                ->with('active', $active);
        }
        else if(Auth::user()->hasRole('administrator')){
            $transactions = Transaction::all();
            $active = Transaction::where('active', '=', 1)->count();
            $MISData = DB::connection('sqlsrv_MIS')->table('Student$')->get();
            return view('administrator/dashboard')
                ->with(['active'=>$active])
                ->with(['transactions'=>$transactions]);
        }
    }

    public function account(){
        $userData = DB::connection('sqlsrv_MIS')->table('Student$')
                ->where('StudentNo', '=', Auth::user()->id)
                ->first();
        return view('student/profile')
            ->with('student', $userData);
    }

    public function out()
    {
        Session::flush();
        Auth::logout();

        return redirect('login');
    }

}
