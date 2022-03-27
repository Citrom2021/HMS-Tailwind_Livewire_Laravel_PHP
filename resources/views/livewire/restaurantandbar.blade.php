
<x-slot name="header">
    <h1 class="text-grey-900" style="text-align: center">Products from Bar & Restaurant</h1>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7cl mx-auto sm:px6 lg:px-8">
            <div class="bg-white overflow-auto shadow-xl sm:rounded-lg px-4 py-4">
                
               
                

               
                               
    
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
                           
                        </td>
                        </tr> 
                        
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
        {{-- The best athlete wants his opponent at his best. --}}
    
    