@extends('layouts.index')
@section('title','Tambah Data Ruangan')

@section('content')
<div class="col-sm-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Tambah Ruangan</h4>
               </div>
            </div>
            <div class="card-body">
                <form>
                    <!-- <div class="form-group">
                        <label class="form-label" for="kd_ruang"><b>Kode Ruangan</b></label>
                        <input type="text" class="form-control" id="kd_ruang" placeholder="Input kode ruangan...">
                    </div> -->
                    <div class="form-group">
                        <label class="form-label" for="nm_ruang"><b>Nama Ruangan</b></label>
                        <input type="text" class="form-control" id="nm_ruang" placeholder="Input nama ruangan...">
                    </div>
                    <div class="form-group">
                        <label class="form-label"><b>Kategori Ruangan</b></label>
                        <select class="form-select mb-3 shadow-none">
                            <option selected="">Pilih Kategori...</option>
                            <option value="1">Laboraturium</option>
                            <option value="2">Produksi</option>
                            <option value="3">Gudang</option>
                            <option value="4">Meeting</option>
                            <option value="5">Guest Room</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label"><b>Gudang</b></label>
                        <select class="form-select mb-3 shadow-none">
                            <option selected="">Pilih Gudang...</option>
                            <option value="1">Gedung A</option>
                            <option value="2">Gedung B</option>
                            <option value="3">Gedung C</option>
                            <option value="4">Gedung D</option>
                            <option value="5">Gedung E</option>
                        </select>
                    </div><br><br>
                    <button type="submit" class="btn btn-primary">Tambahkan</button>
                </form>
            </div>
         </div>
      </div>
@endsection