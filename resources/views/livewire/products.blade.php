
<x-slot name="header">
    <div style="text-align: center" >
<h1 class="text-grey-900" style="text-align: center">Products from Bar & Restaurant</h1>
<a href="../user/home" style="text-align: center; font-size:0.8em; font-color:blue;"> <u>Back to Admin Centre</u> </a>
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
            @include('livewire.create')   
        @endif    

            <table class="table-auto w-full">
                <thead>
                    <tr class="bg-indigo-600 text-white">
                        <th class="px-4 py-2 float-left">Id
                            
                        </th>
                        <th class="px-4 py-2">Name
                            
                        </th>
                        
                        <th class="px-4 py-2">Slug
                            
                        </th>
                        <th class="px-4 py-2">Description
                            
                        </th>
                        <th class="px-4 py-2">Price

                            <!-- Up and down arrows for sorting -->
                            {{-- <span class="text-sm">
                                <x-heroicon-o-arrow-sm-down class="w-6 h-6 text-white-500 white float-right"  style="cursor: pointer"/>
                                <x-heroicon-o-arrow-sm-up class="w-6 h-6 text-white-500 white float-right" style="cursor: pointer"/>

                            </span> --}}
                        </th>
                        <th class="px-4 py-2">Actions
                            
                        </th>
                        
           
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                    <td class="border px-4 py-2">{{$product->id}}</td>
                    <td class="border px-4 py-2">{{$product->name}}</td>
                    <td class="border px-4 py-2">{{$product->slug}}</td>
                    <td class="border px-4 py-2">{{$product->description}}</td>
                    <td class="border px-4 py-2">{{$product->price}}</td>
                    <td class="border px-4 py-2 text-center sm:flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto space-x-0.5 space-y-0.5">
                        <button wire:click="edit({{$product->id}})" class="inline-flex justify-center w-full rounded-md border border-transparent py-2 px-4 bg-indigo-500 text-base leading-6 font-medium text-white shadow-sm hover:bg-purple-800 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">Edit</button>
                        <button wire:click="delete({{$product->id}})" class="inline-flex justify-center w-full rounded-md border border-transparent py-2 px-4 bg-red-500 text-base leading-6 font-medium text-white shadow-sm hover:bg-orange-900 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">Delete</button>
                    </td>
                    </tr> 
                    
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

    {{-- The best athlete wants his opponent at his best. --}}

