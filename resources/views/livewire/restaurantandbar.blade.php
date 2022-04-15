
<x-slot name="header">
    <div style="text-align: center;">
        <h1 class="text-grey-900" style="text-align: center">Products from Bar & Restaurant</h1>
        <a href="../user/home" style="color:blue; font-size:0.8em;"> <u>Return to User Centre</u> </a>

    </div>
    
    </x-slot>
    <div class="py-12">
        <div class="max-w-7cl mx-auto sm:px6 lg:px-8">
            <div class="bg-white overflow-auto shadow-xl sm:rounded-lg px-4 py-4">
                
               
                
                <div class="row">
                <div class="flex justify-center">
                    <div class="mb-3 xl:w-96" >
                      <div class="input-group relative flex flex-wrap items-stretch w-96 mb-4 rounded">
                        <input style="width: 20em;" type="search" class="form-control relative flex-auto min-w-0 block w-96 px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Search..." aria-label="Search" aria-describedby="button-addon2" wire:model="searchTerm3">
                        <span class="input-group-text flex items-center px-3 py-1.5 text-base font-normal text-gray-700 text-center whitespace-nowrap rounded " id="basic-addon2">
                                                     
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
    
                <table class="table-auto w-full">
                    <thead>
                        <tr class="bg-indigo-600 text-white">
                            <th class="px-4 py-2 float-left">Id
                                
                            </th>
                            <th class="px-4 py-2">Name
                                
                            </th>
                            
                            <th class="px-4 py-2">category
                                
                            </th>
                            <th class="px-4 py-2">Description
                                
                            </th>
                            <th class="px-4 py-2">Price
    
                                
                            </th>
                            
                            
               
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                        <td class="border px-4 py-2">{{$product->id}}</td>
                        <td class="border px-4 py-2">{{$product->name}}</td>
                        <td class="border px-4 py-2">{{$product->category}}</td>
                        <td class="border px-4 py-2">{{$product->description}}</td>
                        <td class="border px-4 py-2">{{$product->price}}</td>
                        
                        </tr> 
                        
                        @endforeach
                    </tbody>
                </table>

                <div class="mt-4">
                    {{ $products ->links()}}
                </div>

            </div>
        </div>
    </div>
    
        {{-- The best athlete wants his opponent at his best. --}}
    
    