<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Building;
use App\Models\BorrowRoom;
use Illuminate\Support\Facades\Auth;
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
        $reqpinjam = BorrowRoom::where('id_user', Auth::user()->id)->paginate();
        return view('ruangan.statuspeminjamanruangan', compact('reqpinjam'));
    }

    public function index_approval()
    {
        $reqpinjam=BorrowRoom::where('status','=','diajukan')->paginate();
        $reqpinjamconfirmed=BorrowRoom::where('status','!=','diajukan')->paginate();
        return view('ruangan.peminjamanruangan', compact(['reqpinjam','reqpinjamconfirmed']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ruangan = Room::where('status_ruangan', '=' , 'Tersedia')->get();
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
        $ruangan= Room::find($request->nama_ruangan);
        BorrowRoom::create([
            'id' => $request->id,
            'kode_peminjaman' => $request->kode_peminjaman,
            'nama_peminjam' => $request->nama_peminjam,
            'id_room' => $request->nama_ruangan,
            'id_building' => $ruangan->id_building,
            'id_user' => Auth::user()->id,
            'deskripsi' => $request->deskripsi,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'tanggal_selesai' => $request->tanggal_selesai,
            'status' => $request->status,

        ]);

        $ruangan->status_ruangan='Diajukan';
        $ruangan->save();

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
        $reqpinjam = BorrowRoom::where('status_ruangan', '=' , 'Tersedia')->get();
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
        $ruangan= Room::find($request->nama_ruangan);
        $reqpinjam = BorrowRoom::find($id);
        $reqpinjam->id_room=$request->nama_ruangan;
        $reqpinjam->id_building=$ruangan->id_building;
        $reqpinjam->deskripsi=$request->deskripsi;
        $reqpinjam->tanggal_pinjam=$request->tanggal_pinjam;
        $reqpinjam->tanggal_selesai=$request->tanggal_selesai;
        $reqpinjam->save();

        $statruangan = Room::find($reqpinjam->id_room);
        $statruangan->id_statusproduct=13;
        $ruangan->id_statusproduct=8;
        $ruangan->save();
        $statruangan->save();
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
        $ruangan = Room::find($reqpinjam->id_room);
        $ruangan->status_ruangan='Tersedia';
        $ruangan->save();
        $reqpinjam->delete();
        return redirect()->route('statuspinjamruangan.index');

    }

    public function approve($id)
    {
        $approve=BorrowRoom::find($id);
        $approve->status='disetujui';
        $approve->save();

        $ruangan=Room::find($approve->id_room);
        $ruangan->status_ruangan='Dipinjam';
        $ruangan->save();

        return redirect()->action([PinjamRuanganController::class, 'index_approval']);

    }

    public function rejected($id)
    {
        $rejected=BorrowRoom::find($id);
        $rejected->status='ditolak';
        $rejected->save();

        $ruangan=Room::find($rejected->id_room);
        $ruangan->status_ruangan='Tersedia';
        $ruangan->save();

        return redirect()->action([PinjamRuanganController::class, 'index_approval']);

    }

    public function return(Request $request, $id)
    {
        $return=BorrowRoom::find($id);
        $return->status='selesai';
        $return->tgl_selesai=Carbon::now()->format('Ymd');
        $return->save();

        $ruangan=Room::find($request->id_product);
        $ruangan->status_ruangan="Tersedia";
        $ruangan->save();

        return redirect()->back();
    }

    public function cetak_pinjamruangan()
    {
        $reqpinjam = BorrowRoom::all();

        view()->share('pinjamruangan', $reqpinjam);
        $pdf = PDF::loadview('ruangan.pinjamruangan-pdf')->setPaper('a4', 'landscape');
        return $pdf->stream('data-pinjamruangan.pdf');
    }
}

