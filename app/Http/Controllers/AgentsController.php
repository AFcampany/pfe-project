<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AgentsController extends Controller
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
        
        
        $stc = User::find($id);
        $p=$request->input('password');
        
        if($p == null){
        $user= User::where('id',$id)
        ->update([
            'name'=>$request->input('name'),
            'pre_name'=>$request->input('pre_name'),
            'user_name'=>$request->input('user_name'),
            'direction'=>$request->input('direction'),
            'identifier'=>$request->input('identifier'),
            'email'=>$request->input('email'),
        ]);
        
        }else{
        $user= User::where('id',$id)
        ->update([
            'name'=>$request->input('name'),
            'pre_name'=>$request->input('pre_name'),
            'user_name'=>$request->input('user_name'),
            'direction'=>$request->input('direction'),
            'identifier'=>$request->input('identifier'),
            'email'=>$request->input('email'),
            'password'=>Hash::make($request->input('password'))
        ]);
        }
        if($stc->identifier === '2'){
        return redirect('/s/gerercompt/m');
        }elseif($stc->identifier === '1'){
        return redirect('/s/gerercompt/ad');
        }elseif($stc->identifier === '0'){
            return redirect('/s/gerercompt/as');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stc = User::find($id);
        $stc->delete();

        if($stc->identifier === '2'){
        return redirect('/s/gerercompt/m');
        }elseif($stc->identifier === '1'){
        return redirect('/s/gerercompt/ad');
        }elseif($stc->identifier === '0'){
        return redirect('/s/gerercompt/as');
        }
    }
}
