<?php

namespace App\Http\Controllers;

use App\Models\userModel;
use Illuminate\Http\Request;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('crud.form');
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mymodel = new userModel();
        $request->validate([
            'name'=>'required',
            'phone_no'=>'required',
            'email'=>'required',
            'job_title'=>'required',
            'job_salary'=>'required'
        ]);
        $mymodel->name = $request->input('name');
        $mymodel->phone_no = $request->input('phone_no');
        $mymodel->email = $request->input('email');
        $mymodel->job_title = $request->input('job_title');
        $mymodel->job_salary = $request->input('job_salary');
        $query = $mymodel->save();
        if($query){
            return back()->with('Success','Record Added Successfully.');
        }
        else{
            return back()->with('Fail','Something went wrong.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\userModel  $userModel
     * @return \Illuminate\Http\Response
     */
    public function show(userModel $userModel)
    {
        $mydata = $userModel::all();
        return view('crud.view_records',['mydata'=>$mydata]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\userModel  $userModel
     * @return \Illuminate\Http\Response
     */
    public function edit(userModel $userModel,$id)
    {
        $edit_data = $userModel::find($id);
        return view('crud.update_record',['edit_data'=>$edit_data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\userModel  $userModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, userModel $userModel,$id)
    {
        $mymodel = $userModel::find($id);
        $mymodel->name = $request->input('name');
        $mymodel->phone_no = $request->input('phone_no');
        $mymodel->email = $request->input('email');
        $mymodel->job_title = $request->input('job_title');
        $mymodel->job_salary = $request->input('job_salary');
        $mymodel->save();
        return redirect('show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\userModel  $userModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(userModel $userModel,$id)
    {   
        $delete_user = $userModel::find($id);
        $delete_user->delete();
        return redirect('show');
    }
}