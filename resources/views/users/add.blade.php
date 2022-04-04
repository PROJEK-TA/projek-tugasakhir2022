@extends('layouts.index')
@section('title','Tambah Data User')

@section('content')
<div class="col-sm-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Tambah User</h4>
               </div>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label class="form-label" for="id_user">ID User</label>
                        <input type="text" class="form-control" id="id_user1">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="nm_user">Nama User</label>
                        <input type="text" class="form-control" id="nm_user1">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="email">Email</label>
                        <input type="email" class="form-control" id="email1">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat1">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="telp">Kontak</label>
                        <input type="text" class="form-control" id="telp1">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="role">Role</label>
                        <input type="text" class="form-control" id="role1">
                    </div><br><br>
                    <button type="submit" class="btn btn-primary">Tambahkan</button>
                </form>
            </div>
         </div>
      </div>
@endsection