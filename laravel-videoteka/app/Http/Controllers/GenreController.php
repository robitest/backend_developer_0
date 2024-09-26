<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genres = Genre::all();
        return view('admin.genres.index', ['genres' => $genres]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.genres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Genre $genre)
    {
        dd('Rabi ciniti');
    }

    /**
     * Display the specified resource.
     */
    public function show(Genre $genre)
    {
        return view('admin.genres.show', ['genre' => $genre]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genre $genre)
    {
        return view('admin.genres.edit', ['genre' => $genre]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        dd('Rabi ciniti');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        dd('Rabi ciniti');
    }
}
