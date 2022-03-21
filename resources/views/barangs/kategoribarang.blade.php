@extends('layouts.index')
@section('title','Data Kategori Barang')

@section('content')
<div class="col-sm-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Daftar Kategori Barang</h4>
               </div>
            </div>
            <div class="card-body">
               <button type="button" class="btn btn-success">Tambah Kategori</button><br><br>
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
                        <tr>
                           <td>1</td>
                           <td>KB01</td>
                           <td>Barang Elektronik</td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>2</td>
                           <td>KB02</td>
                           <td>Mesin</td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>3</td>
                           <td>KB03</td>
                           <td>Mebel</td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>4</td>
                           <td>KB04</td>
                           <td>Alat Transportasi</td>
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