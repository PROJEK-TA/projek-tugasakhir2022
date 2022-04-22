@extends('layouts.index')
@section('title','Ajukan Peminjaman Ruangan')

@section('content')
<div class="col-sm-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Ajukan Peminjaman Ruangan</h4>
               </div>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label class="form-label" for="kd_peminjaman"><b>Kode Peminjaman</b></label>
                        <input type="text" class="form-control" id="kd_peminjaman" placeholder="Input kode peminjaman...">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="nm_ruang"><b>Nama Ruangan</b></label>
                        <input type="text" class="form-control" id="nm_barang" placeholder="Input nama barang...">
                    </div>
                    <div class="form-group">
                        <label class="form-label"><b>Gedung</b></label>
                        <select class="form-select mb-3 shadow-none">
                            <option selected="">Pilih gedung...</option>
                            <option value="1">Gedung A</option>
                            <option value="2">Gedung B</option>
                            <option value="3">Gedung C</option>
                            <option value="4">Gedung D</option>
                            <option value="5">Gedung E</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="deskripsi"><b>Deskripsi</b></label>
                        <input type="text" class="form-control" id="deskripsi" placeholder="Input deskripsi...">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="nm_peminjam"><b>Nama Peminjam</b></label>
                        <input type="text" class="form-control" id="nm_peminjam" placeholder="Input nama peminjam...">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="tgl_dipinjam"><b>Tanggal Dipinjam</b></label>
                        <input type="date" class="form-control" id="tgl_dipinjam" value="2021-12-18">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="tgl_selesai"><b>Tanggal Selesai</b></label>
                        <input type="date" class="form-control" id="tgl_selesai" value="2021-12-20">
                    </div><br><br>
                    <button type="submit" class="btn btn-primary">Ajukan</button>
                </form>
            </div>
         </div>
      </div>
@endsection