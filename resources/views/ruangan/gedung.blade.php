@extends('layouts.index')
@section('title','Data Gedung')

@section('content')
<div class="col-sm-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Daftar Gedung</h4>
               </div>
            </div>
            <div class="card-body">
               <form action="{{route('gedung.create')}}" method="GET">
                  <button type="submit" class="btn btn-success">Tambah Gedung</button>
               </form>
               <br><br>
               <div class="table-responsive">
                  <table id="datatable" class="table table-striped" data-toggle="data-table">
                     <thead>
                        <tr>
                           <th>NO</th>
                           <th>KODE GEDUNG</th>
                           <th>GEDUNG</th>
                           <th>AKSI</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($building as $bd)
                        <tr>
                           <td>{{$loop->iteration}}</td>
                           <td>{{$bd->id}}</td>
                           <td>{{$bd->nama_gedung}}</td>
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