@extends('layouts.index')
@section('title','Data Ruangan')

@section('content')
<div class="col-sm-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Daftar Gedung</h4>
               </div>
            </div>
            <div class="card-body">
               <button type="button" class="btn btn-success">Tambah Gedung</button><br><br>
               <div class="table-responsive">
                  <table id="datatable" class="table table-striped" data-toggle="data-table">
                     <thead>
                        <tr>
                           <th>NO</th>
                           <th>KODE GEDUNG</th>
                           <th>GEDUNG</th>
                           <th>AKSI</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>1</td>
                           <td>G01</td>
                           <td>Gedung A</td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>2</td>
                           <td>G02</td>
                           <td>Gedung B</td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>3</td>
                           <td>G03</td>
                           <td>Gedung C</td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>4</td>
                           <td>G04</td>
                           <td>Gedung D</td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>5</td>
                           <td>G05</td>
                           <td>Gedung E</td>
                           <td></td>
                        </tr>
                    </table><br>
                    <button type="button" class="btn btn-primary">Print</button>
                </div>
            </div>
         </div>
      </div>
@endsection