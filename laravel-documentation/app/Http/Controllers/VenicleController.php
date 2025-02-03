<?php

namespace App\Http\Controllers;

use App\Models\Venicle;
use Illuminate\Http\Request;

class VenicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $venicles = Venicle::latest()->paginate(3);
        $count = Venicle::all();

        return view('venicles', compact('venicles', 'count'));
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
    public function show(Venicle $venicle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Venicle $venicle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Venicle $venicle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Venicle $venicle)
    {
        //
    }
}
