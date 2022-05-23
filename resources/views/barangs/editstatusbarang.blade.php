@extends('layouts.index')
@section('title','Edit Data Status')

@section('content')
<div class="col-sm-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Edit Status Barang</h4>
               </div>
            </div>
            <div class="card-body">
                <form action="{{route('statusbarang.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="form-label" for="nm_status"><b>Nama Status</b></label>
                        <input type="text" class="form-control" id="nm_status" name="statusbarang" placeholder="Input nama status...">
                    </div><br><br>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
         </div>
      </div>
@endsection