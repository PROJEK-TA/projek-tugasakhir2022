@extends('layouts.index')
@section('title','Data Nonaktif')

@section('content')
<div class="col-sm-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Daftar Barang Nonaktif</h4>
               </div>
            </div>
         <div class="card-body">
            <button type="button" class="btn btn-success">Tambah Barang Nonaktif</button>
            <br><br>
               <div class="table-responsive">
                  <table id="datatable" class="table table-striped" data-toggle="data-table">
                     <thead>
                        <tr>
                           <th>NO</th>
                           <th>KODE NONAKTIF</th>
                           <th>NAMA BARANG</th>
                           <th>MERK</th>
                           <th>JUMLAH</th>
                           <th>STATUS</th>
                           <th>TANGGAL NONAKTIF</th>
                           <th>AKSI</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>1</td>
                           <td>NF001</td>
                           <td>Laptop</td>
                           <td>Lenovo</td>
                           <td>2</td>
                           <td><span class="badge rounded-pill bg-warning">Rusak</span></td>
                           <td>20/11/2021/13:11</td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>2</td>
                           <td>NF002</td>
                           <td>Kursi Kantor</td>
                           <td>Ikea</td>
                           <td>2</td>
                           <td><span class="badge rounded-pill bg-warning">Rusak</span></td>
                           <td>20/11/2021/13:11</td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>3</td>
                           <td>NF003</td>
                           <td>AC</td>
                           <td>Panasonic</td>
                           <td>1</td>
                           <td><span class="badge rounded-pill bg-warning">Rusak</span></td>
                           <td>20/11/2021/13:11</td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>4</td>
                           <td>NF004</td>
                           <td>Mobil</td>
                           <td>Toyota</td>
                           <td>1</td>
                           <td><span class="badge rounded-pill bg-warning">Rusak</span></td>
                           <td>20/11/2021/13:11</td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>5</td>
                           <td>NF005</td>
                           <td>Pompa Air</td>
                           <td>Sanyo</td>
                           <td>2</td>
                           <td><span class="badge rounded-pill bg-warning">Rusak</span></td>
                           <td>20/11/2021/13:11</td>
                           <td></td>
                        </tr>
                     </tbody>
         
                  </table>
                  <br>
                  <button type="button" class="btn btn-primary">Print</button>
               </div>
            </div>
         </div>
      </div>
@endsection