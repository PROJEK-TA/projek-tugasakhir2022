<?php

namespace App\Http\Controllers;

use App\Models\Building;
use Illuminate\Http\Request;
use PDF;

class GedungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $building=Building::all();
        return view ('ruangan.gedung', compact('building'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $building = new Building;
        return view ('ruangan.addgedung', compact('building'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $building=new Building();
        $building->nama_gedung=$request->gedung;
        $building->save();
        return redirect('/gedung');
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
        $building = Building::find($id);
        return view ('ruangan.editgedung', compact('building'));
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
        $building = Building::find($id);
        $building->nama_gedung=$request->gedung;
        $building->save();
        return redirect('/gedung');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $building = Building::find($id);
        $building->delete();
        return redirect()->route('gedung.index');
    }

    public function cetak_gudang()
    {
        $building = Building::all();

        view()->share('gedung', $building);
        $pdf = PDF::loadview('ruangan.gudang-pdf');
        return $pdf->stream('data-gudang.pdf');
    }
}
