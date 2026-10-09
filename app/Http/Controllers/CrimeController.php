<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use resources\views;
class CrimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "Crime controller ";
        #return view('Crime');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('newCrime');
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
        return view('Crime');
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
        return view('updateCrime');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
