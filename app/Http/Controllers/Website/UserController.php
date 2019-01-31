<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Models\User;

use App\Http\Controllers\Controller;
use Session;
use DB;


class UserController extends Controller
{

    public function showSignInForm()
    {    
        return view('website.user.signin_form');
    }

    public function showSignUpForm()
    {        
        return view('website.user.signup_form');
    }

    public function store(Request $request)
    {


        if( !($request->password == $request->confirm_password) ){
            Session::put('error_message' , 'password dont match');
            return redirect()->back();
        }

        $user = User::create([
            'name' => $request->name , 
            'email' => $request->email ,
            'phone' => $request->phone ,
            'password' => md5($request->password)  
        ]);

        if($user)
        {
            Session::put('user_name' , $user->name);
            Session::put('user_id' , $user->id);

            if(Session::get('current_status') == "checkout")
            {
                return redirect()->route('product.checkout');
            }
            else
            {
                return redirect()->route('website.index');
            }
        }
        else
        {
            return redirect()->back();
        }
    }

    public function showProfile()
    {
        dd("This is profile page of user/n Edit Delete will be done here");
    }

    public function logOut()
    {
        Session::flush();

        return redirect()->route('website.index');
    }

    public function login(Request $request)
    {
        $user = User::where('email' , $request->email)
                    ->where('password' , md5($request->password))->first();

        if($user)
        {
            Session::put('user_name' , $user->name);
            Session::put('user_id' , $user->id);

            if($user->role == 0)
                {
                    if(Session::get('current_status') == "checkout")
                    {
                        return redirect()->route('product.checkout');
                    }
                    else
                    {
                        return redirect()->route('website.index');
                    }
                }
            else
                return redirect()->route('admin.index');

            
        }
        else
        {
            Session::put('error_message' , 'Email or Password Dont Match');
            return redirect()->back();
        }
    }
}
