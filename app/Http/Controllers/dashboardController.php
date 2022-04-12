<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('student')){
            return view('student/dashboard');
        }
        else if(Auth::user()->hasRole('administrator')){
            return view('administrator/dashboard');
        }
    }

}
