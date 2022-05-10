@extends('layouts.index')
@section('title','Data Departemen')

@section('content')
<div class="col-sm-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Daftar Departemen</h4>
               </div>
            </div>
            <div class="card-body">
               <form action="{{route('departemen.create')}}" method="GET">
                  <button type="submit" class="btn btn-success">Tambah Departemen</button>
               </form>
               <br><br>
               <div class="table-responsive">
                  <table id="datatable" class="table table-striped" data-toggle="data-table">
                     <thead>
                        <tr>
                           <th>NO</th>
                           <th>KODE DEPARTEMEN</th>
                           <th>NAMA DEPARTEMEN</th>
                           <th>AKSI</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($department as $dp)
                        <tr>
                           <td>{{$loop->iteration}}</td>
                           <td>{{$dp->id}}</td>
                           <td>{{$dp->nama_departemen}}</td>
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