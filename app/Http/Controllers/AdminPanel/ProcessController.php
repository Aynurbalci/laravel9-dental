<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Process;
use App\Models\ProcessTreatment;
use Illuminate\Http\Request;

class ProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
    {
       $data=Process::where('status',$slug)->get();
       return view('admin.process.index',[
           'data'=>$data
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
        $data=Process::find($id);
        $datalist=ProcessTreatment::where('process_id',$id)->get();
        return view('admin.process.show',[
           'data'=>$data,
           'datalist'=>$datalist
        ]);
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
        //dd($request);
        $data=Process::find($id);
        $data->status=$request->status;
        $data->note=$request->note;
        $data->save();
        return redirect()->route('admin.process.show',['id'=>$id]);
    }
    public function cancelprocess($id){
        $data=Process::find($id);
        $data->status='Canceled';
        $data->save();
        return redirect()->back();

    }
    public function canceltreatment($id){
        $data=ProcessTreatment::find($id);
        $data->status='Canceled';
        $data->save();
        return redirect()->back();

    }
    public function accepttreatment($id){
        $data=ProcessTreatment::find($id);
        $data->status='Accepted';
        $data->save();
        return redirect()->back();

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
