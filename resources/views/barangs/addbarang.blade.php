@extends('layouts.index')
@section('title','Tambah Data Ruangan')

@section('content')
<div class="col-sm-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Tambah Barang</h4>
               </div>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label class="form-label" for="kd_barang"><b>Kode Barang</b></label>
                        <input type="text" class="form-control" id="kd_barang" placeholder="Input kode barang...">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="nm_barang"><b>Nama Barang</b></label>
                        <input type="text" class="form-control" id="nm_barang" placeholder="Input nama barang...">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="mr_barang"><b>Merek Barang</b></label>
                        <input type="text" class="form-control" id="mr_barang" placeholder="Input merk barang...">
                    </div>
                    <div class="form-group">
                        <label class="form-label"><b>Kategori Barang</b></label>
                        <select class="form-select mb-3 shadow-none">
                            <option selected="">Pilih Kategori...</option>
                            <option value="1">Barang Elektronik</option>
                            <option value="2">Mebel</option>
                            <option value="3">Alat Transportasi</option>
                            <option value="4">Mesin</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label"><b>Lokasi</b></label>
                        <select class="form-select mb-3 shadow-none">
                            <option selected="">Pilih Ruangan...</option>
                            <option value="1">Ruang Laboratorium 1</option>
                            <option value="2">Ruang Produksi</option>
                            <option value="3">Gudang 1</option>
                            <option value="4">Ruang Meeting</option>
                            <option value="5">Ruang Tamu</option>
                        </select>
                        <div class="form-group">
                        <label class="form-label"><b>Owner</b></label>
                        <select class="form-select mb-3 shadow-none">
                            <option selected="">Pilih Departemen...</option>
                            <option value="1">Departemen A</option>
                            <option value="2">Departemen B</option>
                            <option value="3">Departemen C</option>
                            <option value="4">Departemen D</option>
                            <option value="5">Departemen E</option>
                        </select>
                        <div class="form-group">
                        <label class="form-label" for="hb_barang"><b>Harga Beli</b></label>
                        <input type="text" class="form-control" id="hb_barang" placeholder="Input harga barang...">
                        </div>
                        <div class="form-group">
                        <label class="form-label" for="jm_barang"><b>Jumlah</b></label>
                        <input type="text" class="form-control" id="jm_barang" placeholder="Input jumlah barang...">
                        </div> 
                        <label class="form-label"><b>Status</b></label>
                        <select class="form-select mb-3 shadow-none">
                            <option selected="">Pilih Status...</option>
                            <option value="1">Tersedia</option>
                            <option value="2">Rusak</option>
                            <option value="3">Diservis</option>
                            <option value="4">Dipinjam</option>
                            <option value="5">Hilang</option>
                        </select>
                        <label class="form-label"><b>Tanggal</b></label>
                        <div class="bd-example">
        <div class="input-group">
            <input type="text" class="form-control vanila-datepicker" placeholder="Input Tanggal">
        </div>
    </div>  
   
                    </div><br><br>
                    <button type="submit" class="btn btn-primary">Tambahkan</button>
                </form>
            </div>
         </div>
      </div>
@endsection