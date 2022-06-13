<?php

namespace App\Http\Controllers;

use App\Models\Category;

use App\Models\Comment;
use App\Models\Faq;
use App\Models\Message;
use App\Models\Role;
use App\Models\Setting;
use App\Models\Treatment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{


    public static function maincategorylist()
    {
        return Category::where('parent_id', '=', 0)->with('children')->get();
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
        $datalist = Faq::all();

        return view('home.faq', [
            'setting' => $setting,
            'datalist' => $datalist

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
        return redirect()->route('contact')->with('success', 'your message has been sent, Thank you.');
    }
    public function storecomment(Request $request)
    {
        //dd($request); //check your values
        $data = new Comment();
        $data->user_id = Auth::id(); //login user
        $data->treatment_id = $request->input('treatment_id');

        $data->subject = $request->input('subject');
        $data->review = $request->input('review');
        $data->rate = $request->input('rate');
        $data->ip = request()->ip();
        $data->save();
        return redirect()->route('treatment', ['id' => $request->input('treatment_id')])->with('info', 'your commet has been sent, Thank you.');
    }


    public function treatment($id)
    {

        $users=User::all();
        $data = Treatment::find($id);
        $images = DB::table('images')->where('treatment_id', $id)->get();
        $reviews = Comment::where('treatment_id', $id)->get();

        return view('home.treatment', [
            'data' => $data,
            'images' => $images,
            'reviews' => $reviews,
            'users'=>$users


        ]);
    }
    public function categorytreatments($id)
    {

        $category = Category::find($id);
        $treatments = DB::table('treatments')->where('category_id', $id)->get();
        return view('home.categorytreatments', [
            'category' => $category,
            'treatments' => $treatments

        ]);

    }
    public function loginuser()
    {
        return view('home.login');
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

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
    public function loginadmincheck(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],

        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin');
        }
        return back()->withErrors([
            'error' => 'The provided credentials do not match our records.',

        ])->onlyInput('email');
    }
}
