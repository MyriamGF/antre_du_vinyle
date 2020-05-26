<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vinyle;

class VinyleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $vinyle = Vinyle::fake();
        // return view("vinyles.index", ['vinyle' => $vinyle]);

        $vinyles = Vinyle::all();
        return view("vinyles.index", ['vinyles' => $vinyles]);
    }

    public function indexAdmin()
    {
        // $vinyles = Vinyle::fake();
        $vinyles = Vinyle::all();
        return view("articles.index", ['vinyles' => $vinyles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Vinyle $vinyle)
    {
        return view('articles.create', ['vinyle' => $vinyle]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(Vinyle::$regles);
        $donnees = $request->all();
        $vinyle = new Vinyle();
        $vinyle->fill($donnees);
        $vinyle->save();
        return redirect()->action("VinyleController@showAdmin", $vinyle);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Vinyle $vinyle)
    {
        return view("vinyles.show", ['vinyle' => $vinyle]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showAdmin(Vinyle $vinyle)
    {
        return view("articles.show", ['vinyle' => $vinyle]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Vinyle $vinyle)
    {
        return view("articles.edit", ['vinyle' => $vinyle]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vinyle $vinyle)
    {
        $request->validate(Vinyle::$regles);
        $donnees = $request->all();
        $vinyle->fill($donnees);
        $vinyle->save();
        return redirect()->action("VinyleController@showAdmin", $vinyle);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vinyle $vinyle)
    {
        $vinyle->delete();
        return redirect()->action('VinyleController@indexAdmin');
    }
}
