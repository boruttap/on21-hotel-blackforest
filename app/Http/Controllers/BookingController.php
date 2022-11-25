<?php

namespace App\Http\Controllers;

use App\Models\roomCategory;
use Illuminate\Http\Request;
use App\Models\BookingRequest;

class BookingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $bookingdata=RoomCategory::all();
        return view('/website/booking',['bookingdata'=>$bookingdata]);
    }

    public function store(Request $request)
    {
        $bookingdata=RoomCategory::all();
        $bookingrequest = new BookingRequest;
        $bookingrequest->email = $request->email;
        $bookingrequest->arrivingdate = $request->arrivingdate;
        $bookingrequest->departuredate = $request->departuredate;
        $bookingrequest->roomcategory = $request->roomcategory;
        $bookingrequest->save();

        return view('website/booking',['bookingdata'=>$bookingdata]);

    }

}
