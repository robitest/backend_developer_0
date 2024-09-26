<?php

namespace App\Http\Controllers;

use App\Http\Requests\PriceRequest;
use App\Http\Requests\PriceUpdateRequest;
use App\Models\Price;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prices = Price::all();

        return view('admin.prices.index', [ 'prices' => $prices ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.prices.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PriceRequest $request)
    {
        $format = Price::create([
            'type' => $request->type,
            'price' => $request->price,
            'late_fee' => $request->late_fee,
        ]);

        Price::create($format);

        return redirect()->route('prices.index')->with('succses', 'Uspješno kreirana nova cijena');
    }

    /**
     * Display the specified resource.
     */
    public function show(Price $price)
    {
        return view('admin.prices.show', ['price' => $price]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Price $price)
    {
        return view('admin.prices.edit', ['price' => $price]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PriceUpdateRequest $request, Price $price)
    {
        $data = Price::create([
            'type' => $request->type,
            'price' => $request->price,
            'late_fee' => $request->late_fee,
        ]);

        $price->update(['data' => $data]);

        return redirect()->route('prices.index')->with('success', 'Uspješno izmijenjena cijena ' . $data['type']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Price $price)
    {
        $type = $price->type;
        $price->delete();
        return redirect()->back()->with('success', 'Uspješno obisana cijena ' . $type);
    }
}
