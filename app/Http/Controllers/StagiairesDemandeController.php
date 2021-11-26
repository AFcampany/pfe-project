<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Carbon;

use Illuminate\Http\Request;
use App\Models\Stagiaire;
class StagiairesDemandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if($request->input('type') ==1){
            Carbon::setWeekStartsAt(Carbon::SUNDAY);
            Carbon::setWeekEndsAt(Carbon::THURSDAY);
            $stcs=Stagiaire::where('etat_stagiaire', 0)->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();

            
        }elseif($request->input('type') ==2){
            $stcs=Stagiaire::where('etat_stagiaire', 0)->whereYear('created_at', now()->year)->whereMonth('created_at', now()->month)->get();

        }elseif($request->input('type') ==3){
            $stcs=Stagiaire::where('etat_stagiaire', 0)->whereYear('created_at', now()->year)->get();

        }elseif($request->input('type') ==0){
            $stcs=Stagiaire::where('etat_stagiaire', 0)
                ->get();
        }else{
            $stcs=Stagiaire::where('etat_stagiaire', 0)
                ->get();
        }

        /*$stcs=Stagiaire::where('etat_stagiaire', 0)
        ->get();*/

        Session::put('search_url',request()->fullUrl());

        
        return view('agentService/s/listDemandeStagiaire', [
            'stcs'=> $stcs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // return view('agentService/stc/stagiaireFajouter');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stagiaire= Stagiaire::create([
            'nom'=>$request->input('nom'),
            'prenom'=>$request->input('prenom'),
            'date_naissence'=>$request->input('date_naissence'),
            'lieu_naissence'=>$request->input('lieu_naissence'),
            'email'=>$request->input('email'),
            'niveau_scolaire'=>$request->input('niveau_scolaire'),
            'diplome'=>$request->input('diplome')
        ]);
        
        return redirect('/stc');
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
        /*$stc = Stagiaire::find($id);

        return view('agentService/stc/stagiaireFaccepter')->with('stc', $stc);*/
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
        
        $stc= Stagiaire::where('id',$id)
        ->update([
            'nom'=>$request->input('nom'),
            'prenom'=>$request->input('prenom'),
            'date_naissence'=>$request->input('date_naissence'),
            'lieu_naissence'=>$request->input('lieu_naissence'),
            'email'=>$request->input('email'),
            'niveau_scolaire'=>$request->input('niveau_scolaire'),
            'duree_stage'=>$request->input('duree_stage'),
            'periode_de_stage_du'=>$request->input('periode_de_stage_du'),
            'periode_de_stage_au'=>$request->input('periode_de_stage_au'),
            'diplome'=>$request->input('diplome'),
            'etat_stagiaire'=>$request->input('etat_stagiaire'),
            'nom_et_prenom_tuteur'=>$request->input('nom_et_prenom_tuteur'),
            'direction'=>$request->input('direction'),
            'specialite'=>$request->input('specialite'),
            'theme'=>$request->input('theme')
        ]);

        if(session('search_url')){
            return redirect(session('search_url'));
        }

        return redirect('/stc');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /*$stc = Stagiaire::find($id);
        $stc->delete();
        return redirect('/stc');*/
    }
}
