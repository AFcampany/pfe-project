<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use App\Models\Apprenti;
use App\Models\Stagiaire;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

use Illuminate\Support\Facades\Session;


class homeController extends Controller
{

    public function searshe (){

        //$r = request()->query('recherche');
        $r = request()->input('recherche');
        $p = explode(" ", $r);

      //dd(count($p));

        $dir=DB::table('users')
        ->select('direction')
        ->where('identifier', 1)
        ->distinct()
        ->get();

        if(count($p) == 1){

            $aps=Apprenti::where('etat_apprenti', 1)
            ->where(function (Builder $query) {
                $r = request()->input('recherche');
                $p = explode(" ", $r);
                return $query->where('nom','LIKE', "%{$p[0]}%")
                            ->orWhere('prenom','LIKE', "%{$p[0]}%");
            })
            ->get();

            $a[0]=$aps->isNotEmpty();
            //dd($a);
            
        }else if(count($p)==2){

            $aps=Apprenti::where('etat_apprenti', 1)
            ->where(function (Builder $query) {
                $r = request()->input('recherche');
                $p = explode(" ", $r);
                return $query->where('nom','LIKE', "%{$p[0]}%")
                            ->orWhere('prenom','LIKE', "%{$p[1]}%");
            })
            ->get();

            $a[0]=$aps->isNotEmpty();

        }else{
            $aps=Apprenti::where('etat_apprenti', 1)->get();
        }



        if(count($p) == 1){

            $sts=Stagiaire::where('etat_stagiaire', 1)
            ->where(function (Builder $query) {
                $r = request()->input('recherche');
                $p = explode(" ", $r);
                return $query->where('nom','LIKE', "%{$p[0]}%")
                            ->orWhere('prenom','LIKE', "%{$p[0]}%");
            })
            ->get();
            $a[1]=$sts->isNotEmpty();

        }else if(count($p)==2){

            $sts=Stagiaire::where('etat_stagiaire', 1)
            ->where(function (Builder $query) {
                $r = request()->input('recherche');
                $p = explode(" ", $r);
                return $query->where('nom','LIKE', "%{$p[0]}%")
                            ->orWhere('prenom','LIKE', "%{$p[1]}%");
            })
            ->get();
            $a[1]=$sts->isNotEmpty();

        }else{
            $sts=Stagiaire::where('etat_stagiaire', 1)->get();
        }
//etat en attent----->



        if(count($p) == 1){

            $apcs=Apprenti::where('etat_apprenti', 0)
            ->where(function (Builder $query) {
                $r = request()->input('recherche');
                $p = explode(" ", $r);
                return $query->where('nom','LIKE', "%{$p[0]}%")
                            ->orWhere('prenom','LIKE', "%{$p[0]}%");
            })
            ->get();

            $a[2]=$apcs->isNotEmpty();

        }else if(count($p)==2){

            $apcs=Apprenti::where('etat_apprenti', 0)
            ->where(function (Builder $query) {
                $r = request()->input('recherche');
                $p = explode(" ", $r);
                return $query->where('nom','LIKE', "%{$p[0]}%")
                            ->orWhere('prenom','LIKE', "%{$p[1]}%");
            })
            ->get();
            $a[2]=$apcs->isNotEmpty();

        }else{
            $apcs=Apprenti::where('etat_apprenti', 0)->get();
        }



        if(count($p) == 1){

            $stcs=Stagiaire::where('etat_stagiaire', 0)
            ->where(function (Builder $query) {
                $r = request()->input('recherche');
                $p = explode(" ", $r);
                return $query->where('nom','LIKE', "%{$p[0]}%")
                            ->orWhere('prenom','LIKE', "%{$p[0]}%");
            })
            ->get();
            $a[3]=$stcs->isNotEmpty();

        }else if(count($p)==2){

            $stcs=Stagiaire::where('etat_stagiaire', 0)
            ->where(function (Builder $query) {
                $r = request()->input('recherche');
                $p = explode(" ", $r);
                return $query->where('nom','LIKE', "%{$p[0]}%")
                            ->orWhere('prenom','LIKE', "%{$p[1]}%");
            })
            ->get();
            $a[3]=$stcs->isNotEmpty();

        }else{
            $stcs=Stagiaire::where('etat_stagiaire', 0)->get();
        }


        //etate fin de stage


        if(count($p) == 1){

            $apfs=Apprenti::where('etat_apprenti', 3)
            ->where(function (Builder $query) {
                $r = request()->input('recherche');
                $p = explode(" ", $r);
                return $query->where('nom','LIKE', "%{$p[0]}%")
                            ->orWhere('prenom','LIKE', "%{$p[0]}%");
            })
            ->get();
            $a[4]=$apfs->isNotEmpty();

            
        }else if(count($p)==2){

            $apfs=Apprenti::where('etat_apprenti', 3)
            ->where(function (Builder $query) {
                $r = request()->input('recherche');
                $p = explode(" ", $r);
                return $query->where('nom','LIKE', "%{$p[0]}%")
                            ->orWhere('prenom','LIKE', "%{$p[1]}%");
            })
            ->get();
            $a[4]=$apfs->isNotEmpty();

        }else{
            $apfs=Apprenti::where('etat_apprenti', 3)->get();
        }



        if(count($p) == 1){

            $stfs=Stagiaire::where('etat_stagiaire', 3)
            ->where(function (Builder $query) {
                $r = request()->input('recherche');
                $p = explode(" ", $r);
                return $query->where('nom','LIKE', "%{$p[0]}%")
                            ->orWhere('prenom','LIKE', "%{$p[0]}%");
            })
            ->get();
            $a[5]=$stfs->isNotEmpty();

        }else if(count($p)==2){

            $stfs=Stagiaire::where('etat_stagiaire', 3)
            ->where(function (Builder $query) {
                $r = request()->input('recherche');
                $p = explode(" ", $r);
                return $query->where('nom','LIKE', "%{$p[0]}%")
                            ->orWhere('prenom','LIKE', "%{$p[1]}%");
            })
            ->get();
            $a[5]=$stfs->isNotEmpty();

        }else{
            $stfs=Stagiaire::where('etat_stagiaire', 3)->get();
        }
//dd($a);
        Session::put('search_url',request()->fullUrl());

        return view('saershview', [

            'sts'=> $sts,
            'aps'=> $aps,
            'apcs'=> $apcs,
            'stcs'=> $stcs,
            'apfs'=> $apfs,
            'stfs'=> $stfs,

            'dirs'=> $dir,

            'a'=> $a

        ]);

    }
     


    public function index (){
        
        $id =Auth::user()->identifier;
        if($id === "0"){
            return redirect('/as/home');
        }elseif($id === "1"){
            return redirect('/agd');
            

        }elseif($id === "2"){
            return redirect('/med');
           

        }elseif($id === "3"){
            return redirect('/s/home');

        }else{
            return 'error';
        }  
    }

    public function regist (){

        $id = DB::table('users')->latest('updated_at')->first();
        //$id =User::user()->identifier;
        $id=$id->identifier;

        if($id === "0"){
            return redirect('/s/gerercompt/as');
        }elseif($id === "1"){

            return redirect('/s/gerercompt/ad');

        }elseif($id === "2"){

            return redirect('/s/gerercompt/m');

        }elseif($id === "3"){
            return redirect('/s/home');

        }else{
            return 'error';

        }  
    }

  /*  public function attestation (){
        
        return view('attestation');
    }*/

    public function indexS (){
        
        return view('superviseur/home');
    }

    public function indexAs (){
        
        return view('agentService/agentServiceHome');
    }
    

    public function indexSGas (){

        $stcs=User::where('identifier', 0)
        ->get();
        
        return view('superviseur/agentservicecompt', [
            'stcs'=> $stcs
        ]);
        
    }

    public function indexSGad (){

        $dir=DB::table('users')
        ->select('direction')
        ->where('identifier', 1)
        ->distinct()
        ->get();
        
        $stcs=User::where('identifier', 1)
        ->get();
        
        return view('superviseur/agentdirectioncompt', [
            'stcs'=> $stcs,
            'dirs'=> $dir

        ]);
        
    }

    public function indexSGm (){

        $stcs=User::where('identifier', 2)
        ->get();
        
        return view('superviseur/medecincompt', [
            'stcs'=> $stcs
        ]);
        
    }

    






    

    public function indexAD (){
        
            
        return view('agentd');
    } 
    public function indexM (){
        

        return view('medcin');
    }

    public function compt (){
        
        return view('agentService/gdc/ajouterAouM');
    }

    


     

   
    

    public function medecin (){

        $stcs=User::where('identifier', 2)
        ->get();
        
        return view('agentService/compteMT', [
            'stcs'=> $stcs
        ]);
    }  

   
    public function agent_D (){
        $stcs=User::where('identifier', 1)
        ->get();
        
        return view('agentService/compteAT', [
            'stcs'=> $stcs
        ]);
        
    }    
}
