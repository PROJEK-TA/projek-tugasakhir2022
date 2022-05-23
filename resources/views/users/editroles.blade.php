@extends('layouts.index')
@section('title','Edit Data Roles')

@section('content')
<div class="col-sm-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Edit Roles</h4>
               </div>
            </div>
            <div class="card-body">
                <form action="{{route('roleuser.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="form-label" for="nm_roles"><b>Nama Roles</b></label>
                        <input type="text" class="form-control" id="nm_roles" name="roleuser" placeholder="Input nama roles...">
                    </div><br><br>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
         </div>
      </div>
@endsection