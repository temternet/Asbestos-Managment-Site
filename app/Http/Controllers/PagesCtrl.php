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
      return view('pages.dashboard',compact('ttl'));
    }

    public function account(){
      $ttl = "account";
      return view('pages.account',compact('ttl'));
    }

    public function premises(){
      $ttl = "premises";
      return view('pages.details',compact('ttl'));
    }

    public function editRecord(){
      $ttl = "edit record";
      return view('pages.edit',compact('ttl'));
    }

}
