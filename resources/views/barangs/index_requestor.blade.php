@extends('layouts.index')
@section('title','Data Barang')

@section('content')
<div class="col-sm-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div class="header-title">
                <h4 class="card-title">Daftar Barang</h4>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatable" class="table table-striped" data-toggle="data-table">
                    <thead>
                        <tr>
                           <th>NO</th>
                           <th>KODE BARANG</th>
                           <th>NAMA BARANG</th>
                           <th>MERK</th>
                           <th>KATEGORI</th>
                           <th>LOKASI</th>
                           <th>OWNER</th>
                           <th>HARGA BELI</th>
                           <th>JUMLAH</th>
                           <th>SATUAN</th>
                           <th>STATUS</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($requestorbarang as $rb)
                        <tr>
                           <td>{{$loop->iteration}}</td>
                           <td>{{$rb->kode_barang}}</td>
                           <td>{{$rb->nama_barang}}</td>
                           <td>{{$rb->merek->nama_merkbarang}}</td>
                           <td>{{$rb->productcategory->nama_kategbarang}}</td>
                           <td>{{$rb->lokasi->nama_lokasibarang}}</td>
                           <td>{{$rb->departemen->nama_departemen}}</td>
                           <td>{{$rb->harga_beli}}</td>
                           <td>{{$rb->jumlah}}</td>
                           <td>{{$rb->satuan}}</td>
                           <td>{{$rb->status->nama_statusbarang}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <br>
                <a href="/cetak_barangrequestor" button type="button" class="btn btn-primary">Print</button></a>
            </div>
        </div>
    </div>
</div>
@endsection