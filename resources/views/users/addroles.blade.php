@extends('layouts.index')
@section('title','Tambah Data Roles')

@section('content')
<div class="col-sm-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Tambah Roles</h4>
               </div>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label class="form-label" for="kd_roles"><b>Kode Roles</b></label>
                        <input type="text" class="form-control" id="kd_roles" placeholder="Input kode roles...">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="nm_roles"><b>Nama Roles</b></label>
                        <input type="text" class="form-control" id="nm_roles" placeholder="Input nama roles...">
                    </div><br><br>
                    <button type="submit" class="btn btn-primary">Tambahkan</button>
                </form>
            </div>
         </div>
      </div>
@endsection