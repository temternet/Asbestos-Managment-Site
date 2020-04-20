<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesCtrl extends Controller
{
    public function index(){
        $ttl = "Login";
        return view('pages.landing',compact('ttl'));
      }
}
