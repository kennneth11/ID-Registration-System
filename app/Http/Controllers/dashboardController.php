<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;

class dashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('student')){
            $transactions = Transaction::all();
            return view('student/dashboard',compact('transactions'));
        }
        else if(Auth::user()->hasRole('administrator')){
            $transactions = Transaction::all();
            return view('administrator/dashboard',compact('transactions'));
        }
    }

}
