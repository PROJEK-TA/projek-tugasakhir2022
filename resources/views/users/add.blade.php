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
            <form action="{{route('kelolausers.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="form-label" for="nm_user"><b>Nama User</b></label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Input nama..." value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="email"><b>Email</b></label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Input email..." value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="password"><b>Password</b></label>
                        <input id="password" type="password" class="form-control " name="password" placeholder="Input password..." required autocomplete="new-password">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="telp"><b>Kontak</b></label>
                        <input type="tel" class="form-control" id="telp" value="ex: 087827361234" name="kontak" placeholder="Input kontak...">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="alamat"><b>Alamat</b></label>
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Input alamat...">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="role"><b>Jabatan</b></label>
                        <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Input jabatan...">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="role"><b>Role</b></label>
                        <input type="text" class="form-control" id="role" name="role" placeholder="Input role...">
                    </div><br><br>
                    <button type="submit" class="btn btn-primary">Tambahkan</button>
                </form>
            </div>
         </div>
      </div>
@endsection