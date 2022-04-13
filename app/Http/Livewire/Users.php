<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;
use Livewire\WithPagination;

class Users extends Component
{
    public $name,$email,$password,$address,$phone_number;
    public $modal = false;

    public $searchTerm2;
    use WithPagination;

    public function render()
    {

        $searchTerm2 = '%'.$this->searchTerm2.'%';

        $users = User::where('name','LIKE',$searchTerm2)
                        ->orwhere('address','LIKE',$searchTerm2)
                        ->orwhere('email','LIKE',$searchTerm2)
                        ->orwhere('phone_number','LIKE',$searchTerm2)
        ->orderBy('id', 'ASC')->paginate(20);
            return view('livewire.users', ['users' =>$users]);
        
            
            
            
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
        $this->email = "";
        $this->password = "";
        $this->address = "";
        $this->phone_number ="";
        $this->user_id ="";
    }

   public function edit($id)
   {
       $user = User::findOrFail($id);
       $this->user_id = $id;
       $this->name = $user-> name;
       $this->email = $user -> email;
       /* $this->password = $user ->password; */
       $this->address = $user -> address;
       $this->phone_number = $user -> phone_number;
       $this -> openModal();
   }

   public function delete($id)
 {
     User::find($id) -> delete();
     session()->flash('message', 'User has been deleted successfully');
 }  

 public function save()
        
 {
    User::updateOrCreate(['id'=>$this->user_id],
        [

        'name'=> $this->name,
        'email'=>  $this->email,
        /* 'password' => bcrypt(self::generatePassword(12)), */
        'address'=>  $this->address,
        'phone_number'=>  $this->phone_number,

        ]);
        session()->flash('message', 
        $this ->user_id ? 'User has been updated successfully' : 'User has been created successfully');
        $this->closeModal();
        $this->cleanupFields();

 }
 public function getRandomBytes($nbBytes = 32)
{
    $bytes = openssl_random_pseudo_bytes($nbBytes, $strong);
    if (false !== $bytes && true === $strong) {
        return $bytes;
    }
    else {
        throw new \Exception("Unable to generate secure token from OpenSSL.");
    }
}

 public function generatePassword($length){
    return substr(preg_replace("/[^a-zA-Z0-9]/", "", base64_encode(self::getRandomBytes($length+1))),0,$length);
}

public function passwordReset()
        
 {
    User::updateOrCreate(['id'=>$this->user_id],
        [
        
        'password' => bcrypt(self::generatePassword(12)),
        

        ]);
        session()->flash('PasswordMessage', 
        $this ->user_id ? 'Password has been updated successfully' : 'User has been updated successfully');
        /* $this->closeModal();
        $this->cleanupFields(); */

 }

}
