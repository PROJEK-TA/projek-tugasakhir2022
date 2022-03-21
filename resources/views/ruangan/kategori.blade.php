@extends('layouts.index')
@section('title','Data Ruangan')

@section('content')
<div class="col-sm-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Daftar Kategori Ruangan</h4>
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
                           <td>KR01</td>
                           <td>Laboraturium</td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>2</td>
                           <td>KR02</td>
                           <td>Produksi</td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>3</td>
                           <td>KR03</td>
                           <td>Gudang</td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>4</td>
                           <td>KR04</td>
                           <td>Meeting</td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>5</td>
                           <td>KR05</td>
                           <td>Guest Room</td>
                           <td></td>
                        </tr>
                    </table><br>
                    <button type="button" class="btn btn-primary">Print</button>
                </div>
            </div>
         </div>
      </div>
@endsection