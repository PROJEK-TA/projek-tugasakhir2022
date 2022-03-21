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
               <button type="button" class="btn btn-success">Tambah Status</button><br><br>
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
                        <tr>
                           <td>1</td>
                           <td>S01</td>
                           <td><div class="text-success">Tersedia</div></td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>2</td>
                           <td>S02</td>
                           <td><div class="text-warning">Rusak</div></td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>3</td>
                           <td>S03</td>
                           <td><div class="text-warning">Diservis</div></td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>4</td>
                           <td>S04</td>
                           <td><div class="text-info">Dipinjam</div></td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>5</td>
                           <td>S05</td>
                           <td><div class="text-danger">Hilang</div></td>
                           <td></td>
                        </tr>
                    </table>
                    <br>
                    <button type="button" class="btn btn-primary">Print</button>
                </div>
            </div>
         </div>
      </div>
@endsection