<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Process;
use App\Models\ProcessTreatment;
use App\Models\Randevu;
use App\Models\Treatment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.user.index');
    }

    public function reviews()
    {
        $comments = Comment::where('user_id', '=', Auth::id())->get();
        return view('home.user.comments', [
            'comments' => $comments,
        ]);
    }

    public function processdetail($id)

    {
       //dd($request);
        $randevu = Randevu::where('user_id', '=', Auth::id())->get();

        $process = Process::find($id);

        $processtreatment = ProcessTreatment::where('user_id', '=', Auth::id())->get();
        return view('home.user.processdetail', [
'randevu'=>$randevu,
            'process' => $process,
            'processtreatment' => $processtreatment
        ]);
    }

    public function processes()
    {
        $data = Process::where('user_id', '=', Auth::id())->get();
        return view('home.user.processes', [
            'data' => $data,
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function reviewdestroy($id)
    {
        $data = Comment::find($id);
        $data->delete();
        return redirect(route('userpanel.reviews'));


    }
    public function canceltreatment($id){
        $data=ProcessTreatment::find($id);
        $data->status='Canceled';
        $data->save();
        return redirect()->back();

    }


}
