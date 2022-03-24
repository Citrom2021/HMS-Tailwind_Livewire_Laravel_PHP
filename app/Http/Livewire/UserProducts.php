<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;

class asd extends Component
{
    public $products,$name,$slug,$description,$price;
    public $modal = false;

    public function render()
    {
        $this-> products = Product::all();
            return view('livewire.restaurantandbar');
            
            
         
    }
}
