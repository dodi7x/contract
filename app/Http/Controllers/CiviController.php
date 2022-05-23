<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Civi;
use App\Models\User;
use Illuminate\Http\Request;
use DB;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\Auth;
class CiviController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
return view('profile');
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
     *unique
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *///$civi=Civi::where('name',$request->input('name'))->first();
    public function store(Request $request)
    {
  
        $civi = User::where('customer_number', $request->customer_number)->exists();  

if (!$civi)
 {
    return redirect()->back()->withErrors('dosn,t exsist');
 
}
       

return view('profile');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Civi  $civi
     * @return \Illuminate\Http\Response
     */
    public function show(Civi $civi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Civi  $civi
     * @return \Illuminate\Http\Response
     */
    public function edit(Civi $civi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Civi  $civi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Civi $civi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Civi  $civi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Civi $civi)
    {
        //
    }

     

}




