<?php

namespace App\Http\Livewire;

use App\Models\Transaction;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;

class Transactions extends Component
{
    public $transactions,$user_name,$email,$phone,$room_name,$checkin,$checkout,$days,$bill,$halfboard,$number_of_guests;
    public $modal = false;

    public function render()
    {
        $this-> transactions = Transaction::all();
            return view('livewire.transactions');
            
                        
       
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
        
        $this-> transaction_id = "";
        $this->email = "";
        $this->phone = "";
        $this->user_name = "";
        $this->room_name = "";
        $this->checkin = "";
        $this->checkout="";
        $this->days="";
        $this->bill="";
        $this->halfboard="";
        $this->number_of_guests="";
        
    }

   public function edit($id)
   {
       $transaction = Transaction::findOrFail($id);
       $this->transaction_id = $id;
        $this->user_name =$transaction->user_name;
        $this->email =$transaction->email;
        $this->phone =$transaction->phone;
        $this->room_name =$transaction->room_name;
        $this->checkin = $transaction->checkin;
        $this->checkout=$transaction->checkout;
        $this->days=$transaction->days;
        $this->bill=$transaction->bill;
        $this->halfboard=$transaction->halfboard;
        $this->number_of_guests=$transaction->number_of_guests;

        $this -> openModal();
   }

   public function delete($id)
 {
     Transaction::find($id) -> delete();
     session()->flash('message', 'Transaction has been deleted successfully');
 }  

 public function save()



 {
    Transaction::updateOrCreate(['id'=>$this->transaction_id],
        [

        /* 'user_id' => GetUserID();
        'room_id' => GetRoomID(); */
        'user_name'=>$this->user_name,
        'email'=>$this->email,
        'phone'=>$this->phone,
        'room_name'=> $this->room_name,
        'checkin'=>$this->checkin,
        'checkout'=>$this->checkout,
        'days'=>$this->days,
        'bill'=>$this->bill,
        'halfboard'=> $this->halfboard,
        'number_of_guests'=> $this->number_of_guests,

        ]);
        session()->flash('message', 
        $this ->transaction_id ? 'Booking has been updated successfully' : 'Booking has been created successfully');
        $this->closeModal();
        $this->cleanupFields();

 }
 

}
