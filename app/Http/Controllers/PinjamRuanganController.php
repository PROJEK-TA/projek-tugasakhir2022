<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Building;
use App\Models\BorrowRoom;
use PDF;
use DB;

class PinjamRuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reqpinjam = BorrowRoom::with('ruangan', 'gudang')->paginate();
        return view('ruangan.statuspeminjamanruangan', compact('reqpinjam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ruangan = Room::all();
        $gudang = Building::all();

        $q = DB::table('borrow_rooms')->select(DB::raw('MAX(RIGHT(kode_peminjaman,4)) as kode'));
        $kd="";
        if($q->count()>0)
        {
            foreach($q->get() as $k)
            {
                $tmp = ((int)$k->kode)+1;
                $kd = sprintf("%04s", $tmp);
            }
        }
        else{
            $kd = "0001";
        }

        return view('ruangan.userpeminjamanruangan', compact('ruangan', 'gudang', 'kd'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        BorrowRoom::create([
            'id' => $request->id,
            'kode_peminjaman' => $request->kode_peminjaman,
            'nama_peminjam' => $request->nama_peminjam,
            'id_room' => $request->nama_ruangan,
            'id_building' => $request->nama_gedung,
            'deskripsi' => $request->deskripsi,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'tanggal_selesai' => $request->tanggal_selesai,
            'status' => $request->status,

        ]);

        $q = DB::table('borrow_rooms')->select(DB::raw('MAX(RIGHT(kode_peminjaman,4)) as kode'));
        $kd="";
        if($q->count()>0)
        {
            foreach($q->get() as $k)
            {
                $tmp = ((int)$k->kode)+1;
                $kd = sprintf("%04s", $tmp);
            }
        }
        else{
            $kd = "0001";
        }

        return redirect()->route('statuspinjamruangan.index')->with('toast_success', 'Data Berhasil Tersimpan !');
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
        $reqpinjam = BorrowRoom::with('ruangan', 'gudang')->find($id);
        $ruangan = Room::all();
        $gudang = Building::all();

        return view('ruangan.editajukanpeminjaman', compact('reqpinjam', 'ruangan', 'gudang'));
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
        $reqpinjam = BorrowRoom::with('ruangan', 'gudang')->find($id);
        // $reqpinjam->id->id;
        $reqpinjam->id_room=$request->nama_ruangan;
        $reqpinjam->id_building=$request->nama_gedung;
        $reqpinjam->deskripsi=$request->deskripsi;
        $reqpinjam->tanggal_pinjam=$request->tanggal_pinjam;
        $reqpinjam->tanggal_selesai=$request->tanggal_selesai;
        $reqpinjam->save();
        return redirect('/statuspinjamruangan');
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reqpinjam = BorrowRoom::with('ruangan', 'gudang')->find($id);
        $reqpinjam->delete();
        return redirect()->route('statuspinjamruangan.index');

    }

    public function cetak_pinjamruangan()
    {
        $reqpinjam = BorrowRoom::all();

        view()->share('pinjamruangan', $reqpinjam);
        $pdf = PDF::loadview('ruangan.pinjamruangan-pdf')->setPaper('a4', 'landscape');
        return $pdf->stream('data-pinjamruangan.pdf');
    }
}

