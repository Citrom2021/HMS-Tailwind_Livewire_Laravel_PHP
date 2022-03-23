<x-slot name="header">
<h1 class="text-grey-900" style="text-align: center">Products from Bar & Restaurant</h1>
</x-slot>
<div class="py-12">
    <div class="max-w-7cl mx-auto sm:px6 lg:px-8">
        <div class="bg-white overflow-auto shadow-xl sm:rounded-lg px-4 py-4">
             
            <button type="button" wire:click="create()" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 my-3">New</button>
           
            
            @if($modal)
            @include('livewire.create')   
        @endif    

            <table class="table-auto w-full">
                <thead>
                    <tr class="bg-indigo-600 text-white">
                        <th class="px-4 py-2">Id</th>
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Slug</th>
                        <th class="px-4 py-2">Description</th>
                        <th class="px-4 py-2">Price</th>
                        
           
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
                    </tr> 
                    
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

    {{-- The best athlete wants his opponent at his best. --}}

