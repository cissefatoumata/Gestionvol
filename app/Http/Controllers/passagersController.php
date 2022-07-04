<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\passagers;
use App\Models\vols;



class passagersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservation = passagers::all();
    
        return view('passagers.index', compact('reservation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
public function create()
{
    $vol= vols::all();
    return view('passagers.create', compact('vol'));
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
            'nom' => 'required',
            'prenom'=> 'required',
            'sexe' => 'required',
            'type' => 'required|max:255',
            'prix' => 'required',
            'vol_id'=>'required',
        ]);
    
        passagers::create($validatedData);
    
        return redirect('/passagers')->with('success', 'Votre reservation a ete fait avec succèss');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
         public function show($id)
         {
           
                $reservation = passagers::findOrFail($id);
                return view('passagers.show',compact('reservation'));

         }
      
        // public function show($id)
// {
    //return $id;
    // $reservation = passagers::findOrFail($id)->with(['nom','prenom','sexe','type','prix','vol_id'])->get();
    // return view('invoice::invoice');
// }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  
    public function edit($id)

    {
        $vol= vols::all();
        $reservation = passagers::findOrFail($id);
        return view('passagers.edit', compact('reservation') , compact('vol'));
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
                'nom' => 'required',
                'prenom'=> 'required',
                'sexe' => 'required',
                'type' => 'required|max:255',
                'prix' => 'required',
                'vol_id'=>'required',
        ]);
        passagers::whereId($id)->update($validatedData);

        return redirect('/passagers')->with('success', 'la mise à jour de votre reservation est fait avec succèss');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    public function destroy($id)
{
    $reservation = passagers::findOrFail($id);
    $reservation->delete();

    return redirect('/passagers')->with('success', 'votre reservation est supprimer avec succèss');
}
}
