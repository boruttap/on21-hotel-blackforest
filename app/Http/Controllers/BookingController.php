<?php

namespace App\Http\Controllers;

use App\Models\roomCategory;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $bookingdata=RoomCategory::all();

        return view('/website/booking',['booking'=>$bookingdata]);
    }

}
