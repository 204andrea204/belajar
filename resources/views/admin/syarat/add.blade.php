@extends('layouts.admin')
@section('title')
Add
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header" style="background-color: #f44286;">Tambah Data HP</div>
        <div class="card-body">
         <form action="{{url('/admin/syarat/save')}}" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="formGroupExampleInput">Gambar</label>
            <input type="file" class="form-control" name="gambar" id="formGroupExampleInput">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Judul</label>
             <input type="text" class="form-control" name="judul" id="formGroupExampleInput" 
            placeholder="Judul" required>
          </div>
          <div class="form-group col-md-25">
            <label>Keterangan</label>
            <label for="ckeditor"></label>
            <textarea name="keterangan" id="ckeditor"></textarea>
          </div>
          @csrf
          <button class="btn btn-outline-success float-right" type="submit">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection