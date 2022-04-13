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

class Products extends Component
{
    public $name,$category,$description,$price;
    public $modal = false;
    public $searchTerm4;

    use WithPagination;
    public function render()
    {
        $searchTerm4 = '%'.$this->searchTerm4.'%';

        $products = Product::where('name','LIKE',$searchTerm4)
                                ->orwhere('category','LIKE',$searchTerm4)
                                ->orwhere('description','LIKE',$searchTerm4)
                                
                                ->orderBy('category', 'ASC')->paginate(10);
                                return view('livewire.products', ['products' => $products]);
        
            
            
            
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
        $this->product_id ="";
        
    }

   public function edit($id)
   {
       $product = Product::findOrFail($id);
       $this->product_id = $id;
       $this->name = $product-> name;
       $this->category = $product -> category;
       $this->description = $product ->description;
       $this->price = $product -> price;
       $this -> openModal();
   }

   public function delete($id)
 {
     Product::find($id) -> delete();
     session()->flash('message', 'Product has been deleted successfully');
 }  

 public function save()

 {
    Product::updateOrCreate(['id'=>$this->product_id],
        [

        'name'=> $this->name,
        'category'=>  $this->category,
        'description'=> $this->description,
        'price'=>  $this->price,

        ]);
        session()->flash('message', 
        $this ->product_id ? 'Product has been updated successfully' : 'Product has been created successfully');
        $this->closeModal();
        $this->cleanupFields();

 }
 

}