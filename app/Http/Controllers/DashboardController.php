<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->hasRole('user')) {
            return view('userdah');
            } elseif (Auth::user()->hasRole('Lawyer')) {
            return view('Lawyerdash');
        } elseif (Auth::user()->hasRole('admin')) {
            return view('dashboard');
        }elseif (Auth::user()->hasRole('user2')) {
            return view('user2');
        }

    }
    public function myprofile()
    {
        return view('myprofile');
    }
}
