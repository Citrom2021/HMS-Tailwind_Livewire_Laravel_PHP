<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class AdminvsUserWebController extends Controller
{
    public function UserProductAdminProduct()
    {
        $role=Auth::user()->role;

        if($role=="Admin")
        {
            return view('livewire.products');
            
        }
        else
        {
            return view('livewire.restaurantandbar');

        }
    }
}
