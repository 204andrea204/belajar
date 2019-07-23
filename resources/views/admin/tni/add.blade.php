@extends('layouts.admin')
@section('title')
Add Data Diri TNI
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header" style="background-color: #e3f2fd;">Tambah Data TNI</div>
        <div class="card-body">
         <form action="{{url('admin/tni/save')}}" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="formGroupExampleInput">Nama</label>
             <input type="text" class="form-control" name="nama" id="formGroupExampleInput" 
            placeholder="Nama" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Lulusan</label>
            <input type="text" class="form-control" name="lulusan" id="formGroupExampleInput" 
            placeholder="Lulusan" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Umur</label>
            <input type="text" class="form-control" name="umur" id="formGroupExampleInput" 
            placeholder="Umur" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Tinggi</label>
            <input type="text" class="form-control" name="tinggi" id="formGroupExampleInput" 
            placeholder="Tinggi" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Berat</label>
            <input type="text" class="form-control" name="berat" id="formGroupExampleInput" 
            placeholder="Berat" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Gambar</label>
            <input type="file" class="form-control" name="gambar" id="formGroupExampleInput">
          </div>
          @csrf
          <button class="btn btn-outline-success float-right" type="submit">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection