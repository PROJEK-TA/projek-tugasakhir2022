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
                    <div class="form-group">
                        <label class="form-label" for="email">Kode Ruangan</label>
                        <input type="email" class="form-control" id="email1">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="pwd">Nama Ruangan</label>
                        <input type="password" class="form-control" id="pwd">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Kategori Ruangan</label>
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
                        <label class="form-label">Gedung</label>
                        <select class="form-select mb-3 shadow-none">
                            <option selected="">Pilih Gedung...</option>
                            <option value="1">Gedung A</option>
                            <option value="2">Gedung B</option>
                            <option value="3">Gedung C</option>
                            <option value="4">Gedung D</option>
                            <option value="5">Gedung E</option>
                        </select>
                    </div><br>
                    <button type="submit" class="btn btn-primary">Tambahkan</button>
                </form>
            </div>
         </div>
      </div>
@endsection