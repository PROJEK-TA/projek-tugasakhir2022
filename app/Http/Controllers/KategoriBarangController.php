<?php


namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;
use PDF;

class KategoriBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori=ProductCategory::all();
        return view('barangs.kategoribarang', compact('kategori'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barangs.addkatbarang');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $p=new ProductCategory();
        $p->nama_kategbarang=$request->kategoribarang;
        $p->save();
        return redirect('/kategoribarang');
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
        $katbar = ProductCategory::find($id);
        return view ('barangs.editkatbarang', compact('katbar'));
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
        $katbar = ProductCategory::find($id);
        $katbar->nama_kategbarang=$request->kategoribarang;
        $katbar->save();
        return redirect('/kategoribarang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $katbar = ProductCategory::find($id);
        $katbar->delete();
        return redirect()->route('kategoribarang.index');
    }

    public function cetak_kategbarang()
    {
        $katbar = ProductCategory::all();

        view()->share('kategoribarang', $katbar);
        $pdf = PDF::loadview('barangs.kategoribarang-pdf');
        return $pdf->stream('data-kategoribarang.pdf');
    }
}
