<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use App\Models\type_contract;
use App\Models\User;
use DB;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//$result = DB::table()->checkdate();
return view('type');
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
     
      

       

      //  DB::beginTransaction();

     //   try {
      



            $data = new type_contract([
           // 'type_contracts_id' => $request->get('type_contracts_id'),
            'plate_number' =>  $request->get('plate_number'),
            'chassis_number' => $request->get('chassis_number')
            
        ]);
        $data->save();
                
            
            $cunt = new Contract([
            'contract_number'=> $request->get('contract_number'),
            'type_contracts_id' => $request->get('type_contracts_id'),
          //  'user_id' =>   $request->get('user_id')
        //  $request->all(),

        ]);

        $cunt->save(); 

            return redirect('type')->with('success', 'type Data Updated');
       //     DB::commit();
        //} catch (\Exception $e) {

          //  DB::rollback();
        //throw $e;
            // Handle errors
        //} 
    /*    $validated = request()->validate([ //validating all data
            'plate_number' => ['required', 'string', 'min:2', 'max:50'],
            'chassis_number' => ['required', 'min:11' , 'max:11'],
            'contract_number'=> ['required', 'min:2' , 'max:2'],
          //  'the_age'=> ['required' ,'min:2' , 'max:2']
        ]);
   $type = type_contract::where('type_contracts_id');

   $type->create([
    'plate_number' => $validated['plate_number'],
    'chassis_number' => $validated['chassis_number'],
   ]);*/
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function show(Contract $contract)
    {
      //  return view('xxx',compact('proe'));
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function edit(Contract $contract)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contract $contract)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contract $contract)
    {
        //
    }
}
