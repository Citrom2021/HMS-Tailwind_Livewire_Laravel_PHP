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

class Products extends Component
{
    public $products,$name,$slug,$description,$price;
    public $modal = false;

    public function render()
    {
        $this-> products = Product::all();
            return view('livewire.products');
            
            
           //  blocking user to see products
           
        /* $role=Auth::user()->role;

        if($role=="Admin")
        {
            $this-> products = Product::all();
            return view('livewire.products');
        }

        if($role=="User")
        
        {
            return view('livewire.products')
            return view('welcome');
        }
     */
    }

    public function create()
    {
        $this->cleanupFields();
        $this->openModal();
    }

    public function openModal(){
        $this->modal = true;
    }

    public function closeModal(){
        $this->modal = false;
    }
    public function cleanupFields(){
        
        $this->name = "";
        $this->slug = "";
        $this->description = "";
        $this->price = "";
        
    }

}
