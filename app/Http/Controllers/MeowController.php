<?php

namespace App\Http\Controllers;

use App\Models\Meow;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Gate;
// use Illuminate\Support\Facades\Auth;

class MeowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Gate::allows('meows-access')) {
            $meowList = Meow::take(15)->get();
            return View("listMeow", ["listComments" => $meowList]);
        }
        return redirect('/');
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
    public function show(Request $request, string $id)
    {
        if(Gate::allows('meows-access')) {
            $meow = Meow::find($id);
            $message = $meow->content;
            //call to 'seeMeows' policies associated to model Meow
            if ($request->user()->cannot('seeMeows', $meow)) {
                $message = "Unavailable service";
            }
            return View("MeowDetails", ['idMeow' => $id, 'message' => $message]);
        }
        return redirect('/');
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
