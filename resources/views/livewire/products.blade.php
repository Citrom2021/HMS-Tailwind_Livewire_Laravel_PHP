<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <table class="table-fixed w-full">
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
