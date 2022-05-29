@extends('layouts.index')
@section('title','Data Ruangan')

@section('content')
<div class="col-sm-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Daftar Ruangan</h4>
               </div>
            </div>
            <div class="card-body">
               <form action="{{route('ruangan.create')}}" method="GET">
                  <button type="submit" class="btn btn-success">Tambah Ruangan</button>
               </form>
               <br><br>
               <div class="table-responsive">
                  <table id="datatable" class="table table-striped" data-toggle="data-table">
                     <thead>
                        <tr>
                           <th>NO</th>
                           <th>KODE RUANGAN</th>
                           <th>NAMA RUANGAN</th>
                           <th>KATEGORI</th>
                           <th>GUDANG</th>
                           <th>AKSI</th>
                        </tr>
                     </thead>
                     <tbody>
                     @foreach($room as $r)
                        <tr>
                           <td>{{$loop->iteration}}</td>
                           <td>{{$r->id}}</td>
                           <td>{{$r->nama_ruangan}}</td>
                           <td>{{$r->roomcategory->nama_kategruangan}}</td>
                           <td>{{$r->building->nama_gedung}}</td>
                           <td>
                            
                           </td>
                        </tr>
                        @endforeach
                  </table><br>
                  <button type="button" class="btn btn-primary">Print</button>
                </div>
            </div>
         </div>
      </div>
@endsection