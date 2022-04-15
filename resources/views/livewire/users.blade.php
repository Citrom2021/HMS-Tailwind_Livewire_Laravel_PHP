
<x-slot name="header">
    <div style="text-align: center" >
<h1 class="text-grey-900" style="text-align: center">Manage users</h1>
<a href="../user/home" style="text-align: center; font-size:0.8em; color:blue;"> <u>Back to Admin Centre</u> </a>
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

            
            
            <button type="button" wire:click="create()" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 my-3 mb-4 mt-4">New</button>
           
            
            @if($modal)
            @include('livewire.createusers')   
        @endif    
        
        <div class="col-md-4 float-right mt-3 mb-3">
            <input type="search" class="form-control" placeholder="Search.." wire:model="searchTerm2" style="width: 20em;" aria-label="Search" aria-describedby="button-addon2"/>    
            <span class="input-group-text flex items-center px-3 py-1.5 text-base font-normal text-gray-700 text-center whitespace-nowrap rounded " id="basic-addon2">    
        </div>   

                         

            <table class="table-auto w-full">
                <thead>
                    <tr class="bg-indigo-600 text-white">
                        <th class="px-4 py-2 float-left">Id
                            
                        </th>
                        <th class="px-4 py-2">Name
                            
                        </th>
                        <th class="px-4 py-2">Role
                            
                        </th>
                        
                        <th class="px-4 py-2">Email
                            
                        </th>
                        
                        <th class="px-4 py-2">Address
                           
                        </th>
                        <th class="px-4 py-2">Phone number
                           
                        </th>
                        <th class="px-4 py-2">Actions
                            
                        </th>
                        
           
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                    <td class="border px-4 py-2">{{$user->id}}</td>
                    <td class="border px-4 py-2">{{$user->name}}</td>
                    <td class="border px-4 py-2">{{$user->role}}</td>
                    <td class="border px-4 py-2">{{$user->email}}</td>                    
                    <td class="border px-4 py-2">{{$user->address}}</td>
                    <td class="border px-4 py-2">{{$user->phone_number}}</td>
                    <td class="border px-4 py-2 text-center sm:flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto space-x-0.5 space-y-0.5">
                        <button wire:click="edit({{$user->id}})" class="inline-flex justify-center w-full rounded-md border border-transparent py-2 px-4 bg-indigo-500 text-base leading-6 font-medium text-white shadow-sm hover:bg-purple-800 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">Edit</button>
                        {{-- <button onclick="confirm('Are you sure?') || event.stopImmediatePropagation()" wire:click="delete({{$user->id}})" class="inline-flex justify-center w-full rounded-md border border-transparent py-2 px-4 bg-red-500 text-base leading-6 font-medium text-white shadow-sm hover:bg-orange-900 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">Delete</button> --}}
                    </td>
                    </tr> 
                    
                    @endforeach
                </tbody>
            </table>
            <div class="mt-4">
                {{ $users ->links()}}
            </div>
        </div>
    </div>
</div>

    {{-- The best athlete wants his opponent at his best. --}}

