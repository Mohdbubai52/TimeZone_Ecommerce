<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function header()
    {
        // return view('Layout.App');
        return view('Layout.Main.HomePage');
    }
    public function Home(){
        return view('Layout.Main.HomePage');
    }
    public function Shop(){
        return view('Layout.Shop.Shop');
    }
    public function Cart()
    {

        return view('Layout.Shop.Cart');
    }
    public function About(){
        return view('Layout.About.About');
    }
    public function Blog(){
        return view('Layout.About.Blog');
    }
    public function CheckOut(){
        return view('Layout.Shop.CheckOut');
    }
    public function Confirmation(){
        return view('Layout.Shop.Confirmation');
    }
    
    public function SignIn(){
        return view('Layout.Pages.SignIn');
    }
    public function Contact(){
        return view('Layout.Pages.Contact');
    }
}

