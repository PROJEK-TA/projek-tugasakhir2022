<?php

namespace App\Http\Controllers;

use App\Models\RoomCategory;
use Illuminate\Http\Request;
use PDF;

class KategoriRuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori=RoomCategory::all();
        return view('ruangan.kategoriruangan', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = new RoomCategory;
        return view('ruangan.addkatruangan', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kategori=new RoomCategory();
        $kategori->nama_kategruangan=$request->kategoriruangan;
        $kategori->save();
        return redirect('/kategoriruangan');
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
        $kategori = RoomCategory::find($id);
        return view('ruangan.editkatruangan', compact('kategori'));
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
        $kategori = RoomCategory::find($id);
        $kategori->nama_kategruangan=$request->kategoriruangan;
        $kategori->save();
        return redirect('/kategoriruangan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori = RoomCategory::find($id);
        $kategori->delete();
        return redirect()->route('kategoriruangan.index');
    }

    public function cetak_kategruangan()
    {
        $kategori = RoomCategory::all();

        view()->share('kategoriruangan', $kategori);
        $pdf = PDF::loadview('ruangan.kategoriruangan-pdf');
        return $pdf->stream('data-kategoriruangan.pdf');
    }
}
