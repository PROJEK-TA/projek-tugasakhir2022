<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\BorrowProduct;
use App\Models\MerkProduct;
use App\Models\LocationProduct;
use App\Models\Department;
use App\Models\Building;
use Illuminate\Support\Facades\Auth;
use PDF;
use DB;

class PinjamBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     //tampilan halaman status peminjaman pada role "requestor"
    public function index()
    {
       
        $reqpinjam=BorrowProduct::where('id_user', Auth::user()->id)->orderBy('id','desc')->paginate();
        return view('barangs.statuspeminjamanbarang', compact('reqpinjam'));
    }

    //tampilan halaman peminjaman pada role "approval"
    public function index_approval()
    {
        $reqpinjam=BorrowProduct::where('status','=','diajukan')->paginate();
        $reqpinjamconfirmed=BorrowProduct::where('status','!=','diajukan')->orderBy('id','desc')->paginate();
      
        return view('barangs.peminjamanbarang', compact(['reqpinjam','reqpinjamconfirmed']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //proses menampilkan daftar barang dengan status "tersedia" dan "diajukan"
        $barang = Product::where('id_statusproduct', '=' , 8)->orWhere('id_statusproduct', '=', 13)->get();

        //membuat kode peminjaman barang
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
        //////////////////////////////////////
        
        

        return view('barangs.userpeminjamanbarang', compact('barang','kd'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //proses requestor menyimpan data ajukan peminjaman barang
    public function store(Request $request)
    {
        $barang= Product::find($request->nama_barang);
        BorrowProduct::create([
            'id' => $request->id,
            'kode_peminjaman' => $request->kode_peminjaman,
            'nama_peminjam' => $request->nama_peminjam,
            'id_product' => $request->nama_barang,
            'id_merk' => $barang->id_merkproduct,
            'id_lokasi' => $barang->id_lokasiproduct,
            'id_department' => $barang->id_department,
            'id_gudang' => $barang->id_gudang,
            'id_user' => Auth::user()->id,
            // 'jumlah' => $request->jumlah,
            'deskripsi' => $request->deskripsi,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'tanggal_kembali' => $request->tanggal_kembali,
            'status' => $request->status,

        ]);

        //proses mengubah status pada daftar barang menjadi 'diajukan' setelah requestor mengajukan peminjaman
        $barang->id_statusproduct=13;
        $barang->save();

        

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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //proses requestor mengedit data pengajuan
    public function edit($id)
    {
        $reqpinjam=BorrowProduct::find($id);
        $barang = Product::where('id_statusproduct', '=' , 8)->orWhere('id_statusproduct', '=', 13)->get();
       
        return view('barangs.editajukanpeminjaman', compact('reqpinjam','barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //proses requestor mengupdate perubahan data pengajuan
    public function update(Request $request, $id)
    {
        $barang= Product::find($request->nama_barang);
        $reqpinjam = BorrowProduct::find($id);
        $reqpinjam->id_product=$request->nama_barang;
        $reqpinjam->id_merk=$barang->id_merkproduct;
        $reqpinjam->id_lokasi=$barang->id_lokasiproduct;
        $reqpinjam->id_department=$barang->id_department;
        $reqpinjam->id_gudang=$barang->id_gudang;
        // $reqpinjam->jumlah=$request->jumlah;
        $reqpinjam->deskripsi=$request->deskripsi;
        $reqpinjam->tanggal_pinjam=$request->tanggal_pinjam;
        $reqpinjam->tanggal_kembali=$request->tanggal_kembali;
        $reqpinjam->save();
        return redirect('/statuspinjambarang');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //proses requestor menghapus data pengajuan ketika statusnya masih 'diajukan'
    public function destroy($id)
    {
        $reqpinjam=BorrowProduct::find($id);
        $reqpinjam->delete();
        return redirect()->route('statuspinjambarang.index');

    }

    //proses menyetujui peminjaman barang
    public function approve($id)
    {
        //proses mengubah status pada riwayat peminjaman menjadi "disetujui"
        $approve=BorrowProduct::find($id);
        $approve->status='disetujui';
        $approve->save();

        //proses mengubah status pada daftar barang menjadi "dipinjam"
        $product=Product::find($approve->id_product);
        $product->id_statusproduct=11 ;
        $product->save();
     

        return redirect()->action([PinjamBarangController::class, 'index_approval']);

    }

       //proses menolak peminjaman barang
    public function rejected($id)
    {
         //proses mengubah status pada riwayat peminjaman menjadi "ditolak"
        $rejected=BorrowProduct::find($id);
        $rejected->status='ditolak';
        $rejected->save();

        
        //proses mengubah status pada daftar barang menjadi "tersedia"
        $product=Product::find($rejected->id_product);
        $product->id_statusproduct=8;
        $product->save();
       

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