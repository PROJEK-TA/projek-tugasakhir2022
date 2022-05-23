@extends('layouts.index')
@section('title','Edit Data Departemen')

@section('content')
<div class="col-sm-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Edit Departemen</h4>
               </div>
            </div>
            <div class="card-body">
                <form action="{{route('departemen.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="form-label" for="nm_departemen"><b>Nama Departemen</b></label>
                        <input type="text" class="form-control" id="nm_departemen" name="departemen" placeholder="Input nama departemen...">
                    </div><br><br>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
         </div>
      </div>
@endsection