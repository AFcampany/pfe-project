<?php

namespace App\Http\Controllers;
use App\Models\Pointage;
use App\Models\User;
use Illuminate\Support\Facades\Session;

use App\Models\Paie;
use Illuminate\Support\Facades\Auth;
use App\Models\Apprenti;

use Illuminate\Http\Request;

class PaieController extends Controller
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
        $stagiaire= Paie::create([
            'pointage_id'=>$request->input('id_pointage'),
            'apprenti_id'=>$request->input('id_apprenti'),
            'agent_id'=>$request->input('id_agent'),

            'paie_de_base'=>$request->input('paie_de_base'),
            'pourcentage'=>$request->input('pourcentage'),
            'semester'=>$request->input('semester'),
            'montant'=>$request->input('montant'),
            
        ]);

        if(session('search_url')){
            return redirect(session('search_url'));
        }

        return redirect('/ap');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $stc = Apprenti::find($id);
        $agd= User::where('identifier','1')->get();
        $p = Pointage::where('apprenti_id',$id)->get();

        
        return view('agentService/paieList',[
            'stcs'=>$stc,
            'ps'=>$p,
            'agds'=>$agd
        ]);
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
