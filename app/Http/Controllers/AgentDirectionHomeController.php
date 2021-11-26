<?php

namespace App\Http\Controllers;
use App\Models\Apprenti;
use App\Models\Pointage;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AgentDirectionHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id =Auth::user();
        $stcs=Apprenti::where('etat_apprenti', 1)
        ->get();
        
        return view('agentDirection/agentDirectionHome', [
            'stcs'=> $stcs,
            'id'=> $id
        ]);
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
        

        $stagiaire= Pointage::create([
            'apprenti_id'=>$request->input('id_apprenti'),
            'agent_id'=>$request->input('id_agent'),
            'nbr_absence'=>$request->input('nbr_absence'),
            'period'=>$request->input('period'),
            
        ]);
        return redirect('/agd');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
