<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $admindata=Admin::all();
        return view('/website/about',['admindata'=>$admindata]);
    }
}
