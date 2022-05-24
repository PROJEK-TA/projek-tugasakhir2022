@extends('layouts.index')
@section('title','Edit Data Gedung')

@section('content')
<div class="col-sm-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Edit Gedung</h4>
               </div>
            </div>
            <div class="card-body">
                <form action="{{ url('gedung/'.$building->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <label class="form-label" for="nm_gedung"><b>Nama Gedung</b></label>
                        <input type="text" class="form-control" id="nm_gedung" name="gedung" value="{{ $building->nama_gedung }}" placeholder="Input nama gedung...">
                    </div><br><br>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
         </div>
      </div>
@endsection