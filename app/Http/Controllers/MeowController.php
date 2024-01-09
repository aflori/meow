<?php

namespace App\Http\Controllers;

// use App\Models\meows;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MeowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return View("listMeow");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /*
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
        return View("MeowDetails", ['idMeow' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $meows)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $meows)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $meows)
    {
        //
    }

}
