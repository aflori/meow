<?php

namespace App\Http\Controllers;

use App\Models\Meow;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MeowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $meowList = Meow::take(15)->orderBy('content')->get();
        return View("listMeow", ["listComments" => $meowList]);
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
        // $meow = Meow::where('id', $id)->first(); //getting the first element of the list satisfying the condition
        $meow = Meow::find($id);
        $message = $meow['content'];
        return View("MeowDetails", ['idMeow' => $id, 'message' => $message]);
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
