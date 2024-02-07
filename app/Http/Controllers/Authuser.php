<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Userinfo;
use Illuminate\Testing\Fluent\Concerns\Hash;

class Authuser extends Controller
{
    public function login()
    {
         return view('login');
    }


    public function signup()
    {
         return view('signup');
    }
    public function signupstore(Request $request) 
    {
        //dd($request->all());
        $request->validate(
            [
                'name'=>'required',
                'Username'=>'required',
                'email'=>'required',
                'password'=>'required'
        ]
            );
        
        $user= new Userinfo;
        $user->name =$request->input('name');
        $user->Username =$request->input('Username');
        $user->email =$request->input('email');
        //$user->Password =Hash::make($request->input('password'));
        $user->save();
         
        Auth::login($user);

        redirect('');
         return view('signup');
    }
    public function logincheck(Request $request)
    {
        // dd($request->all());
       
         $request->validate([
            'Username'=>'required',
            'Password'=>'required'
         ]);
         $Username=$request->input('Username');
         $password=$request->input('Password');
       dd($Username,$password);

         if(Auth::attempt(['Username'=>$Username,'password'=>$password])){
              $user =Userinfo::Where('Username',$Username);
              Auth::login($user);
              return redirect('');
         }else{
            return back()->withErrors(['Invalid credentials!']);
        }
       
     }

     public function logout(){

             Auth::logout();
             return redirect('login');    
     }
}
