<?php

namespace App\Http\Controllers;
use App\Models\Apprenti;

use Illuminate\Http\Request;

class medecinHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stcs=Apprenti::where('etat_apprenti', 0)->where('avis', 0)
        ->get();
        
        return view('medecin/homeMedecin', [
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

 
        $stc = Apprenti::find($id);
        $p=$request->input('observation');
        
        if($p == null){
        $apprenti= Apprenti::where('id',$id)
        ->update([
            'avis'=>$request->avis
        ]);
        
        }else{
        $apprenti= Apprenti::where('id',$id)
        ->update([
            'avis'=>$request->avis,
            'observation'=>$request->input('observation')
          ]);
        }
       

        return redirect('/med');
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
