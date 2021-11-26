<?php

namespace App\Http\Controllers;
use App\Models\Apprenti;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;


class ApprentisController extends Controller
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
            $stcs=Apprenti::where('etat_apprenti', 1)->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();

            
        }elseif($request->input('type') ==2){
            $stcs=Apprenti::where('etat_apprenti', 1)->whereYear('created_at', now()->year)->whereMonth('created_at', now()->month)->get();

        }elseif($request->input('type') ==3){
            $stcs=Apprenti::where('etat_apprenti', 1)->whereYear('created_at', now()->year)->get();

        }elseif($request->input('type') ==0){
            $stcs=Apprenti::where('etat_apprenti', 1)
                ->get();
        }else{
            $stcs=Apprenti::where('etat_apprenti', 1)
                ->get();
        }

        $dir=DB::table('users')
        ->select('direction')
        ->where('identifier', 1)
        ->distinct()
        ->get();

      

      Session::put('search_url',request()->fullUrl());


        return view('agentService/p/listApprenti', [
            'stcs'=> $stcs,
            'dirs'=> $dir

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $stc= Apprenti::where('id',$id)->get();
        $id =Auth::user();
        $stc=$stc[0];
        if($stc->diplome == 1){
            $stc->diplome="CFPS";
        }elseif($stc->diplome == 2){
            $stc->diplome="CAP";
        }elseif($stc->diplome == 3){
            $stc->diplome="CMP";
        }elseif($stc->diplome == 4){
            $stc->diplome="BT";
        }elseif($stc->diplome == 5){
            $stc->diplome="BTS";
        }
        //dd($stc->diplome);
        return view('/attestation',[
            'stc'=> $stc,
            'id'=>$id
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
        //dd($request->all());
        $stc= Apprenti::where('id',$id)
        ->update([
            'nom'=>$request->input('nom'),
            'prenom'=>$request->input('prenom'),
            'date_naissence'=>$request->input('date_naissence'),
            'lieu_naissence'=>$request->input('lieu_naissence'),
            'email'=>$request->input('email'),
            'num_tel'=>$request->input('num_tel'),
            'direction'=>$request->input('direction'),
            'niveau_scolaire'=>$request->input('niveau_scolaire'),
            'diplome'=>$request->diplome,
            'etablisement_formation'=>$request->etablisement_formation,
            'duree_stage'=>$request->duree_stage,
            'code_postale'=>$request->input('code_postale'),
            'specialite'=>$request->input('specialite'),
            'nom_et_prenom_tuteur'=>$request->input('nom_et_prenom_tuteur'),
            'periode_de_stage_du'=>$request->input('periode_de_stage_du'),
            'periode_de_stage_au'=>$request->input('periode_de_stage_au'),
            'etat_apprenti'=>$request->input('etat_apprenti')
        ]);
        
        if(session('search_url')){
            return redirect(session('search_url'));
        }


        return redirect('/ap');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stc = Apprenti::find($id);
        $stc->delete();

        if(session('search_url')){
            return redirect(session('search_url'));
        }

        return redirect('/ap');

    }
}
