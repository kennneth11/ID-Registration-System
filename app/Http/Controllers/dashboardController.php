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
            $transactions = Transaction::all();
            $MISData = DB::connection('sqlsrv_MIS')->table('Student$')->get();
            return view('student/dashboard',compact('transactions'),['students'=>$MISData]);
        }
        else if(Auth::user()->hasRole('administrator')){
            $transactions = Transaction::all();
            $MISData = DB::connection('sqlsrv_MIS')->table('Student$')->get();
            return view('administrator/dashboard',compact('transactions'),['students'=>$MISData]);
        }
    }

}
