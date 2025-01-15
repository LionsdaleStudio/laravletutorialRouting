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
        // Database query builder a dokumentációban
        // Eloquent menü
        $shoes = Shoe::all();
        return view("shoes.index", ["shoes" => $shoes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("shoes.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreShoeRequest $request)
    {
        //Shoe::create($request->all());

        //Személyre szabhatóbb mentés

        $limited = ($request->limited == "true" ) ? 1 : 0;

        $newShoe = Shoe::create([
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'limited' => $limited,

        ]);

        /* $newShoe->save(); */

        /* Visszairányít oda, ahonnan jöttél */
        return back()->with("success", "{$newShoe->name} was created.");

        /* Máshova irányt vissza */
        //return redirect("shoes.index");


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
        return view("shoes.edit", ["shoe" => $shoe]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateShoeRequest $request, Shoe $shoe)
    {
        /* Ami a kéréssel jön az frissül. */
        $shoe->update($request->all());

        //Manuálisan megadom hogy mi frissüljön mire.
        /* $shoe->name = "Valami";
        $shoe->update(); */

        return redirect(route("shoes.index"))->with("success", "Shoe edited successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Shoe $shoe)
    {
        $shoe->delete();
        return redirect(route("shoes.index"))->with("success", "Shoe deleted successfully.");

    }

    public function review()
    {
        return "I make reviews here";
    }
}
