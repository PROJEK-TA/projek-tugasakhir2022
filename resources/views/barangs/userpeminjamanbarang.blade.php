@extends('layouts.index')
@section('title','Ajukan Peminjaman Barang')

@section('content')
<div class="col-sm-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Ajukan Peminjaman Barang</h4>
               </div>
            </div>
            <div class="card-body">
                <form action="{{route('ajukanpinjambarang.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="form-label" for="kd_peminjaman"><b>Kode Peminjaman</b></label>
                        <input type="text" class="form-control" id="kd_peminjaman" name="id" placeholder="dibangkitkan otomatis" readonly>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="nm_barang"><b>Nama Peminjam</b></label>
                        <input type="text" class="form-control" id="nm_barang" name="nama_peminjam" value="{{Auth::user()->name}}" placeholder="Input nama barang..." readonly>
                    </div>
                    <div class="form-group">
                        <label class="form-label"><b>Nama Barang</b></label>
                        <select class="form-select mb-3 shadow-none" name="nama_barang" id="id_barang">
                            <option selected="">Pilih Barang...</option>
                            <?php 
                                    $barang = DB::table('products')->get();
                            ?>
                            @foreach ($barang as $b)
                            <option value="{{ $b->id }}">{{ $b->nama_barang }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label"><b>Merk Barang</b></label>
                        <select class="form-select mb-3 shadow-none" name="merk_barang" id="id_barang">
                            <option selected="">Pilih Merek...</option>
                            <?php 
                                    $merk = DB::table('merk_products')->get();
                            ?>
                            @foreach ($merk as $m)
                            <option value="{{ $m->id }}">{{ $m->nama_merkbarang }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label"><b>Lokasi</b></label>
                        <select class="form-select mb-3 shadow-none" name="nama_lokasi" id="id_barang">
                            <option selected="">Pilih Lokasi...</option>
                            <?php 
                                    $lokasi = DB::table('location_products')->get();
                            ?>
                            @foreach ($lokasi as $l)
                            <option value="{{ $l->id }}">{{ $l->nama_lokasibarang}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label"><b>Milik</b></label>
                        <select class="form-select mb-3 shadow-none" name="departemen" id="id_barang">
                            <option selected="">Pilih Departemen...</option>
                            <?php 
                                    $departemen = DB::table('departments')->get();
                            ?>
                            @foreach ($departemen as $d)
                            <option value="{{ $d->id }}">{{ $d->nama_departemen }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="jm_barang"><b>Jumlah</b></label>
                        <input type="text" class="form-control" id="jm_barang" name="jumlah" placeholder="Input jumlah barang...">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="nm_peminjam"><b>Deskripsi</b></label>
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Input deskripsi keperluan...">
                    </div>
                   
                    <div class="form-group">
                        <label class="form-label" for="tgl_dipinjam"><b>Tanggal Pinjam</b></label>
                        <input type="date" class="form-control" id="tgl_dipinjam" name="tanggal_pinjam" >
                    </div>
                    <!-- <div class="form-group">
                        <label class="form-label" for="tgl_dipinjam"><b>Jatuh Tempo</b></label>
                        <input type="date" class="form-control" id="tgl_dipinjam" value="2021-12-18">
                    </div> -->
                    <div class="form-group">
                        <label class="form-label" for="tgl_kembali"><b>Tanggal Dikembalikan</b></label>
                        <input type="date" class="form-control" id="tgl_kembali" name="tanggal_kembali" >
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="status"><b>Status</b></label>
                        <input type="text" class="form-control" name="status" value=diajukan readonly>
                    </div><br><br>
                    <button type="submit" class="btn btn-primary">Ajukan</button>
                </form>
            </div>
         </div>
      </div>
@endsection