<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\RoomCategory;
use App\Models\Building;
use Illuminate\Http\Request;

class RuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ruangan = Room::with('roomcategory','building')->paginate();
        return view('ruangan.index', compact('ruangan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roomcat = RoomCategory::all();
        $building = Building::all();
        return view ('ruangan.add', compact('roomcat', 'building'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Room::create([
            'nama_ruangan' => $request->nama_ruangan,
            'id_roomcategory' => $request->id_kategoriruangan,
            'id_building' => $request->id_gudang,
        ]);

        return redirect()->route('ruangan.index')->with('toast_success', 'Data Berhasil Tersimpan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Room  $ruangan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Room  $ruangan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roomcat = RoomCategory::all();
        $gudang = Building::all();
        $room = Room::with('roomcategory','building')->find($id);

        return view ('ruangan.edit', compact('room', 'roomcat', 'gudang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Room  $ruangan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $room = Room::with('roomcategory','building')->find($id);
        $room->nama_ruangan=$request->nama_ruangan;
        $room->id_roomcategory=$request->id_kategoriruangan;
        $room->id_building=$request->id_gudang;
        $room->save();
        return redirect('/ruangan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Room  $ruangan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $room = Room::with('roomcategory', 'building')->find($id);
        $room->delete();
        return redirect()->route('ruangan.index');
    }
}