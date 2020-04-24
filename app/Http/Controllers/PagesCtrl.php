<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesCtrl extends Controller
{
    public function index(){
        $ttl = "Login";
        return view('pages.dashboard',compact('ttl'));
    }
    
    public function dashboard(){
      $ttl = "Dasboard";
      return view('pages.welcome',compact('ttl'));
    }

    public function account(){
      $ttl = "account";
      return view('pages.account',compact('ttl'));
    }

}
