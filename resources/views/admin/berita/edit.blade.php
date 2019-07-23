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
         <form action="{{url('/admin/berita/update')}}" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="formGroupExampleInput">Gambar</label>
            <input type="file" class="form-control" name="gambar" id="formGroupExampleInput"
            value="{{$berita->gambar}}">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Tanggal</label>
            <input type="date" name="tanggal" id="formGroupExampleInput"value="{{$berita->tanggal}}" required>
          </div>
          <div class="form-group">
            <label>Keterangan</label>
            <label for="ckeditor"></label>
            <textarea name="keterangan" id="ckeditor">{{$berita->keterangan}}</textarea>
          </div>
          @csrf
          <input type="hidden" name="id" value="{{$berita->id}}">
          <button class="btn btn-outline-success float-right" type="submit">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection