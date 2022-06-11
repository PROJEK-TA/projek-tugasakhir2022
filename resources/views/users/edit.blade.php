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
            <form action="{{ url('kelolausers/'.$user->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <div class="form-group">
                    <label class="form-label" for="kd_user"><b>Kode User</b></label>
                    <input type="text" class="form-control" id="kd_user" name="kode_user" value="{{ $user->kode_user }}"
                        readonly>
                </div>
                <div class="form-group">
                    <label class="form-label" for="nm_user"><b>Nama User</b></label>
                    <input type="text" class="form-control" id="nm_user" name="name" value="{{ $user->name }}"
                        placeholder="Input nama user...">
                </div>
                <div class="form-group">
                    <label class="form-label" for="email"><b>Email</b></label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}"
                        placeholder="Input email...">
                </div>
                <div class="form-group">
                    <label class="form-label" for="password"><b>Password</b></label>
                    <input id="password" type="password" class="form-control " name="password"
                        value="{{ $user->password }}" placeholder="Input password..." required
                        autocomplete="new-password">
                </div>
                <div class="form-group">
                    <label class="form-label" for="alamat"><b>Alamat</b></label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $user->alamat }}"
                        placeholder="Input alamat...">
                </div>
                <div class="form-group">
                    <label class="form-label" for="telp"><b>Kontak</b></label>
                    <input type="tel" class="form-control" id="telp" name="kontak" value="{{ $user->kontak }}"
                        placeholder="Input kontak...">
                </div>
                <div class="form-group">
                    <label class="form-label"><b>Jabatan</b></label>
                    <select class="form-select mb-3 shadow-none" name="id_jabatan" id="id_jabatan">
                        <option disabled value>Jabatan...</option>
                        <option value="{{ $user->id_jabatan }}">{{ $user->jabatan->nama_jabatan }}</option>
                        @foreach ($jab as $j)
                        <option value="{{ $j->id }}">{{ $j->nama_jabatan}}</option>
                        @endforeach
                    </select>
                </div><br><br>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection