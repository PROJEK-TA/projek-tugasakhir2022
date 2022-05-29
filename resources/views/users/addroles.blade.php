@extends('layouts.index')
@section('title','Tambah Data Roles')

@section('content')
<div class="col-sm-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Tambah Jabatan</h4>
               </div>
            </div>
            <div class="card-body">
                <form action="{{url('roleuser')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="form-label" for="nm_roles"><b>Nama Jabatan</b></label>
                        <input type="text" class="form-control" id="nm_roles" name="roleuser" placeholder="Input nama jabatan...">
                    </div><br><br>
                    <button type="submit" class="btn btn-primary">Tambahkan</button>
                </form>
            </div>
         </div>
      </div>
@endsection