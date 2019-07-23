@extends('layouts.admin')
@section('title')
Cek Absensi
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col md-8">
          <div class="table-responsive">
          <table class="table" id="example">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Jam Masuk</th>
              <th>Gambar</th>
              <th colspan="2">Action</th>
            </tr>
          </thead>
          <tbody>
          	<?php
              $i= 1;
              $webcame = \App\Webcame::all();
              ?>
              @foreach($webcame as $q)
            <tr>
            <th scope="row">{{$i++}}</th>
              <td>{{$q->nama}}</td>
              <td>{{$q->created_at}}</td>
              <td><img src="{{url('uploads/'.$q->gambar)}}" style="width: 50%;height: 50%;"></td>
              <td>
                 <a href="{{url('admin/webcame/delete/'.$q->id)}}" onclick="return confirm('anda yakin untuk menghapusnya ?')" 
                 class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i>Hapus</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        </div>
        <hr>
          <a href="{{url('admin/webcame/add')}}" class="btn btn-outline-primary btn-sm">Tambah Data</a>
        <div style="float: right;">
          <a href="{{url('admin/webcame/pdf')}}">
            <button class="btn btn-outline-primary">Download PDF</button>
          </a>
        </div>
      </div>
    </div>
@endsection