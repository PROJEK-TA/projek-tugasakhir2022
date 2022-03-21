@extends('layouts.index')
@section('title','Data Departemen')

@section('content')
<div class="col-sm-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Daftar Departemen</h4>
               </div>
            </div>
            <div class="card-body">
               <button type="button" class="btn btn-success">Tambah Departemen</button><br><br>
               <div class="table-responsive">
                  <table id="datatable" class="table table-striped" data-toggle="data-table">
                     <thead>
                        <tr>
                           <th>NO</th>
                           <th>KODE DEPARTEMEN</th>
                           <th>NAMA DEPARTEMEN</th>
                           <th>AKSI</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>1</td>
                           <td>D01</td>
                           <td>Departemen IT</td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>2</td>
                           <td>D02</td>
                           <td>Departemen HRGA</td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>3</td>
                           <td>D03</td>
                           <td>Departemen Finance</td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>4</td>
                           <td>D04</td>
                           <td>Departemen Produksi</td>
                           <td></td>
                        </tr>
                  </table><br>
                  <button type="button" class="btn btn-primary">Print</button>
                </div>
            </div>
         </div>
      </div>
@endsection