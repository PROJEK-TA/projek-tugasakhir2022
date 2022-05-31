<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\MerkProduct;
use App\Models\LocationProduct;
use App\Models\Department;
use App\Models\StatusProduct;
use Illuminate\Http\Request;
use PDF;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Product::with('productcategory', 'merek','lokasi', 'departemen', 'status')->paginate();
        return view('barangs.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prodcat = ProductCategory::all();
        $merk = MerkProduct::all();
        $lokasi = LocationProduct::all();
        $departemen = Department::all();
        $status = StatusProduct::all();
        return view ('barangs.addbarang', compact('prodcat', 'merk', 'lokasi', 'departemen', 'status'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Product::create([
            'nama_barang' => $request->nama_barang,
            'id_merkproduct' => $request->id_merkbarang,
            'id_productcategory' => $request->id_kategoribarang,
            'id_lokasiproduct' => $request->id_lokasibarang,
            'id_department' => $request->id_departemen,
            'harga_beli' => $request->hargabeli,
            'jumlah' => $request->jumlah,
            'satuan' => $request->satuan,
            'id_statusproduct' => $request->id_statusbarang,
            'tanggal_input' => $request->tglinput,

        ]);

        return redirect()->route('barang.index')->with('toast_success', 'Data Berhasil Tersimpan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $barang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prodcat = ProductCategory::all();
        $merk = MerkProduct::all();
        $lokasi = LocationProduct::all();
        $departemen = Department::all();
        $status = StatusProduct::all();
        $prod = Product::with('productcategory', 'merek','lokasi', 'departemen', 'status')->find($id);

        return view ('barangs.editbarang', compact('prod', 'prodcat', 'merk', 'lokasi', 'departemen', 'status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $prod = Product::with('productcategory', 'merek','lokasi', 'departemen', 'status')->find($id);
        $prod->nama_barang=$request->nama_barang;
        $prod->id_merkproduct=$request->id_merkbarang;
        $prod->id_productcategory=$request->id_kategoribarang;
        $prod->id_lokasiproduct=$request->id_lokasibarang;
        $prod->id_department=$request->id_departemen;
        $prod->harga_beli=$request->hargabeli;
        $prod->jumlah=$request->jumlah;
        $prod->satuan=$request->satuan;
        $prod->id_statusproduct=$request->id_statusbarang;
        $prod->tanggal_input=$request->tglinput;
        $prod->save();
        return redirect('/barang');
      
       
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prod = Product::with('productcategory', 'merek','lokasi', 'departemen', 'status')->find($id);
        $prod->delete();
        return redirect()->route('barang.index');
    }

    public function cetak_barang()
    {
        $prod = Product::all();

        view()->share('barang', $prod);
        $pdf = PDF::loadview('barangs.barang-pdf');
        return $pdf->stream('daftar-barang.pdf');
    }
}
