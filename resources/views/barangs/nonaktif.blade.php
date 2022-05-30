@extends('layouts.index')
@section('title','Data Nonaktif')

@section('content')
<div class="col-sm-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Daftar Barang Nonaktif</h4>
               </div>
            </div>
         <div class="card-body">
            <button type="button" class="btn btn-success">Tambah Barang Nonaktif</button>
            <br><br>
               <div class="table-responsive">
                  <table id="datatable" class="table table-striped" data-toggle="data-table">
                     <thead>
                        <tr>
                           <th>NO</th>
                           <th>KODE NONAKTIF</th>
                           <th>NAMA BARANG</th>
                           <th>MERK</th>
                           <th>JUMLAH</th>
                           <th>STATUS</th>
                           <th>TANGGAL NONAKTIF</th>
                           <th>AKSI</th>
                        </tr>
                     </thead>
                     <tbody>
                     @foreach($nonaktif as $n)
                        <tr>
                           <td>{{$loop->iteration}}</td>
                           <td>{{$n->id}}</td>
                           <td>{{$n->barang->nama_barang}}</td>
                           <td>{{$n->barang->merk}}</td>
                           <td>{{$n->jumlah}}</td>
                           <td>{{$n->status->nama_status}}</td>
                           <td>{{$n->tanggal_nonaktif}}</td>
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