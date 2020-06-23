<?php

namespace App\Http\Controllers;

use App\Suivi;
use Illuminate\Http\Request;

class SuiviController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Suivi  $suivi
     * @return \Illuminate\Http\Response
     */
    public function show(Suivi $suivi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Suivi  $suivi
     * @return \Illuminate\Http\Response
     */
    public function edit(Suivi $suivi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Suivi  $suivi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Suivi $suivi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Suivi  $suivi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Suivi $suivi)
    {
        //
    }

    public function getLastVirement() {
        $suivis = Suivi::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->limit(1)->get();
        return $suivis;
    }

    public function codeSuivi() {
        request()->validate([
            'numero'=> ['required', 'string', 'max:255'],
        ]);
        $suivis = Suivi::where('user_id',auth()->user()->id)->where('numero', '=', request('numero'))->first();
            //dd($suivi);

        if($suivis){
            return view('front.tablesuivis', compact('suivis'));
        }
        if($suivis == null){
        return redirect()->back()->withInput()->withErrors([
            'numero' => 'rtyu']);
        }
        
        
    }
}
