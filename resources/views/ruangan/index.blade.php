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
               <button type="button" class="btn btn-success">Tambah Ruangan</button><br><br>
               <div class="table-responsive">
                  <table id="datatable" class="table table-striped" data-toggle="data-table">
                     <thead>
                        <tr>
                           <th>NO</th>
                           <th>KODE RUANGAN</th>
                           <th>NAMA RUANGAN</th>
                           <th>KATEGORI</th>
                           <th>LANTAI</th>
                           <th>GEDUNG</th>
                           <th>AKSI</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>1</td>
                           <td>R001</td>
                           <td>Ruang Laboraturium 1</td>
                           <td>Laboraturium</td>
                           <td>1</td>
                           <td>Gedung A</td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>2</td>
                           <td>R002</td>
                           <td>Ruang Produksi</td>
                           <td>Produksi</td>
                           <td>2</td>
                           <td>Gedung B</td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>3</td>
                           <td>R003</td>
                           <td>Gudang 1</td>
                           <td>Gudang</td>
                           <td>1</td>
                           <td>Gedung C</td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>4</td>
                           <td>R004</td>
                           <td>Ruang Meeting</td>
                           <td>Meeting</td>
                           <td>3</td>
                           <td>Gedung D</td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>5</td>
                           <td>R005</td>
                           <td>Ruang Tamu</td>
                           <td>Guest Room</td>
                           <td>2</td>
                           <td>Gedung E</td>
                           <td></td>
                        </tr>
                  </table>
                </div>
            </div>
         </div>
      </div>
@endsection