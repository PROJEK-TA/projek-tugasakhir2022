@extends('layouts.index')
@section('title','Data Kategori Ruangan')

@section('content')
<div class="col-sm-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Daftar Kategori Ruangan</h4>
               </div>
            </div>
            <div class="card-body">
               <form action="{{route('kategoriruangan.create')}}" method="GET">
                  <button type="submit" class="btn btn-success">Tambah Kategori</button>
               </form>
               <br><br>
               <div class="table-responsive">
                  <table id="datatable" class="table table-striped" data-toggle="data-table">
                     <thead>
                        <tr>
                           <th>NO</th>
                           <th>KODE KATEGORI</th>
                           <th>KATEGORI</th>
                           <th>AKSI</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($kategori as $k)
                        <tr>
                           <td>{{$loop->iteration}}</td>
                           <td>{{$k->id}}</td>
                           <td>{{$k->nama_kategruangan}}</td>
                           <td></td>
                        </tr>
                        @endforeach
                    </table><br>
                    <button type="button" class="btn btn-primary">Print</button>
                </div>
            </div>
         </div>
      </div>
@endsection