@extends('layouts.index')
@section('title','Data Peminjaman Barang')

@section('content')
<div class="col-sm-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                  <h4 class="card-title">Daftar Peminjaman Barang</h4>
                </div>
            </div>
            <div class="card-body">
               <div class="table-responsive">
                  <table id="datatable" class="table table-striped" data-toggle="data-table">
                     <thead>
                        <tr>
                           <th>NO</th>
                           <th>KODE PINJAM</th>
                           <th>NAMA BARANG</th>
                           <th>MERK</th>
                           <th>LOKASI</th>
                           <th>OWNER</th>
                           <th>JUMLAH</th>
                           <th>NAMA PEMINJAM</th>
                           <th>TANGGAL PINJAM</th>
                           <th>TANGGAL KEMBALI</th>
                           <th>AKSI</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                            <td>1</td>
                            <td>PMB000001</td>
                            <td>Laptop</td>
                            <td>Lenovo</td>
                            <td>Ruang Meeting</td>
                            <td>Departemen A</td>
                            <td>2</td>
                            <td>Rio Dewanto</td>
                            <td>21/11/2021/15:40</td>
                            <td>24/11/2021/07:40</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>PMB000002</td>
                            <td>Kursi Kantor</td>
                            <td>Ikea</td>
                            <td>Ruang Meeting</td>
                            <td>Departemen B</td>
                            <td>7</td>
                            <td>Rani Kumbolo</td>
                            <td>20/11/2021/15:40</td>
                            <td>25/11/2021/07:40</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>PMB000003</td>
                            <td>AC</td>
                            <td>Panasonic</td>
                            <td>Ruang IT</td>
                            <td>DepartemenC</td>
                            <td>1</td>
                            <td>Raisa Anggraini</td>
                            <td>9/11/2021/15:40</td>
                            <td>19/11/2021/07:40</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>PMB000004</td>
                            <td>Mobil</td>
                            <td>Pajero Sport</td>
                            <td>Parkir 1</td>
                            <td>Departemen D</td>
                            <td>1</td>
                            <td>Abdullah</td>
                            <td>15/11/2021/15:40</td>
                            <td>18/11/2021/07:40</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>PMB000005</td>
                            <td>Pompa Air</td>
                            <td>Sanyo</td>
                            <td>Gudang A</td>
                            <td>Departemen E</td>
                            <td>3</td>
                            <td>Yoga Saputra</td>
                            <td>12/11/2021/15:40</td>
                            <td>17/11/2021/07:40</td>
                            <td></td>
                        </tr>
                    </table>
                </div><br>
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                      <h4 class="card-title">Riwayat Peminjaman</h4>
                    </div>
                </div>
                <div class="card-body">
                   <div class="table-responsive">
                      <table id="datatable" class="table table-striped" data-toggle="data-table">
                         <thead>
                            <tr>
                                <th>NO</th>
                                <th>KODE PINJAM</th>
                                <th>NAMA BARANG</th>
                                <th>MERK</th>
                                <th>LOKASI</th>
                                <th>OWNER</th>
                                <th>JUMLAH</th>
                                <th>NAMA PEMINJAM</th>
                                <th>TANGGAL PINJAM</th>
                                <th>TANGGAL KEMBALI</th>
                                <th>STATUS</th>
                             </tr>
                          </thead>
                          <tbody>
                             <tr>
                                 <td>1</td>
                                 <td>PMB0000001</td>
                                 <td>Laptop</td>
                                 <td>Lenovo</td>
                                 <td>Ruang Meeting</td>
                                 <td>Departemen A</td>
                                 <td>2</td>
                                 <td>Ricky Wijaya</td>
                                 <td>20/11/2021/15:40</td>
                                 <td>27/11/2021/07:40</td>
                                 <td><span class="badge rounded-pill bg-success">Dipinjam</span></td>
                             </tr>
                             <tr>
                                <td>2</td>
                                 <td>PMB0000002</td>
                                 <td>Kursi Kantor</td>
                                 <td>Ikea</td>
                                 <td>Ruang Meeting</td>
                                 <td>Departemen B</td>
                                 <td>7</td>
                                 <td>Munaroh</td>
                                 <td>7/11/2021/15:40</td>
                                 <td>17/11/2021/07:40</td>
                                 <td><span class="badge rounded-pill bg-success">Dipinjam</span></td>
                             </tr>
                             <tr>
                                <td>3</td>
                                 <td>PMB0000003</td>
                                 <td>AC</td>
                                 <td>Panasonic</td>
                                 <td>Ruang Laboratorium</td>
                                 <td>Departemen C</td>
                                 <td>1</td>
                                 <td>Elizabeth Teresa</td>
                                 <td>08/11/2021/15:40</td>
                                 <td>20/11/2021/07:40</td>
                                 <td><span class="badge rounded-pill bg-success">Dipinjam</span></td>
                             </tr>
                             <tr>
                                <td>4</td>
                                 <td>PMB0000004</td>
                                 <td>Mobil</td>
                                 <td>Toyota</td>
                                 <td>Parkir 1</td>
                                 <td>Departemen D</td>
                                 <td>1</td>
                                 <td>Elizabeth Subagio</td>
                                 <td>18/11/2021/15:40</td>
                                 <td>26/11/2021/07:40</td>
                                 <td><span class="badge rounded-pill bg-primary">Selesai</span></td>
                             </tr>
                             <tr>
                                <td>5</td>
                                 <td>PMB0000005</td>
                                 <td>Pompa Air</td>
                                 <td>Sanyo</td>
                                 <td>Gudang A</td>
                                 <td>Departemen E</td>
                                 <td>3</td>
                                 <td>Teresa Subagio</td>
                                 <td>15/11/2021/15:40</td>
                                 <td>30/11/2021/07:40</td>
                                 <td><span class="badge rounded-pill bg-primary">Selesai</span></td>
                             </tr>
                        </table><br>
                        <button type="button" class="btn btn-primary">Print</button>
                    </div>
            </div>
         </div>
      </div>
@endsection