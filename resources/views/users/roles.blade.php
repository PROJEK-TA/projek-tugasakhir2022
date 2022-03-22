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
               <button type="button" class="btn btn-success">Tambah Roles</button><br><br>
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
                        <tr>
                           <td>1</td>
                           <td>RL01</td>
                           <td>Kepala Bagian</td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>2</td>
                           <td>RL02</td>
                           <td>Sekretaris</td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>3</td>
                           <td>RL03</td>
                           <td>Staf Pengelola Barang</td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>4</td>
                           <td>RL04</td>
                           <td>Staf Pengelola Ruangan</td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>5</td>
                           <td>RL05</td>
                           <td>Admin</td>
                           <td></td>
                        </tr>
                    </table><br>
                    <button type="button" class="btn btn-primary">Print</button>
                </div>
            </div>
         </div>
      </div>
@endsection