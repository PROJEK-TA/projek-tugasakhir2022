@extends('layouts.index')
@section('title','Tambah Data Nonaktif')

@section('content')
<div class="col-sm-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Tambah Nonaktif</h4>
               </div>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label class="form-label" for="kd_nonaktif"><b>Kode Nonaktif</b></label>
                        <input type="text" class="form-control" id="kd_nonaktif" placeholder="Input kode nonaktif...">
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
                        <label class="form-label" for="jumlah"><b>Jumlah</b></label>
                        <input type="text" class="form-control" id="jumlah" placeholder="Input jumlah...">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="status"><b>Status</b></label>
                        <input type="text" class="form-control" id="status" placeholder="Input status...">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="tgl_nonaktif"><b>Tanggal Nonaktif</b></label>
                        <input type="date" class="form-control" id="tgl_nonaktif" value="2021-12-18">
                    </div><br><br>
                    <button type="submit" class="btn btn-primary">Tambahkan</button>
                </form>
            </div>
         </div>
      </div>
@endsection