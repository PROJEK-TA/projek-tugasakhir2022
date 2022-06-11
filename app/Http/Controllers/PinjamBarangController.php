<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\BorrowProduct;
use App\Models\MerkProduct;
use App\Models\LocationProduct;
use App\Models\Department;
use PDF;
use DB;

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

    public function index_approval()
    {
        $reqpinjam=BorrowProduct::where('status','=','diajukan')->paginate();
        $reqpinjamapproved=BorrowProduct::where('status','=','disetujui')->paginate();
        $reqpinjamrejected=BorrowProduct::where('status','=','ditolak')->paginate();
        return view('barangs.peminjamanbarang', compact(['reqpinjam','reqpinjamapproved','reqpinjamrejected']));
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


        
        $q = DB::table('borrow_products')->select(DB::raw('MAX(RIGHT(kode_peminjaman,4)) as kode'));
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
        
        
        

        return view('barangs.userpeminjamanbarang', compact('barang', 'merk', 'lokasi', 'departemen','kd'));
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
            'kode_peminjaman' => $request->kode_peminjaman,
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

        $q = DB::table('borrow_products')->select(DB::raw('MAX(RIGHT(kode_peminjaman,4)) as kode'));
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
        $reqpinjam=BorrowProduct::with('barang','merk','lokasi','departemen')->find($id);
        $barang = Product::all();
        $merk = MerkProduct::all();
        $lokasi = LocationProduct::all();
        $departemen = Department::all();

        return view('barangs.editajukanpeminjaman', compact('reqpinjam','barang', 'merk', 'lokasi', 'departemen'));
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
        $reqpinjam = BorrowProduct::with('barang','merk','lokasi','departemen')->find($id);
        $reqpinjam->id_product=$request->nama_barang;
        $reqpinjam->id_merk=$request->merk_barang;
        $reqpinjam->id_lokasi=$request->nama_lokasi;
        $reqpinjam->id_department=$request->departemen;
        $reqpinjam->jumlah=$request->jumlah;
        $reqpinjam->deskripsi=$request->deskripsi;
        $reqpinjam->tanggal_pinjam=$request->tanggal_pinjam;
        $reqpinjam->tanggal_kembali=$request->tanggal_kembali;
        $reqpinjam->save();
        return redirect('/statuspinjambarang');
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
        $reqpinjam=BorrowProduct::with('barang','merk','lokasi','departemen')->find($id);
        $reqpinjam->delete();
        return redirect()->route('statuspinjambarang.index');

    }

    public function approve($id)
    {
        $approve=BorrowProduct::find($id);
        $approve->status='disetujui';
        $approve->save();

        return redirect()->action([PinjamBarangController::class, 'index_approval']);

    }

    public function rejected($id)
    {
        $rejected=BorrowProduct::find($id);
        $rejected->status='ditolak';
        $rejected->save();

        return redirect()->action([PinjamBarangController::class, 'index_approval']);

    }

    public function cetak_pinjambarang()
    {
        $reqpinjam = BorrowProduct::all();

        view()->share('pinjambarang', $reqpinjam);
        $pdf = PDF::loadview('barangs.pinjambarang-pdf')->setPaper('a4', 'landscape');
        return $pdf->stream('data-pinjambarang.pdf');
    }
}
