<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Livewire\Attributes\Layout;

class AdminController extends Controller
{
    public function AdminPage(){
        return view('Layout.AdminDashboard.AdminHeader');
    }
}
