<?php

namespace App\Http\Controllers;

use App\Models\BookingRequest;
use Illuminate\Http\Request;

class BookingRequestsController extends Controller
{
    public function index()
    {
        $requestdata=BookingRequest::All();
        return view('adminpanel/bookingrequests',['requestdata'=>$requestdata]);
    }
}
