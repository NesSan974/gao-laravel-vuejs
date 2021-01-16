<?php

namespace App\Http\Controllers;

use App\Models\Attribution;
use Illuminate\Http\Request;

use App\Http\Resources\Attribution as RessourceAttribution;


class AttributionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $r =  Attribution::all();

        return RessourceAttribution::collection($r);
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
            'client_id' => 'required',
            'ordinateur_id' => 'required',
            'date' => 'required',
            'horraire' => 'required',
        ]);

        $addAtt = new Attribution();

        $addAtt->client_id = $val['client_id'];
        $addAtt->ordinateur_id = $val['ordinateur_id'];
        $addAtt->date = $val['date'];
        $addAtt->horraire = $val['horraire'];

        $addAtt->save();

        return new RessourceAttribution($addAtt);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Attribution  $attribution
     * @return \Illuminate\Http\Response
     */
    public function show(Attribution $attribution)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Attribution  $attribution
     * @return \Illuminate\Http\Response
     */
    public function edit(Attribution $attribution)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Attribution  $attribution
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attribution $attribution)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attribution  $attribution
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $r  = Attribution::find($id);
        Attribution::destroy($id);
        return new RessourceAttribution($r);
    }
}
