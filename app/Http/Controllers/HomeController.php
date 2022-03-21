<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function UservsAdmin()
    {
        $role=Auth::user()->role;

        if($role=="Admin")
        {
            return view('admin.dashboard');
            
        }
        else
        {
            return view('dashboard');

        }
    }

    
}
