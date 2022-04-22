@extends('layouts.index')
@section('title','Tambah Data Servis')

@section('content')
<div class="col-sm-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Tambah Servis</h4>
               </div>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label class="form-label" for="kd_servis"><b>Kode Servis</b></label>
                        <input type="text" class="form-control" id="kd_servis" placeholder="Input kode servis...">
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
                        <label class="form-label" for="deskripsi"><b>Deskripsi</b></label>
                        <input type="text" class="form-control" id="deskripsi" placeholder="Input deskripsi...">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="jumlah"><b>Jumlah</b></label>
                        <input type="text" class="form-control" id="jumlah" placeholder="Input jumlah...">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="nm_petugas"><b>Nama Petugas</b></label>
                        <input type="text" class="form-control" id="nm_petugas" placeholder="Input nama petugas...">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="tgl_servis"><b>Tanggal Servis</b></label>
                        <input type="date" class="form-control" id="tgl_servis" value="2021-12-18">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="tgl_kembali"><b>Tanggal Kembali</b></label>
                        <input type="date" class="form-control" id="tgl_kembali" value="2021-12-20">
                    </div><br><br>
                    <button type="submit" class="btn btn-primary">Tambahkan</button>
                </form>
            </div>
         </div>
      </div>
@endsection