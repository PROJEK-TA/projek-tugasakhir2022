<?php

namespace App\Http\Controllers;

use App\Models\MerkProduct;
use Illuminate\Http\Request;

class MerkBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $merk=MerkProduct::all();
        return view('barangs.merk', compact('merk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barangs.addmerk');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $merk=new MerkProduct();
        $merk->nama_merkbarang=$request->merk;
        $merk->save();
        return redirect('/merkbarang');
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
        $merk = MerkProduct::find($id);
        return view ('barangs.editmerk', compact('merk'));
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
        $merk = MerkProduct::find($id);
        $merk->nama_merkbarang=$request->merk;
        $merk->save();
        return redirect('/merkbarang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $merk = MerkProduct::find($id);
        $merk->delete();
        return redirect()->route('merkbarang.index');
    }
}