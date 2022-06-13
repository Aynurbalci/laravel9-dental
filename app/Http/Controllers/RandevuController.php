<?php

namespace App\Http\Controllers;

use App\Models\Process;
use App\Models\ProcessTreatment;
use App\Models\Randevu;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class RandevuController extends Controller
{
    public static function countRandevu()
    {
        return Randevu::where('user_id', Auth::id())->count();
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $doctors = User::whereHas('roles', function ($q) {
            $q->whereIn('roles.name', ['doctor']);
        })->get();
        $data = Randevu::where('user_id', '=', Auth::id())->get();
        return view('home.user.randevu', [
            'data' => $data,
            'doctors' => $doctors,
            'users' => $users
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
        //dd($request);
        $id = $request->id;
        $data = new Randevu();
        $data->user_id = Auth::id();
        $data->treatment_id = $id;
        $data->IP = request()->IP();
        $data->dentist_id = $request->input('dentist_id');
        $data->date = $request->input('date');
        $data->time = $request->input('time');
        $data->save();
        return redirect()->back()->with('info', 'Treatment added to Randevus');
    }
    public function processcomplete(){
        return view('home.user.processcomplete');
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
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function process(Request $request)
    {

        return view("home.user.process", [
            'total' => $request->total
        ]);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function storeprocess(Request $request)
    {
        #get credit card information send to bank webservice if everything is ok next
        $cardcheck = "True"; //Assume we send credit card inf. to bank then we get result


        if ($cardcheck =='True') {

            $data = new Process();
            $data->name = $request->input('name');
            $data->adress = $request->input('adress');
            $data->email = $request->input('email');
            $data->phone = $request->input('phone');
            $data->total = $request->input('total');
            $data->user_id = Auth::id();
            $data->IP = $_SERVER['REMOTE_ADDR'];
            $data->save();
            $datalist = Randevu::where('user_id', Auth::id())->get();
            foreach ($datalist as $rs) {
                $data2 = new ProcessTreatment();
                $data2->user_id = Auth::id();
                $data2->treatment_id = $rs->treatment_id;
                $data2->dentist_id = $rs->dentist_id;
                $data2->process_id = $data->id;
                $data2->price = $rs->treatment->price;

                $data2->payment = $data->total;
                $data2->randevu_id=$rs->id;

                $data2->save();
            }
            $data3 = Randevu::where('user_id', Auth::id());
            $data3->delete();
            return redirect()->route('randevu.processcomplete')->with('success', 'Treatment Process Successfuly');


        } else
            return redirect()->route('randevu.processcomplete')->with('success', 'Your credit card is not valid');


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function add($id)
    {


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
        $data = Randevu::find($id);
        $data->date = $request->input('date');
        $data->time = $request->input('time');
        $data->dentist_id = $request->input('dentist_id');
        $data->save();
        return redirect()->back()->with('success', 'Treatment Update to Appointment');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Randevu::find($id);
        $data->delete();
        return redirect()->back()->with('info', 'Treatment deleted from Appointment...');
    }
}
