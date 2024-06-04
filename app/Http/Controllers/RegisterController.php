<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Mail\mailbox;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;



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
        Mail::to($request->mail)->send(new mailbox($request->name));
        // return redirect('/signin');
        return redirect('/home');          
        // dd($Registration);
    }
}
