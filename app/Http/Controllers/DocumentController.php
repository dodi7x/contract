<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\document_field;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use  Auth;
use Illuminate\Support\Facades\DB;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('document');
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


        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:documents|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('document')
                ->withErrors($validator)
                ->withInput();
        }

        // Retrieve the validated input...
        $validated = $validator->validated();

        $document = Document::create(
            [
                'user_id' => Auth::id(),
                'name' => $request->name,
            ]
        );
        if ($document) {
            foreach ($request->fields as $key => $value) {
                DB::table('document_fields')->insert(['field' => $value, 'document_id' => $document->id]);
            }
        }
        return redirect()->back()->withErrors($validator)->withInput();
    }

    public function select(Request $request)
    {
        $document_fields =  document_field::where('document_id', $request->document_id)->get(['id', 'document_id', 'field']);
     //   $document_fields = Customer::where('customer_number', $request->customer_number)->exists();
        return redirect()->back()->with('document_fields' , $document_fields);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $document)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document)
    {
        //
    }
}
