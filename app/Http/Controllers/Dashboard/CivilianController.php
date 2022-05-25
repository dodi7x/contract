<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Civi;
use Illuminate\Http\Request;

class CivilianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $civilians = Civi::all();
        return view('dashboard.civilian.index' ,compact('civilians'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.civilian.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        return $request;

        $rules = [];

        $rules += [
            'name'          => 'required',
            'date_of_birth'          => 'required',
            'id_number'     => ['required', 'integer',  'unique:civis'],
            'address'       => 'required',
            'Profession'    => 'required',
        ];

        $request->validate($rules);
//        return print_r( $request_data = $request->all());
        $request_data = $request->all();
//        if ($request->image){
//            $filePath = "";
//            if ($request->has('image')) {
//                $filePath = uploadImage('products', $request->image);
//            }
//            $request_data['image'] = $filePath;
//        }

        Civi::create($request_data);
        return redirect()->route('dashboard.civilian.index')->with([
            'message'       => __('side.added_successfully'),
            'alert-type'    => 'success']);

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
