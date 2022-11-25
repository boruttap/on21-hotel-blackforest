<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $admindata=Admin::All();
        return view('adminpanel/worker/showworker',['admindata'=>$admindata]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('adminPanel/worker/createworker');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $admindata = new Admin;
        $admindata->firstname=$request->firstname;
        $admindata->secondname=$request->secondname;
        $admindata->email=$request->email;
        $admindata->password=sha1($request->password);
        $admindata->status=$request->status;

        $listexistingadmins = Admin::all();

        foreach ($listexistingadmins as $existingadmin) {
            if ($existingadmin->email == $admindata->email) {
                return redirect('admin/worker/create')->with('msg', 'E-Mail bereits vergeben.');
            }
        }

        $admindata->save();

        return redirect('admin/worker/')->with('success', 'Der Mitarbeiter wurde hinzugefügt.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $admindata=Admin::find($id);
        return view('adminpanel/worker/editworker',['admindata'=>$admindata]);
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
        $admindata = Admin::find($id);
        $admindata->firstname=$request->firstname;
        $admindata->secondname=$request->secondname;
        $admindata->email=$request->email;
        $admindata->password=sha1($request->password);
        $admindata->status=$request->status;

        $admindata->save();

        return redirect('admin/worker/')->with('success', 'Der Mitarbeiter wurde bearbeitet.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Admin::where('id',$id)->delete();
        return redirect('admin/worker/')->with('delete','Der Mitarbeiter wurde gelöscht.');
    }

    public function login(){
        return view('/adminpanel/login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $admindata = Admin::All();
        foreach ($admindata as $admin) {
            if ($admin->email == $request->email) {
                if ($admin->password == sha1($request->password)) {
                    return redirect('admin/dashboard');
                }
            }
        }

        return redirect('admin/login')->with('msg', 'Falsche Daten');
    }

}
