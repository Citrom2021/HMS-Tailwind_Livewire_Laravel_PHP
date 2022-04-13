<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Product::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
      { 
        $role=Auth::user()->role;

        if($role=="Admin")
    {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'price' => 'required'
        ]);

        return Product::create($request->all());
    }
    else
    {
        return response([
            'message' => 'Forbidden'
        ], 403);
    }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Product::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    { 
        $role=Auth::user()->role;

        if($role=="Admin")
    
    {
        $product = Product::find($id);
        $product->update($request->all());
        return response()->json($product);
    }
    else
    {
        return response([
            'message' => 'Forbidden'
        ], 403);
    }
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { 
        $role=Auth::user()->role;

        if($role=="Admin")
    {
        return Product::destroy($id);
    }
    else
    {
        return response([
            'message' => 'Forbidden'
        ], 403);
    }
    
    }


    

     /**
     * Search for a name
     *
     * @param  str  $name
     * @return \Illuminate\Http\Response
     */
    public function search($name)
    {
        return response()->json(Product::where('name', 'like', '%'.$name.'%')->get());
    }
}
