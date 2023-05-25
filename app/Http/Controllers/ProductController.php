<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $restaurant_id = Restaurant::all()->pluck('id')->all();

        $products = Product::all();

        return view('products.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        // dd($request->all());

        $data = $request->validate([
            'name' => 'required|max:50',
            'ingredient' => 'required',
            'price' => 'required',
            'thumb' => 'required|image',
            'visible' =>'required',
            'restaurant_id' => 'exists:restaurants,id',
        ]);

        $restaurant_id = Auth::user()->restaurants()->first();

        $data['restaurant_id'] = $restaurant_id->id;

        if ($request->hasFile('thumb')) {
            $image = Storage::put('uploads', $data['thumb']);
        }

        $new_product = Product::create($data);

        return to_route('restaurants.index', $new_product);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $data = $request->validate([
            'name' => 'required|max:50',
            'ingredient' => 'required',
            'price' => 'required',
            'thumb' => 'required',
            'visible' =>'required',
            'restaurant_id' => 'exists:restaurants,id',
        ]);


        $product->update($data);

        return to_route('restaurants.index', $product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return to_route('restaurants.index');
    }
}
