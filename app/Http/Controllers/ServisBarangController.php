<?php

namespace App\Http\Controllers;

use App\Models\ServiceProduct;
use App\Models\Product;
use App\Models\MerkProduct;
use App\Models\LocationProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use PDF;
use DB;

class ServisBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servis=ServiceProduct::with('barang', 'merk')->paginate();
        return view('barangs.servis', compact('servis'));

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

        
        $q = DB::table('service_products')->select(DB::raw('MAX(RIGHT(kode_servis,4)) as kode'));
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
        
        
        
        
        return view ('barangs.addservis', compact('barang','merk','lokasi','kd'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ServiceProduct::create([
            'kode_servis' => $request->kode_servis,
            'deskripsi' => $request->deskripsi,
            'jumlah' => $request->jumlah,
            'nama_petugas' => $request->nama_petugas,
            'tanggal_servis' => $request->tanggal_servis,
            'tanggal_kembali' => $request->tanggal_kembali,
            'id_product' => $request->id_product,
            'id_merk' => $request->id_merk,
            'id_lokasi' => $request->id_lokasi,


        ]);

        return redirect()->route('servis.index')->with('toast_success', 'Data Berhasil Tersimpan !');
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
        $servis = ServiceProduct::with('barang', 'merk','lokasi')->find($id);
        $barang=Product::all();
        $merk=MerkProduct::all();
        $lokasi=LocationProduct::all();

        return view('barangs.editservisbarang', compact('servis','barang','merk','lokasi'));
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
        $servis=ServiceProduct::with('barang', 'merk','lokasi')->find($id);
        $servis->kode_servis=$request->kode_servis;
        $servis->deskripsi=$request->deskripsi;
        $servis->jumlah=$request->jumlah;
        $servis->nama_petugas=$request->nama_petugas;
        $servis->tanggal_servis=$request->tanggal_servis;
        $servis->tanggal_kembali=$request->tanggal_kembali;
        $servis->id_product=$request->id_product;
        $servis->id_merk=$request->id_merk;
        $servis->id_lokasi=$request->id_lokasi;
        $servis->save();
        return redirect('/servis'); 

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
        $servis = ServiceProduct::with('barang', 'merk','lokasi')->find($id);
        $servis->delete();
        return redirect()->route('servis.index');
    }

    public function cetak_servisbarang()
    {
        $servis = ServiceProduct::all();

        view()->share('servisbarang', $servis);
        $pdf = PDF::loadview('barangs.servis-pdf')->setPaper('a4', 'landscape');
        return $pdf->stream('data-servisbarang.pdf');
    }

    public function __construct()
    {
        //$this->middleware('auth');
        $this->middleware(function($request, $next){
        if(Gate::allows('servis')) return $next($request);
        abort(403, 'Anda tidak memiliki cukup hak akses!');
        });
    }
}
