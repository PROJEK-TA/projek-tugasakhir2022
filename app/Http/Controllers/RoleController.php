<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use PDF;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peran=Role::all();
        return view ('users.roles', compact('peran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $peran = new Role;
        return view ('users.addroles', compact('peran'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $peran=new Role();
        $peran->nama_role=$request->roleuser;
        $peran->save();
        return redirect('/roleuser');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peran = Role::find($id);
        return view ('users.editroles', compact('peran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $peran = Role::find($id);
        $peran->nama_role=$request->roleuser;
        $peran->save();
        return redirect('/roleuser');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peran = Role::find($id);
        $peran->delete();
        return redirect()->route('roleuser.index');
    }

    public function cetak_jabatan()
    {
        $peran = Role::all();

        view()->share('roleuser', $peran);
        $pdf = PDF::loadview('users.jabatan-pdf');
        return $pdf->stream('data-jabatan.pdf');
    }
}
