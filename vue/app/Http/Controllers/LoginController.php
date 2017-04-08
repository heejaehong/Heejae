<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function doLogin(Request $request){
        //request : email, pwd

            $credentials = [
                'email' => $request->email,
                'password' => $request->password
            ];

            $this->validate(request(), [
               'email' => 'required',
                'password' => 'required'
            ]);

            if(! \Auth::attempt($credentials)){
                return [ 'code' => 0, 'message' => '로그인 실패'];
            }

            return [ 'code' => 1, 'message' => '로그인 성공'];

    }
}
