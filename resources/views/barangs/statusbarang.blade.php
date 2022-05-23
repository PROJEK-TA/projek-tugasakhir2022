@extends('layouts.index')
@section('title','Data Status Barang')

@section('content')
<div class="col-sm-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Daftar Status Barang</h4>
               </div>
            </div>
            <div class="card-body">
            <form action="{{route('statusbarang.create')}}" method="GET">
               <button type="submit" class="btn btn-success">Tambah Status</button><br><br>
            </form>
               <div class="table-responsive">
                  <table id="datatable" class="table table-striped" data-toggle="data-table">
                  <thead>
                        <tr>
                           <th>NO</th>
                           <th>KODE STATUS</th>
                           <th>STATUS</th>
                           <th>AKSI</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($statusprod as $s)
                        <tr>
                           <td>{{$loop->iteration}}</td>
                           <td>{{$s->id}}</td>
                           <td>{{$s->nama_statusbarang}}</td>
                           <td></td>
                        </tr>
                        @endforeach
                        
                    </table>
                    <br>
                    <button type="button" class="btn btn-primary">Print</button>
                </div>
            </div>
         </div>
      </div>
@endsection