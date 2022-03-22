@extends('layouts.index')
@section('title','Kelola Data User')

@section('content')
<div class="col-sm-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Kelola User</h4>
               </div>
            </div>
            <div class="card-body">
                <button type="button" class="btn btn-success">Tambah User</button><br><br>
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped" data-toggle="data-table">
                    <thead>
                        <tr>
                           <th>NO</th>
                           <th>ID USER</th>
                           <th>NAMA USER</th>
                           <th>EMAIL</th>
                           <th>KONTAK</th>
                           <th>ALAMAT</th>
                           <th>ROLE</th>
                           <th>AKSI</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>1</td>
                           <td>US01</td>
                           <td>Gita Kartika Pariwara</td>
                           <td>teresagita25@gmail.com</td>
                           <td>081772628391</td>
                           <td>Jl. Olean Tengah, Situbondo</td>
                           <td>Kepala Bagian</td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>2</td>
                           <td>US02</td>
                           <td>Evita Putri Nauli Simanungkalit</td>
                           <td>evitaputri@gmail.com</td>
                           <td>087867920117</td>
                           <td>Jl. Delta Sari, Sidoarjo</td>
                           <td>Sekretaris</td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>3</td>
                           <td>US03</td>
                           <td>Sahira Rana Zafirah</td>
                           <td>sahirarana@gmail.com</td>
                           <td>0856417833</td>
                           <td>Jl. Manyar Barat, Surabaya</td>
                           <td>Staff Pengelola Barang</td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>4</td>
                           <td>US04</td>
                           <td>Ahmad Ridlo Suhardi</td>
                           <td>ridlosu@gmail.com</td>
                           <td>08787697547</td>
                           <td>Jl. Semanggi Barat, Gresik</td>
                           <td>Staff Pengelola Ruangan</td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>5</td>
                           <td>US05</td>
                           <td>Auliya Oni</td>
                           <td>oniauliya@gmail.com</td>
                           <td>081998788678</td>
                           <td>Jl. Bunga Mawar, Probolinggo</td>
                           <td>Admin</td>
                           <td></td>
                        </tr>
                  </table>
                </div>
            </div>
         </div>
      </div>
@endsection