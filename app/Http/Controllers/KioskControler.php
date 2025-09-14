<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Production;
use Illuminate\Http\Request;

class KioskControler extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Product::all();
        return view('welcome', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $production = Production::where('id', $id)->with('product')->first();
        return view('label', compact('production'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function production($id)
    {
        $product = Product::where('id', $id)->first();
        $production = Production::create(
            [
                'product_id' => $product->id,
                'expires_at' => now()->addHours($product->lifetime)
            ]
        );
        return to_route('kiosk.show', ['id' => $production->id]);
    }
}
