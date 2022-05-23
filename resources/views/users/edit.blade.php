@extends('layouts.index')
@section('title','Edit Data User')

@section('content')
<div class="col-sm-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Edit User</h4>
               </div>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label class="form-label" for="id_user"><b>ID User</b></label>
                        <input type="text" class="form-control" id="id_user" placeholder="Input id user...">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="nm_user"><b>Nama User</b></label>
                        <input type="text" class="form-control" id="nm_user" placeholder="Input nama user...">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="email"><b>Email</b></label>
                        <input type="email" class="form-control" id="email" value="ex: markjhon@gmail.com" placeholder="Input email...">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="alamat"><b>Alamat</b></label>
                        <input type="text" class="form-control" id="alamat" placeholder="Input alamat...">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="telp"><b>Kontak</b></label>
                        <input type="tel" class="form-control" id="telp" value="ex: 087827361234" placeholder="Input kontak...">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="role"><b>Role</b></label>
                        <input type="text" class="form-control" id="role" placeholder="Input role...">
                    </div><br><br>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
         </div>
      </div>
@endsection