<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Form::get();

        return response()->json([
            'message'=>'List Of All Patients Info',
            'data'=> $data
        ],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newdata = new Form;
        $newdata->ptname = $request->ptname;
        $newdata->age = $request->age;
        $newdata->dname = $request->dname;
        $newdata->refby = $request->refby;
        $newdata->test = $request->test;
        $newdata->amttotal = $request->amttotal;
        $newdata->amtpaid = $request->amtpaid;
        $newdata->amtonline = $request->amtonline;
        $newdata->amtcash = $request->amtcash;
        $newdata->amtdue = $request->amtdue;
        $newdata->rcless = $request->rcless;
        $newdata->save();

        return response()->json([
            'message'=>'New Patients Info Created',
            'newdata'=> $newdata
        ],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Form $form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Form $form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Form $form)
    {
        //
    }
}
