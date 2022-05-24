@extends('layouts.index')
@section('title','Tambah Data Gedung')

@section('content')
<div class="col-sm-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Tambah Gedung</h4>
               </div>
            </div>
            <div class="card-body">
                <form action="{{url('gedung')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="form-label" for="nm_gedung"><b>Nama Gedung</b></label>
                        <input type="text" class="form-control" id="nm_gedung" name="gedung" placeholder="Input nama gedung...">
                    </div><br><br>
                    <button type="submit" class="btn btn-primary">Tambahkan</button>
                </form>
            </div>
         </div>
      </div>
@endsection