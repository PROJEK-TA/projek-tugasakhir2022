@extends('layouts.index')
@section('title','Tambah Data Kategori Ruangan')

@section('content')
<div class="col-sm-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Tambah Kategori Ruangan</h4>
               </div>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label class="form-label" for="kd_kategori"><b>Kode Kategori</b></label>
                        <input type="text" class="form-control" id="kd_kategori" placeholder="Input kode kategori...">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="nm_kategori"><b>Nama Kategori</b></label>
                        <input type="text" class="form-control" id="nm_kategori" placeholder="Input nama kategori...">
                    </div><br><br>
                    <button type="submit" class="btn btn-primary">Tambahkan</button>
                </form>
            </div>
         </div>
      </div>
@endsection