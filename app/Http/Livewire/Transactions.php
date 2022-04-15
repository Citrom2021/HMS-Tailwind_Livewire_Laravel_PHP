<?php

namespace App\Http\Livewire;

use App\Models\Transaction;
use App\Models\User;
use App\Models\Room;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;
use Livewire\WithPagination;



class Transactions extends Component

{
    use WithPagination;
    public $searchTerm;
   

    public $transactions,$user_name,$email,$phone,$room_name,$checkin,$checkout,$days,$bill,$halfboard,$number_of_guests;
    public bool $isDisabled = true;
    public $modal = false;

    
    public function render()
    {      
        
    
        $searchTerm = '%'.$this->searchTerm.'%';

        $transactionsToList = Transaction::where('user_name','LIKE',$searchTerm)
                                ->orwhere('room_name','LIKE',$searchTerm)
                                ->orwhere('email','LIKE',$searchTerm)
                                ->orwhere('phone','LIKE',$searchTerm)
        ->orderBy('checkin', 'ASC')->paginate(10);


        $this->transactions = Transaction::all();

        return view('livewire.transactions', ['transactionsToList' => $transactionsToList]);
        
        
        
                              
       
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
    // adminos szobafoglalás felvitelnél létrehozzuk a usert is, vagy updateljük
    self::CreateUser();
    
    Transaction::updateOrCreate(['id'=>$this->transaction_id],
        [

        'user_id' => $this->user_id,
        'room_id' => self::GetRoom()->id,
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


 //admmin által beírt user felvitele táblába, vagy név alapján updatelése
 //user id vissza a transactions táblába
 private function CreateUser()
 {
    $user = User::updateOrCreate(['name'=>$this->user_name],
    [
        'name' => $this->user_name,
        'email' => $this->email,
        'phone'=> $this->phone,
        'password' => bcrypt(self::generatePassword(12))
    ]);

    $this->user_id = $user->id;
 }

//Néva alapján lekérdezzük a szoba adatait
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

 function getRandomBytes($nbBytes = 32)
{
    $bytes = openssl_random_pseudo_bytes($nbBytes, $strong);
    if (false !== $bytes && true === $strong) {
        return $bytes;
    }
    else {
        throw new \Exception("Unable to generate secure token from OpenSSL.");
    }
}

function generatePassword($length){
    return substr(preg_replace("/[^a-zA-Z0-9]/", "", base64_encode(self::getRandomBytes($length+1))),0,$length);
}





}
