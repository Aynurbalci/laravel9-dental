<?php

namespace App\Http\Controllers;

use App\Models\Category;

use App\Models\Faq;
use App\Models\Message;
use App\Models\Setting;
use App\Models\Treatment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{


    public static function maincategorylist()
    {
        return Category::where('parent_id', '=', 11)->with('children')->get();
    }
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function Index()
    {

        $sliderdata = Treatment::limit(4)->get();
        $treatmentlist1 = Treatment::limit(4)->get();
        $setting = Setting::first();

        return view('home.index', [
            'setting' => $setting,
            'sliderdata' => $sliderdata,
            'treatmentlist1' => $treatmentlist1

        ]);
    }
    public function about()
    {
        $setting = Setting::first();
        return view('home.about', [
            'setting' => $setting,


        ]);
    }
    public function references()
    {


        $setting = Setting::first();
        return view('home.references', [
            'setting' => $setting,

        ]);
    }
    public function contact()
    {


        $setting = Setting::first();
        return view('home.contact', [
            'setting' => $setting,

        ]);
    }
    public function faq()
    {

$setting = Setting::first();
$datalist=Faq::all();

        return view('home.faq', [
            'setting' => $setting,
            'datalist'=>$datalist

        ]);
    }
    public function storemessage(Request $request)
    {

        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->ip = request()->ip();
        $data->save();
        return redirect()->route('contact')->with('info', 'your message has been sent, Thank you.');
    }



    public function treatment($id)
    {
        $data = Treatment::find($id);
        $images = DB::table('images')->where('treatment_id', $id)->get();
        return view('home.treatment', [
            'data' => $data,
            'images' => $images

        ]);
    }
    public function categorytreatments($id, $slug)
    {
        echo "aynur";
        exit();
        $data = Treatment::find($id);
        $images = DB::table('images')->where('treatment_id', $id)->get();
        return view('home.treatment', [
            'data' => $data,
            'images' => $images

        ]);
    }
    public function test($id, $name)
    {
        $data['id'] = $id;
        $data['name'] = $name;
        return view('home.test', $data);
    }
    public function login()
    {
        return view('admin_login');
    }
    public function logincheck(Request $request)
    {


        if ($request->isMethod('post')) {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended(('admin'));
            }
            return back()->withErrors([

                'email' => 'The provided credentials do not match our records.',
            ]);
        } else {
            return view('admin_login');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
