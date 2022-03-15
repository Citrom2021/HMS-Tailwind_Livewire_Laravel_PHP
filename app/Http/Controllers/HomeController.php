<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $role=Auth::user()->role;

        if($role=="Admin")
        {
            return view('admin.dashboard');
            //return redirect()->away('http://localhost/hms22/hms/admin/dashboard.php');
        }
        else
        {
            return view('dashboard');

        }
    }
}
