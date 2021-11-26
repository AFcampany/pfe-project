<?php

namespace App\Http\Controllers;
use App\Models\Apprenti;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Carbon;

use Illuminate\Http\Request;

class ApprentisRController extends Controller
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
            $stcs=Apprenti::where('etat_apprenti', 2)->whereBetween('updated_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();

            
        }elseif($request->input('type') ==2){
            $stcs=Apprenti::where('etat_apprenti', 2)->whereYear('updated_at', now()->year)->whereMonth('updated_at', now()->month)->get();

        }elseif($request->input('type') ==3){
            $stcs=Apprenti::where('etat_apprenti', 2)->whereYear('updated_at', now()->year)->get();

        }elseif($request->input('type') ==0){
            $stcs=Apprenti::where('etat_apprenti', 2)
                ->get();
        }else{
            $stcs=Apprenti::where('etat_apprenti', 2)
                ->get();
        }

        /*$stcs=Apprenti::where('etat_apprenti', 2)
        ->get();*/
        
        Session::put('search_url',request()->fullUrl());

        return view('agentService/p/listApprentiRefeser', [
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
        $stc= Apprenti::where('id',$id)
        ->update([
            'etat_apprenti'=>$request->input('etat_apprenti')
        ]);

        if(session('search_url')){
            return redirect(session('search_url'));
        }
        
        return redirect('/apc');
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
        return redirect('/apr');

        if(session('search_url')){
            return redirect(session('search_url'));
        }
    }
}
