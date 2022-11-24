<?php

namespace App\Http\Controllers;

use App\Models\roomCategory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(){
        $categorydata=roomCategory::all();
        return view('/website/home',['categorydata'=>$categorydata]);
    }
}
