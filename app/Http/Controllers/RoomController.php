<?php

namespace App\Http\Controllers;

use App\Models\room;
use App\Models\roomCategory;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $roomdata=Room::All();
        return view('adminpanel/rooms/showallrooms',['roomdata'=>$roomdata]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $roomcategories=RoomCategory::all();
        return view('adminpanel/rooms/createroom',['roomcategories'=>$roomcategories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $roomdata = new RoomCategory;
        $roomdata->roomcategory=$request->roomcategory;
        $roomdata->title=$request->title;
        $roomdata->save();

        return redirect('admin/rooms/')->with('success', 'Der Raum wurde hinzugefügt.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $roomdata=Room::find($id);
        return view('adminpanel/rooms/showselectedroom',['roomdata'=>$roomdata]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $roomdata=Room::find($id);
        return view('adminpanel/rooms/editselectedroom',['roomdata'=>$roomdata]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $roomdata = RoomCategory::find($id);
        $roomdata->title=$request->title;
        $roomdata->save();

        return redirect('admin/rooms/')->with('success', 'Der Raum wurde hinzugefügt.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Room::where('id',$id)->delete();
        return redirect('admin/rooms/')->with('success','Der Raum wurde gelöscht..');
    }
}
