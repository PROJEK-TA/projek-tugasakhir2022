<?php

namespace App\Http\Controllers;

use App\Models\LocationProduct;
use Illuminate\Http\Request;
use PDF;

class LokasiBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lokasi=LocationProduct::all();
        return view('barangs.lokasi', compact('lokasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barangs.addlokasi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lokasi=new LocationProduct();
        $lokasi->nama_lokasibarang=$request->lokasi;
        $lokasi->save();
        return redirect('/lokasibarang');
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
        $lokasi = LocationProduct::find($id);
        return view ('barangs.editlokasi', compact('lokasi'));
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
        $lokasi = LocationProduct::find($id);
        $lokasi->nama_lokasibarang=$request->lokasi;
        $lokasi->save();
        return redirect('/lokasibarang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lokasi = LocationProduct::find($id);
        $lokasi->delete();
        return redirect()->route('lokasibarang.index');
    }

    public function cetak_lokasibarang()
    {
        $lokasi = LocationProduct::all();

        view()->share('lokasibarang', $lokasi);
        $pdf = PDF::loadview('barangs.lokasibarang-pdf');
        return $pdf->stream('data-lokasi.pdf');
    }
}
