@extends('layouts.index')
@section('title','Ajukan Peminjaman Barang')

@section('content')
<div class="col-sm-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Ajukan Peminjaman Barang</h4>
               </div>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label class="form-label" for="kd_peminjaman"><b>Kode Peminjaman</b></label>
                        <input type="text" class="form-control" id="kd_peminjaman" placeholder="Input kode peminjaman...">
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
                        <label class="form-label"><b>Lokasi</b></label>
                        <select class="form-select mb-3 shadow-none">
                            <option selected="">Pilih ruangan...</option>
                            <option value="1">Ruang Laboratorium 1</option>
                            <option value="2">Ruang Produksi</option>
                            <option value="3">Gudang 1</option>
                            <option value="4">Ruang Meeting</option>
                            <option value="5">Ruang Tamu</option>
                        </select>
                    </div>
                     <div class="form-group">
                        <label class="form-label"><b>Owner</b></label>
                        <select class="form-select mb-3 shadow-none">
                            <option selected="">Pilih departemen...</option>
                            <option value="1">Departemen A</option>
                            <option value="2">Departemen B</option>
                            <option value="3">Departemen C</option>
                            <option value="4">Departemen D</option>
                            <option value="5">Departemen E</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="jm_barang"><b>Jumlah</b></label>
                        <input type="text" class="form-control" id="jm_barang" placeholder="Input jumlah barang...">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="nm_peminjam"><b>Nama Peminjam</b></label>
                        <input type="text" class="form-control" id="nm_peminjam" placeholder="Input nama peminjam...">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="nm_peminjam"><b>Dari</b></label>
                        <input type="text" class="form-control" id="nm_peminjam" placeholder="Input asal departemen...">
                    </div>
                   
                    <div class="form-group">
                        <label class="form-label" for="tgl_dipinjam"><b>Tanggal Dipinjam</b></label>
                        <input type="date" class="form-control" id="tgl_dipinjam" value="2021-12-18">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="tgl_kembali"><b>Tanggal Dikembalikan</b></label>
                        <input type="date" class="form-control" id="tgl_kembali" value="2021-12-20">
                    </div><br><br>
                    <button type="submit" class="btn btn-primary">Ajukan</button>
                </form>
            </div>
         </div>
      </div>
@endsection