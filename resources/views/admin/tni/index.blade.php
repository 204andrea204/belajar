@extends('layouts.admin')
@section('title')

@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header" style="background-color: #e3f2fd;">Data Diri TNI</div>
        <div class="card-body">
          <div class="table-responsive">
          <table class="table" id="example">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Lulusan</th>
              <th>Umur</th>
              <th>Tinggi</th>
              <th>Berat</th>
              <th>Foto</th>
              <th colspan="2">Action</th>
            </tr>
          </thead>
          <tbody>
              <?php
              $i= 1;
              $tni = \App\Tni::all();
              ?>
              @foreach($tni as $q)
            <tr>
              <th scope="row">{{$i++}}</th>
              <td>{{$q->nama}}</td>
              <td>{{$q->lulusan}}</td>
              <td>{{$q->umur}} Tahun</td>
              <td>{{$q->tinggi}} cm</td>
              <td>{{$q->berat}} kg</td>
              <td><img src="{{url('/picture1/',$q->gambar)}}" style="width: 50px;height: 50px;"></td>
              <td>
                <a href="{{url('admin/tni/edit/'.$q->id)}}" class="btn btn-outline-warning btn-sm">Edit</a>
                 <a href="{{url('admin/tni/delete/'.$q->id)}}" onclick="return confirm('anda yakin untuk menghapusnya ?')" 
                 class="btn btn-outline-danger btn-sm">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        </div>
        <hr>
        <div style="float: left;">
          <a href="{{url('admin/tni/add')}}" class="btn btn-outline-primary btn-sm">Tambah Data</a>
        </div>
        <div style="float: right;">
          <a href="{{url('admin/tni/pdf')}}">
            <button class="btn btn-outline-primary">Download PDF</button>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
