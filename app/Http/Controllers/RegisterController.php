<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('Layout.Pages.SignIn');
    }
    public function SaveData(Request $request)   //Request is inbuilt function of larrvel help to get all the data from form 
    {                                              // $request is the aliyas/object of Request function
        // $Registration = User::class;
        $Registration = new User;             //$Registration is the variable where all the data get to store
                                                //$Registration is use for access tables of database column

        // $Registration->name = 'Admin';
        //     $Registration->email = 'Admin@mail.com';
        //     $Registration->password = 'Admin@123';
        $Registration->name = $request->name;
        $Registration->email = $request->mail;
        $Registration->password = $request->password;
        $Registration->save();

        // return redirect('/login');
        // return redirect('/signin');
        return redirect('/home');          
        // dd($Registration);
    }
}
