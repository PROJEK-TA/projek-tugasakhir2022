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
            <form action="{{route('barang.create')}}" method="GET">
               <button type="submit" class="btn btn-success">Tambah Barang</button>
            </form>
            <br><br>
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
                           <th>TANGGAL INPUT</th>
                           <th>AKSI</th>
                        </tr>
                     </thead>
                     <tbody>
                     @foreach($barang as $b)
                        <tr>
                           <td>{{$loop->iteration}}</td>
                           <td>{{$b->id}}</td>
                           <td>{{$b->nama_barang}}</td>
                           <td>{{$b->merk}}</td>
                           <td>{{$b->productcategory->nama_kategbarang}}</td>
                           <td>{{$b->ruangan->nama_ruangan}}</td>
                           <td>{{$b->departemen->nama_departemen}}</td>
                           <td>{{$b->harga_beli}}</td>
                           <td>{{$b->jumlah}}</td>
                           <td>{{$b->satuan}}</td>
                           <td>{{$b->status->nama_statusbarang}}</td>
                           <td>{{$b->tanggal_input}}</td>
                           <td>
                           </td>
                        </tr>
                        @endforeach
                     </tbody>
         
                  </table>
                  <br>
                  <button type="button" class="btn btn-primary">Print</button>
               </div>
            </div>
         </div>
      </div>
@endsection