@extends('layouts.index')
@section('title','Tambah Data Status')

@section('content')
<div class="col-sm-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Tambah Status Barang</h4>
               </div>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label class="form-label" for="kd_status"><b>Kode Status</b></label>
                        <input type="text" class="form-control" id="kd_status" placeholder="Input kode status...">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="nm_status"><b>Nama Status</b></label>
                        <input type="text" class="form-control" id="nm_status" placeholder="Input nama status...">
                    </div><br><br>
                    <button type="submit" class="btn btn-primary">Tambahkan</button>
                </form>
            </div>
         </div>
      </div>
@endsection