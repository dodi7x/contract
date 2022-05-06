<?php

namespace App\Http\Controllers;

use App\Models\Civi;
use Illuminate\Http\Request;

class SevedeleteController extends Controller
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
      //  Civi::create([
         
        //    'name' => 'Allie Goodman',
      //      'date' => '9/7/1980',
      //      'id_number' => '18330407228',
     //       'address' => 'Atbara',
    ///        'Profession' => 'Lawyer',
// ]);
          /*  $Civi = new civi;
            $Civi->name = $request->input('name');
            $Civi->date = $request->input('date');
            $Civi->id_number = $request->input('id_number');
            $Civi->address = $request->input('address');
            $Civi->Profession = $request->input('Profession');
            $Civi->save();
            return redirect()->back()->with('status','Student Added Successfully');
*/
       
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
