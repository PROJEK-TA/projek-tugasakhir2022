@extends('layouts.index')
@section('title','Daftar Roles')

@section('content')
<div class="col-sm-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Daftar Roles</h4>
               </div>
            </div>
            <div class="card-body">
               <form action="{{route('roleuser.create')}}" method="GET">
                  <button type="submit" class="btn btn-success">Tambah Role</button>
               </form>
               <br><br>
               <div class="table-responsive">
                  <table id="datatable" class="table table-striped" data-toggle="data-table">
                     <thead>
                        <tr>
                           <th>NO</th>
                           <th>ID ROLE</th>
                           <th>ROLE</th>
                           <th>AKSI</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($peran as $pr)
                        <tr>
                           <td>{{$loop->iteration}}</td>
                           <td>{{$pr->id}}</td>
                           <td>{{$pr->nama_role}}</td>
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