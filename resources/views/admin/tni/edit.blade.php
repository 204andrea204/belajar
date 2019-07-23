@extends('layouts.admin')
@section('title')
Edit Barang
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header" style="background-color: #e3f2fd;">Edit Motor</div>
        <div class="card-body">
         <form action="{{url('admin/tni/update')}}" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="formGroupExampleInput">Nama</label>
            <input type="text" class="form-control" name="nama" id="formGroupExampleInput" 
            placeholder="Nama" value="{{$tni->nama}}" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Lulusan</label>
            <input type="text" class="form-control" name="lulusan" id="formGroupExampleInput" 
            placeholder="Lulusan" value="{{$tni->lulusan}}" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Umur</label>
            <input type="text" class="form-control" name="umur" id="formGroupExampleInput" 
            placeholder="Umur" value="{{$tni->umur}}" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Berat</label>
            <input type="text" class="form-control" name="berat" id="formGroupExampleInput" 
            placeholder="Berat" value="{{$tni->berat}}" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Tinggi</label>
            <input type="text" class="form-control" name="tinggi" id="formGroupExampleInput" 
            placeholder="Tinggi" value="{{$tni->tinggi}}" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Gambar</label>
            <input type="file" class="form-control" name="gambar" id="formGroupExampleInput"
            value="{{$tni->gambar}}">
          </div>
          @csrf
          <input type="hidden" name="id" value="{{$tni->id}}">
          <button class="btn btn-outline-success float-right" type="submit">Update Data</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection