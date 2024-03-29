@extends('layouts.admin')
@section('title')
Edit Pemasukan
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <hr>
      <form action="{{url('/admin/pengeluaran/update')}}" method="POST" enctype="multipart/form-data">
          <label for="judul">Judul</label>
        <input type="text" class="form-control" name="judul" id="inputEmail4" value="{{$l->judul}}" placeholder="Judul">
          <label for="judul">Jumlah Pemasukan</label>
        <input type="text" class="form-control" name="jumlah" id="inputEmail4" value="{{$l->jumlah}}" 
        placeholder="Jumlah Pengeluaran">
        <label for="judul">tanggal</label>
        <input type="date" class="form-control" name="tanggal" id="inputEmail4" value="{{$l->tanggal}}" 
        placeholder="Tanggal">

        <div class="form-group col-md-25">
            <label>Rincian</label>
            <label for="ckeditor"></label>
            <textarea name="rincian" id="ckeditor">{{$l->rincian}}</textarea>
        </div>
         
          @csrf
          <input type="hidden" name="id" value="{{$l->id}}">
          <button class="btn btn-primary float-right btn-lg" type="submit"><i class="fas fa-pen"></i></button>
        </form>
      </form>

      </div>
    </div>
  </div>
@endsection