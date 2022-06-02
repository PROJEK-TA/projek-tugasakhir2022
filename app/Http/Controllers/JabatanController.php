<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use PDF;

class  JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peran=Jabatan::all();
        return view ('users.jabatan', compact('peran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $peran = new Jabatan;
        return view ('users.addjabatan', compact('peran'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $peran=new Jabatan();
        $peran->nama_jabatan=$request->jabatan;
        $peran->save();
        return redirect('/jabatanuser');
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
        $peran = Jabatan::find($id);
        return view ('users.editjabatan', compact('peran'));
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
        $peran = Jabatan::find($id);
        $peran->nama_jabatan=$request->jabatan;
        $peran->save();
        return redirect('/jabatanuser');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peran = Jabatan::find($id);
        $peran->delete();
        return redirect()->route('jabatanuser.index');
    }

    public function cetak_jabatan()
    {
        $peran = Jabatan::all();

        view()->share('jabatanuser', $peran);
        $pdf = PDF::loadview('users.jabatan-pdf');
        return $pdf->stream('data-jabatan.pdf');
    }

    public function __construct()
    {
        //$this->middleware('auth');
        $this->middleware(function($request, $next){
        if(Gate::allows('users')) return $next($request);
        abort(403, 'Anda tidak memiliki cukup hak akses!');
        });
    }
}
