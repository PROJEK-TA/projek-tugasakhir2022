@extends('layouts.index')
@section('title','Data Servis Barang')

@section('content')
<div class="col-sm-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                  <h4 class="card-title">Daftar Servis Barang</h4>
                </div>
            </div>
            <div class="card-body">
            <div class="card-body">
            <button type="button" class="btn btn-success">Tambah Servis</button>
            <br><br>
               <div class="table-responsive">
                  <table id="datatable" class="table table-striped" data-toggle="data-table">
                     <thead>
                        <tr>
                           <th>NO</th>
                           <th>KODE SERVIS</th>
                           <th>NAMA BARANG</th>
                           <th>MERK</th>
                           <th>DESKRIPSI</th>
                           <th>JUMLAH</th>
                           <th>NAMA PETUGAS</th>
                           <th>TANGGAL SERVIS</th>
                           <th>TANGGAL KEMBALI</th>
                           <th>AKSI</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                            <td>1</td>
                            <td>SV000001</td>
                            <td>Laptop</td>
                            <td>Lenovo</td>
                            <td>Blue Screen</td>
                            <td>2</td>
                            <td>Ricky Wijaya</td>
                            <td>21/11/2021/15:40</td>
                            <td>24/11/2021/07:40</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>SV000002</td>
                            <td>Kursi Kantor</td>
                            <td>Ikea</td>
                            <td>Patah</td>
                            <td>7</td>
                            <td>Auliya Oni</td>
                            <td>21/11/2021/15:40</td>
                            <td>24/11/2021/07:40</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>SV000003</td>
                            <td>AC</td>
                            <td>Panasonic</td>
                            <td>Dingin Tidak Terasa</td>
                            <td>1</td>
                            <td>Elizabeth Teresa</td>
                            <td>21/11/2021/15:40</td>
                            <td>24/11/2021/07:40</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>SV000004</td>
                            <td>Mobil</td>
                            <td>Toyota</td>
                            <td>Mogok</td>
                            <td>1</td>
                            <td>Flamboyan Dwi Cahyo</td>
                            <td>21/11/2021/15:40</td>
                            <td>24/11/2021/07:40</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>SV000005</td>
                            <td>Pompa Air</td>
                            <td>Sanyo</td>
                            <td>Pompa Rusak</td>
                            <td>2</td>
                            <td>Ahmad Ridlo Suhardi</td>
                            <td>21/11/2021/15:40</td>
                            <td>24/11/2021/07:40</td>
                            <td></td>
                        </tr>
                        
                    </table>
                </div><br>
              
                        <button type="button" class="btn btn-primary">Print</button>
                    </div>
            </div>
         </div>
      </div>
@endsection