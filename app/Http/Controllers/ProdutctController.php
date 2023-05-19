<?php

namespace App\Http\Controllers;

use App\Models\Produtct;
use App\Http\Requests\StoreProdutctRequest;
use App\Http\Requests\UpdateProdutctRequest;

class ProdutctController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProdutctRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProdutctRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produtct  $produtct
     * @return \Illuminate\Http\Response
     */
    public function show(Produtct $produtct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produtct  $produtct
     * @return \Illuminate\Http\Response
     */
    public function edit(Produtct $produtct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProdutctRequest  $request
     * @param  \App\Models\Produtct  $produtct
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProdutctRequest $request, Produtct $produtct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produtct  $produtct
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produtct $produtct)
    {
        //
    }
}
