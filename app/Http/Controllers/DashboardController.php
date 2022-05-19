<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        //return auth()->user()->with('lawdatas')->get();
        if (Auth::user()->hasRole('3')) {
            return view('userdah');
        } elseif (Auth::user()->hasRole('2')) {
            return view('Lawyerdash');
        } elseif (Auth::user()->hasRole('1')) {
            return view('dashboard');
        } elseif (Auth::user()->hasRole('user2')) {
            return view('user2');
        }
    }
    public function myprofile(Request $request)
    {
        return view('myprofile');
        if (  Auth::user()->customers()->where('customer_number', $request->customer_number)->exists()
==null)
 {
     return view('myprofile');
}

    }
}
