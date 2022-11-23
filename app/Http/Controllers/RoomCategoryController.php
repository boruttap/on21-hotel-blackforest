<?php

namespace App\Http\Controllers;

use App\Models\roomCategory;
use Illuminate\Http\Request;

class RoomCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $categorydata=RoomCategory::All();
        return view('adminpanel/roomcategory/showallcategorys',['categorydata'=>$categorydata]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('adminPanel/roomcategory/createroomcategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $categorydata = new RoomCategory;
        $categorydata->roomcategory=$request->category;
        $categorydata->roomdescription=$request->description;
        $categorydata->save();

        return redirect('admin/roomcategory/')->with('success', 'Die Kategorie wurde hinzugefügt.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $categorydata=RoomCategory::find($id);
        return view('adminpanel/roomcategory/showselectedcategory',['categorydata'=>$categorydata]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $categorydata=RoomCategory::find($id);
        return view('adminpanel/roomcategory/editroomcategory',['categorydata'=>$categorydata]);
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
        $categorydata = RoomCategory::find($id);
        $categorydata->roomcategory=$request->category;
        $categorydata->roomdescription=$request->description;
        $categorydata->save();

        return redirect('admin/roomcategory/')->with('success', 'Die Kategorie wurde hinzugefügt.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
