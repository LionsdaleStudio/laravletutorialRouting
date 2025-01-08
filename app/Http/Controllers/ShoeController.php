<?php

namespace App\Http\Controllers;

use App\Models\Shoe;
use App\Http\Requests\StoreShoeRequest;
use App\Http\Requests\UpdateShoeRequest;

class ShoeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shoes = Shoe::all()->where("quantity", "<", 5);
        return view("shoes.index", ["shoes" => $shoes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "Ez majd egy FORM-ot mutató oldal, cipő létrehozására.";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreShoeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Shoe $shoe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Shoe $shoe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateShoeRequest $request, Shoe $shoe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Shoe $shoe)
    {
        //
    }

    public function review()
    {
        return "I make reviews here";
    }
}
