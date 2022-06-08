@extends('layouts.index')
@section('title','Profil User')

@section('content')

<div class="col-sm-12">
    <div class="card">
        <div class="card-body">
            <div class="d-flex flex-wrap align-items-center justify-content-between">
                <div class="d-flex flex-wrap align-items-center">
                <div class="profile-img position-relative me-3 mb-3 mb-lg-0 profile-logo profile-logo1">
                    <img src="../../assets/images/avatars/01.png" alt="User-Profile" class="theme-color-default-img img-fluid rounded-pill avatar-100">
                    <img src="../../assets/images/avatars/avtar_1.png" alt="User-Profile" class="theme-color-purple-img img-fluid rounded-pill avatar-100">
                    <img src="../../assets/images/avatars/avtar_2.png" alt="User-Profile" class="theme-color-blue-img img-fluid rounded-pill avatar-100">
                    <img src="../../assets/images/avatars/avtar_4.png" alt="User-Profile" class="theme-color-green-img img-fluid rounded-pill avatar-100">
                    <img src="../../assets/images/avatars/avtar_5.png" alt="User-Profile" class="theme-color-yellow-img img-fluid rounded-pill avatar-100">
                    <img src="../../assets/images/avatars/avtar_3.png" alt="User-Profile" class="theme-color-pink-img img-fluid rounded-pill avatar-100">
                </div>
                <div class="d-flex flex-wrap align-items-center mb-3 mb-sm-0">
                    <h4 class="me-2 h4">{{Auth::user()->name}}</h4>
                    <span> - {{Auth::user()->jabatan->nama_jabatan}}</span>
                </div>
                </div><br>
                <div class="header-title">
                    <h4 class="card-title">Edit Profil</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
            <div class="card-body">
                {{-- <form action="{{ url('userprofile/'.$userprofile->id)}}" method="POST" enctype="multipart/form-data"> --}}
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <label class="form-label" for="nm_user"><b>Nama User</b></label>
                        <input type="text" class="form-control" id="nm_user" name="name" value="{{ Auth::user()->name }}" placeholder="Input nama user...">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="email"><b>Email</b></label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}" placeholder="Input email...">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="password"><b>Password</b></label>
                        <input id="password" type="password" class="form-control " name="password" value="{{ Auth::user()->password }}" placeholder="Input password..." required autocomplete="new-password">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="alamat"><b>Alamat</b></label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="{{ Auth::user()->alamat }}" placeholder="Input alamat...">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="telp"><b>Kontak</b></label>
                        <input type="tel" class="form-control" id="telp" name="kontak" value="{{ Auth::user()->kontak }}" placeholder="Input kontak...">
                    </div>
                    <div class="form-group">
                        {{-- <label class="form-label" for="jabatan"><b>Jabatan</b></label>
                        <input type="text" class="form-control" id="id_jabatan" name="id_jabatan" value="{{ Auth::user()->jabatan->nama_jabatan }}"> --}}

                        <label class="form-label"><b>Jabatan</b></label>
                        <select class="form-select mb-3 shadow-none" name="id_jabatan" id="id_jabatan">
                            <option disabled value>Jabatan...</option>
                            <option value="{{ Auth::user()->id_jabatan }}">{{ Auth::user()->jabatan->nama_jabatan }}</option>
                            {{-- @foreach ($jab as $j)
                            <option value="{{ $j->id }}">{{ $j->nama_jabatan}}</option>
                            @endforeach --}}
                        </select>

                    </div><br><br>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
    </div>
@endsection