@extends('layouts.admin')
@section('title')
Edit
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header" style="background-color: #e3f2fd;">Edit</div>
        <div class="card-body">
         <form action="{{url('/admin/syarat/update')}}" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="formGroupExampleInput">Gambar</label>
            <input type="file" class="form-control" name="gambar" id="formGroupExampleInput"
            value="{{$syarat->gambar}}">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Judul</label>
            <input type="text" class="form-control" name="judul" id="formGroupExampleInput" 
            placeholder="Judul" value="{{$syarat->Judul}}" required>
          </div>
    <div class="form-group col-md-25">
      <label>Keterangan</label>
      <label for="ckeditor"></label>
      <textarea name="keterangan" id="ckeditor">{{$syarat->keterangan}}</textarea>
    </div>
          @csrf
          <input type="hidden" name="id" value="{{$syarat->id}}">
          <button class="btn btn-outline-success float-right" type="submit">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection