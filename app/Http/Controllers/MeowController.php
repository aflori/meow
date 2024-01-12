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
    public function create(Request $request): string
    {
        $request->validate([
            'content' => 'required|max:300',
            'creation_date' => 'required',
            'modification_date' => 'required',
            'user_id' => 'required'
        ]);

        $newElement = new Meow;
        $newElement->content = $request->content;
        $newElement->creation_date = $request->creation_date;
        $newElement->modification_date = $request->modification_date;
        $newElement->user_id = $request->user_id;

        $newElement->save();
        // dd($newElement->toArray());
        return response()->json($newElement->toArray(), 201);
    }

    /*
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        var_dump($request);
        return "store";
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Meow $meow)
    {
        if(Gate::allows('meows-access')) {
            // $meow = Meow::find($id);
            $message = $meow->content;
            //call to 'seeMeows' policies associated to model Meow
            if ($request->user()->cannot('seeMeows', $meow)) {
                $message = "Unavailable service";
            }
            return response()->json([
                "message" => 'aaaa'
            ]);
            // return View("MeowDetails", ['idMeow' => $meow->id, 'message' => $message]);
        }
        return csrf_token();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $meows)
    {
        var_dump($request);
        return "edit";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Meow $meow)
    {
        $request->validate([
            'content' => 'required|max:300',
            'creation_date' => 'required',
            'modification_date' => 'required',
            'user_id' => 'required'
        ]);

        $meow->content = $request->content;
        $meow->creation_date = $request->creation_date;
        $meow->modification_date = $request->modification_date;
        $meow->user_id = $request->user_id;

        $meow->save();
        // dd($meow->toArray());
        return response()->json($meow->toArray(), 202);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Meow $meow)
    {
        // var_dump($request);
        $meow->delete();
        return response()->json($meow->toArray());
    }

}
