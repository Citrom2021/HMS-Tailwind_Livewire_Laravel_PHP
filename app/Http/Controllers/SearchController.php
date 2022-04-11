<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Livewire\Component;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Http\Livewire\Transactions;

class SearchController extends Controller



{
    // aktuális function used now on page

    function search(Request $request){

       
         if( isset($_GET['query']) && strlen($_GET['query']) > 1){

             $search_text = $_GET['query'];
             $transactions = DB::table('transactions')
              ->where('user_name','LIKE','%'.$search_text.'%')
              ->orWhere('room_name','LIKE','%'.$search_text.'%')
              ->orWhere('email','LIKE','%'.$search_text.'%')
              ->orWhere('phone','LIKE','%'.$search_text.'%')->paginate(20);
             $transactions->appends($request->all());
             return view('livewire.transactions',['transactions'=>$transactions]);
            
         }else{
              return view('livewire.transactions');
         }
        return view('livewire.transactions');
       
    }

    function find(Request $request){
            $request->validate([
              'query'=>'required|min:2'
           ]);
  
           $search_text = $request->input('query');
           $transactions = DB::table('transactions')
                      ->where('user_name','LIKE','%'.$search_text.'%')
                    //   ->orWhere('bill','<', 100000)
                    //   ->orWhere('email','like','%'.$search_text.'%')
                      ->paginate(2);
            return view('livewire.transactions',['transactions'=>$transactions]);

    }

    
}