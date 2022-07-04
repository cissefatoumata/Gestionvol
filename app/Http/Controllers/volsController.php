<?php
// CarController.php


namespace App\Http\Controllers;

use App\Models\vols;
use Illuminate\Http\Request;


class volsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $vols = vols::all();
    
        return view('vols.index', compact('vols'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vols.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

public function store(Request $request)
{
    $validatedData = $request->validate([
        'code' => 'required',
        'date_depart' => 'required',
        'heure_depart' => 'required',
        'place_affaire' => 'required',
        'place_business' => 'required',
        'prix_affaire' => 'required',
        'prix_business' => 'required',
    ]);
    
    $vol = vols::create($validatedData);
    
    return redirect('/vols')->with('success', 'Voiture créer avec succèss');
}



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $vol = vols::findOrFail($id);
        return view('vols.show',compact('vol'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $vol =vols::findOrFail($id);

    return view('vols.edit', compact('vol'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'code' => 'required',
        'date_depart' => 'required',
        'heure_depart' => 'required',
        'place_affaire' => 'required',
        'place_business' => 'required',
        'prix_affaire' => 'required',
        'prix_business' => 'required',
    ]);

    vols::whereId($id)->update($validatedData);

    return redirect('/vols')->with('success', 'la mise à jour de votre reservation est fait avec succèss');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
public function destroy($id)
{
    $vol = vols::findOrFail($id);
    $vol->delete();

    return redirect('/vols')->with('success', 'Vol supprimer avec succèss');
}
}