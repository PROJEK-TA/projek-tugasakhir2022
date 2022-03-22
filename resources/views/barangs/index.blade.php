@extends('layouts.index')
@section('title','Data Barang')

@section('content')
<div class="col-sm-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Daftar Barang</h4>
               </div>
            </div>
         <div class="card-body">
            <button type="button" class="btn btn-success">Tambah Barang</button>
            <br><br>
               <div class="table-responsive">
                  <table id="datatable" class="table table-striped" data-toggle="data-table">
                     <thead>
                        <tr>
                           <th>NO</th>
                           <th>KODE BARANG</th>
                           <th>NAMA BARANG</th>
                           <th>MERK</th>
                           <th>KATEGORI</th>
                           <th>LOKASI</th>
                           <th>OWNER</th>
                           <th>HARGA BELI</th>
                           <th>JUMLAH</th>
                           <th>STATUS</th>
                           <th>TANGGAL INPUT</th>
                           <th>AKSI</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>1</td>
                           <td>BR001</td>
                           <td>Laptop</td>
                           <td>Lenovo</td>
                           <td>Barang Elektronik</td>
                           <td>Ruang Meeting</td>
                           <td>Departemen A</td>
                           <td>Rp. 15.000.000</td>
                           <td>5</td>
                           <td><span class="badge rounded-pill bg-success">Tersedia</span></td>
                           <td>20/11/2021/13:11</td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>2</td>
                           <td>BR002</td>
                           <td>Kursi Kantor</td>
                           <td>Ikea</td>
                           <td>Mebel</td>
                           <td>Ruang Meeting</td>
                           <td>Departemen A</td>
                           <td>Rp. 800.000</td>
                           <td>15</td>
                           <td><span class="badge rounded-pill bg-warning text-dark">Rusak</span></td>
                           <td>21/11/2021/13:11</td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>3</td>
                           <td>BR003</td>
                           <td>AC</td>
                           <td>Panasonic</td>
                           <td>Barang Elektronik</td>
                           <td>Ruang Laboratorium</td>
                           <td>Departemen C</td>
                           <td>Rp. 2.500.000</td>
                           <td>10</td>
                           <td><span class="badge rounded-pill bg-info text-dark">Diservis</span></td>
                           <td>22/11/2021/13:11</td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>4</td>
                           <td>BR004</td>
                           <td>Mobil</td>
                           <td>Toyota</td>
                           <td>Alat Transportasi</td>
                           <td>Parkir 1</td>
                           <td>Departemen D</td>
                           <td>Rp. 50.000.000</td>
                           <td>4</td>
                           <td><span class="badge rounded-pill bg-primary">Dipinjam</span></td>
                           <td>23/11/2021/13:11</td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>5</td>
                           <td>BR005</td>
                           <td>Pompa Air</td>
                           <td>Sanyo</td>
                           <td>Mesin</td>
                           <td>Gudang A</td>
                           <td>Departemen E</td>
                           <td>Rp. 1.750.000</td>
                           <td>10</td>
                           <td><span class="badge rounded-pill bg-danger">Hilang</span></td>
                           <td>24/11/2021/13:11</td>
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