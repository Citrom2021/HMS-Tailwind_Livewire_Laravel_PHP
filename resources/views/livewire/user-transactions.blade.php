
<x-slot name="header">
    <div style="text-align: center" >
    <h1 class="text-grey-900" style="text-align: center">Bookings</h1>
    <a href="../user/home" style="text-align: center; font-size:0.8em; color:blue;"> <u>Back to User Centre</u> </a>
    </div>
</x-slot>
    <div class="py-12">
        <div class="max-w-7cl mx-auto sm:px6 lg:px-8">
            <div class="bg-white overflow-auto shadow-xl sm:rounded-lg px-4 py-4">
                
                @if(session()->has('message'))
                <div class="bg-teal-100 rounded-b text-teal-900 px-4 py-4 shadow-md my-3" role="alert">
                    <div class="flex">
                        <div>
                            <h4>{{ session('message')}}</h4>
                        </div>
                    </div>
                </div>
                @endif
                
                <button type="button" wire:click="create()" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 my-3">New</button>
               
                
                @if($modal)
                @include('livewire.createUserTrx')   
            @endif    
    
                <table class="table-auto w-full">
                    <thead>
                        <tr class="bg-indigo-600 text-white">
                            <th class="px-4 py-2 float-left">Booking ID
                                
                            </th>
                            <th class="px-4 py-2">User Name
                                
                            </th>
                            <th class="px-4 py-2">Email
                                
                            </th>

                            <th class="px-4 py-2">Phone
                                
                            </th>
                            
                            <th class="px-4 py-2">Room Name
                                
                            </th>
                            <th class="px-4 py-2">Checkin
                                
                            </th>
                            <th class="px-4 py-2">Checkout
    
                                
                            </th>
                            <th class="px-4 py-2">Days
                                
                            </th>
                            <th class="px-4 py-2">Bill
                                
                            </th>
                            <th class="px-4 py-2">Halfboard
                                
                            </th>
                            <th class="px-4 py-2">No of guests
                                
                            </th>
                            <th class="px-4 py-2">Actions
                                
                            </th>
                            
               
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transactions as $transaction)
                        @if ($transaction->user_name == Auth::user()->name)
                        <tr>
                        <td class="border px-4 py-2">{{$transaction->id}}</td>
                        <td class="border px-4 py-2">{{$transaction->user_name}}</td>
                        <td class="border px-4 py-2">{{$transaction->email}}</td>
                        <td class="border px-4 py-2">{{$transaction->phone}}</td>
                        <td class="border px-4 py-2">{{$transaction->room_name}}</td>
                        <td class="border px-4 py-2">{{$transaction->checkin}}</td>
                        <td class="border px-4 py-2">{{$transaction->checkout}}</td>
                        <td class="border px-4 py-2">{{$transaction->days}}</td>
                        <td class="border px-4 py-2">{{$transaction->bill}}</td>
                        <td class="border px-4 py-2">{{$transaction->halfboard}}</td>
                        <td class="border px-4 py-2">{{$transaction->number_of_guests}}</td>
                        <td class="border px-4 py-2 text-center sm:flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto space-x-0.5 space-y-0.5">
                            <button wire:click="edit({{$transaction->id}})" class="inline-flex justify-center w-full rounded-md border border-transparent py-2 px-4 bg-indigo-500 text-base leading-6 font-medium text-white shadow-sm hover:bg-purple-800 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">Edit</button>
                            <button wire:click="delete({{$transaction->id}})" class="inline-flex justify-center w-full rounded-md border border-transparent py-2 px-4 bg-red-500 text-base leading-6 font-medium text-white shadow-sm hover:bg-orange-900 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">Delete</button>
                        </td>
                        </tr> 
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
        {{-- The best athlete wants his opponent at his best. --}}
    
    