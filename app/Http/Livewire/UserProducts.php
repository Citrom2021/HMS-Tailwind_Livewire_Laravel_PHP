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
use Livewire\WithPagination;

class UserProducts extends Component
{
    public $name,$category,$description,$price;
    public $modal = false;
    public $searchTerm3;

    use WithPagination;

    public function render()
    {
        $searchTerm3 = '%'.$this->searchTerm3.'%';

       $products = Product::where('name','LIKE',$searchTerm3)
                        ->orwhere('category','LIKE',$searchTerm3)
                        ->orwhere('description','LIKE',$searchTerm3)
                        
        ->orderBy('category', 'ASC')->paginate(15);
            return view('livewire.restaurantandbar', ['products' => $products]);
            
            
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
        $this->category = "";
        $this->description = "";
        $this->price = "";
        
    }

   public function edit($id)
   {
       $product = Product::findOrFail($id);
       $this->id = $id;
       $this->name = $product-> name;
       $this->category = $product -> category;
       $this->description = $product ->description;
       $this->price = $product -> price;
       $this -> openModal();
   }

   public function delete($id)
 {
     Product::find($id) -> delete();
 }  

 

}
