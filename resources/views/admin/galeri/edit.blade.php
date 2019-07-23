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
         <form action="{{url('/admin/galeri/update')}}" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="formGroupExampleInput">Gambar</label>
            <input type="file" class="form-control" name="gambar" id="formGroupExampleInput"
            value="{{$galeri->gambar}}">
          </div>
    <div class="form-group col-md-25">
      <label>Keterangan</label>
      <label for="ckeditor"></label>
      <textarea name="keterangan" id="ckeditor">{{$galeri->keterangan}}</textarea>
    </div>
          @csrf
          <input type="hidden" name="id" value="{{$galeri->id}}">
          <button class="btn btn-outline-success float-right" type="submit">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection