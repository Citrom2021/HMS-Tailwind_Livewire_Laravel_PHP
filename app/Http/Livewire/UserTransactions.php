<?php

namespace App\Http\Livewire;

use App\Models\UserTransaction;
use App\Models\Transaction;
use App\Models\Room;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;

class UserTransactions extends Component
{
    public $transactions,$user_name,$email,$phone,$room_name,$checkin,$checkout,$days,$bill,$halfboard,$number_of_guests,$user_id;
    public bool $isDisabled;
    public $modal = false;

    public function render()
    {
        $this-> transactions = Transaction::all();
            return view('livewire.user-transactions');
            
                    
       
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

 public function updatedroomname()
 {
     self::UpdateBill();
 }

 public function updatedcheckin()
 {

    self::UpdateDays();
 }

 public function updatedcheckout()
 {

    self::UpdateDays();
 }

 public function save()



 {
    Transaction::updateOrCreate(['id'=>$this->transaction_id],
        [

        'user_id' => Auth::user()->id,
        'room_id' => self::GetRoom()->id,
        'user_name'=> Auth::user()->name,
        'email'=> Auth::user()->email,
        'phone'=> Auth::user()->phone_number,
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
 

 public function GetRoom()
 {
     $room = Room::where('room_type', $this->room_name)->first();
     return $room;
 }



//Napok kiszámolása checkin és checkout datekből
public function UpdateDays()
{
   if (!empty($this->checkin) && !empty($this->checkout))
   {
       $checkinDate = strtotime($this->checkin);
       $checkoutDate = strtotime($this->checkout);

       $diffSecs = $checkoutDate - $checkinDate;

       if ($checkinDate < strtotime('today midnight'))
       {
            $this->isDisabled = true;
            session()->flash('checkin_message', 'Checkin date cannot be in the past!');
       }
       elseif ($diffSecs > 0)
       {
           
            $this->days = round($diffSecs / (60 * 60 * 24));
            self::UpdateBill();
          
       }
       //Ha a különbség negatív, akkor a checkout dátum a checkin elött van
       else
       {

            $this->isDisabled = true;
            $this->bill = 0;
            $this->days = 0;
            session()->flash('days_message', 'Checkout date must be after checkin!');
       
       }

   }

}




//Összeg kiszámolása szobafajtából és napok számából
public function UpdateBill()
{
    if (!empty($this->room_name) && !empty($this->days))
   {
        if (self::IsRoomAvailable())
        {

            $this->isDisabled = false;
            $this->bill = self::GetRoom()->price * $this->days;
        }   
        else
        {
            
            $this->isDisabled = true;
        
        }
   }
   else
   {
        $this->isDisabled = true;
        $this->bill = 0;
   }
  
}

//Megnézzük, hogy a kiválasztott időszakra a szoba foglalt-e
private function IsRoomAvailable()
{
   foreach ($this->transactions as $transaction)
   {

       $checkinStamp = strtotime($transaction->checkin);
       $checkoutStamp = strtotime($transaction->checkout);

       $checkinStampTrans = strtotime($this->checkin);
       $checkoutStampTrans = strtotime($this->checkout);

       if ($transaction->room_name == $this->room_name && $checkoutStamp > time())
       {
            if (empty($this->transaction_id) || $this->transaction_id != $transaction->id)
            {
                if ($checkinStamp < $checkoutStampTrans && $checkoutStamp > $checkinStampTrans)
                {
                    session()->flash('unavailable_message', sprintf('Room is already booked from %s to %s!', $transaction->checkin, $transaction->checkout));
                    return false;
                }
            }
       }
   }
   return true;
}

}
