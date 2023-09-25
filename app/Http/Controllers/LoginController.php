<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //
    public function login()
    {

        return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }

    public function registeruser(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['name']     = $request->name;
        $data['email']    = $request->email;
        $data['password'] = Hash::make($request->password);

        User::create($data);

        return redirect()->route('login');
    }

    public function login_proses(Request $request){
        // dd($request->all());
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $data = [
            'email' => $request-> email,
            'password' => $request->password,
        ];

        if(Auth::attempt($data)){
            return redirect()->route('dashboard');
        }else{
            return redirect()->route('login')->with('failed','email atau password salah');
        }
    }
    public function logout(){
        Auth::logout();
        return \redirect('login');
    }
}