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
              <th>Judul</th>
              <th>Keterangan</th>
              <th>Gambar</th>
              <th colspan="2">Action</th>
            </tr>
          </thead>
          <tbody>
              <?php
              $i= 1;
              $syarat = \App\Syarat::all();
              ?>
              @foreach($syarat as $q)
            <tr>
              <th scope="row">{{$i++}}</th>
              

              <td>{{$q->Judul}}</td>
              <td>{!!$q->keterangan!!}</td>
              <td><img src="{{url('/picture/',$q->gambar)}}" style="width: 50%;height: 50%;"></td>
              <td>
                <a href="{{url('admin/syarat/edit/'.$q->id)}}" class="btn btn-outline-warning btn-sm">Edit</a>
                 <a href="{{url('admin/syarat/delete/'.$q->id)}}" onclick="return confirm('anda yakin untuk menghapusnya ?')" 
                 class="btn btn-outline-danger btn-sm">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        </div>
        <hr>

          <a href="{{url('admin/syarat/add')}}" class="btn btn-outline-primary btn-sm">Tambah Data</a>

           <div style="float: right;">
          <a href="{{url('admin/syarat/pdf')}}">
            <button class="btn btn-outline-primary">Download PDF</button>
          </a>
        </div>
        
      </div>
    </div>
  </div>
</div>
</div>
@endsection
