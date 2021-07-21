<?php

namespace App\Http\Controllers;

use App\Comix;
use Illuminate\Http\Request;

class ComixController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comixes = Comix::orderBy('id', 'DESC')->paginate(8);

        return view("comixes.index", compact('comixes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comixes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $comic = new Comix();

        $comic->fill($data);

        $comic->save();

        return redirect()
            ->route('comixes.show', $comic->id)
            ->with('message', "Comic added succesfully");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comix $comix)
    {
        return view("comixes.show", compact('comix'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comix $comix)
    {
        return view("comixes.edit", compact('comix'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comix $comix)
    {
        $data = $request->all();

        $comix->update($data);

        return redirect()
        ->route('comixes.show', $comix->id)
        ->with('message', "Comic updated succesfully!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comix $comix)
    {
        $comix->delete();
        return redirect()
            ->route('comixes.index')
            ->with('deleted', "Comic deleted succesfully");
    }
}
