<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\BorrowProduct;
use App\Models\MerkProduct;
use App\Models\LocationProduct;
use App\Models\Department;

class PinjamBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reqpinjam=BorrowProduct::with('barang','merk','lokasi','departemen')->paginate();
        return view('barangs.statuspeminjamanbarang', compact('reqpinjam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang = Product::all();
        $merk = MerkProduct::all();
        $lokasi = LocationProduct::all();
        $departemen = Department::all();

        return view('barangs.userpeminjamanbarang', compact('barang', 'merk', 'lokasi', 'departemen'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        BorrowProduct::create([
            'id' => $request->id,
            'nama_peminjam' => $request->nama_peminjam,
            'id_product' => $request->nama_barang,
            'id_merk' => $request->merk_barang,
            'id_lokasi' => $request->nama_lokasi,
            'id_department' => $request->departemen,
            'jumlah' => $request->jumlah,
            'deskripsi' => $request->deskripsi,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'tanggal_kembali' => $request->tanggal_kembali,
            'status' => $request->status,

        ]);

        return redirect()->route('statuspinjambarang.index')->with('toast_success', 'Data Berhasil Tersimpan !');
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
        //
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
        //
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
