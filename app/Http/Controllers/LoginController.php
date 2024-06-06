<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function LogIn(){
        return view('Layout.Pages.LogIn');
    }
    //all details is on RegistrationController of Request and $request
    public function LogInAuthenthication(Request $request){
        // dd($request);
        $Data = $request-> only('email','password');
        // dd($Data);

        if(Auth::attempt($Data))
        {
            if(Auth::user()->Role == 0)
            {
                return redirect('/home');
            }
            else if(Auth::user()->Role == 1)
            {
                return redirect('/AdminPannel');
            }
        }
        else{
            dd('password is incorrect');
        }

    }
}
