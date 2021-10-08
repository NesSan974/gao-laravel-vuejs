<?php

namespace App\Http\Controllers;

use App\Models\Ordinateur;
use App\Models\Attribution;
use Illuminate\Http\Request;

use App\Http\Resources\Ordinateur as RessourceOrdinateur;

class OrdinateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $val = $request->validate([
            'date' => 'required'
        ]);


        // $ord =  Attribution::join('ordinateurs', 'attributions.ordinateur_id', '=', 'ordinateurs.id')
        // ->where('date' , $val['date'])
        // ->get();


        $ord = Ordinateur::with(['attributions' => function ($req) use ($val) {
            $req->where('date', '=', $val['date'])
                ->with('client');
        }])->get();




        return RessourceOrdinateur::collection($ord);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $val = $request->validate([
            'newOrd' => 'required'
        ]);

        $addOrd = new Ordinateur();

        $addOrd->nom = $val['newOrd'];

        $addOrd->save();

        return new RessourceOrdinateur($addOrd);  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ordinateur  $ordinateur
     * @return \Illuminate\Http\Response
     */
    public function show(Ordinateur $ordinateur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ordinateur  $ordinateur
     * @return \Illuminate\Http\Response
     */
    public function edit(Ordinateur $ordinateur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ordinateur  $ordinateur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ordinateur $ordinateur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ordinateur  $ordinateur
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $r  = Ordinateur::find($id);
        Ordinateur::destroy($id);
        return new RessourceOrdinateur($r);
    }
}
