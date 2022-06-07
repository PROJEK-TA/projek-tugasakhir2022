<?php

namespace App\Http\Controllers;


use App\Models\Product;
use App\Models\Room;
use App\Models\User;
use App\Models\Building;
use App\Models\LocationProduct;
use App\Models\BorrowProduct;
use App\Models\BorrowRoom;
use DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $barang = Product::count();
       $ruangan = Room::count();
       $lokasi = LocationProduct::count();
       $gudang = Building::count();
       $user = User::count();
       $pembarang = BorrowProduct::count();
       $pemruangan = BorrowRoom::count();
       
        return view('/home', compact('barang', 'ruangan', 'lokasi','gudang','user','pembarang','pemruangan'));
    }
}
