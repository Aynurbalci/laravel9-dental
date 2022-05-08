<?php

namespace App\Http\Controllers;

use App\Models\Treatment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function Index()
    {
        $page='home';
        $sliderdata=Treatment::limit(4)->get();
       $treatmentlist1=Treatment::limit(4)->get();
        return view('home.index',[
            'page'=>$page,
            'sliderdata' => $sliderdata,
            'treatmentlist1'=>$treatmentlist1

        ]);
    }
    public function treatment($id)
    {
        $data=Treatment::find($id);
        $images=DB::table('images')->where('treatment_id',$id)->get();
              return view('home.treatment',[
            'data' => $data,
            'images'=>$images

        ]);
    }

    public function test($id, $name)
    {
        $data['id'] = $id;
        $data['name'] = $name;
        return view('home.test', $data);

    }
    public function login()
    {       return view('admin_login');
    }
    public function logincheck(Request $request)
    {


        if ($request->isMethod('post')) {
            $credentials = $request->only('email','password');
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
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
