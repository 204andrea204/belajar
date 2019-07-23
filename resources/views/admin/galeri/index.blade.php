@extends('layouts.admin')
@section('title')
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header" style="background-color: #e3f2fd;">Galeri TNI</div>
        <div class="card-body">
          <div class="table-responsive">
          <table class="table" id="example">
          <thead>
            <tr>
              <th>No</th>           
              <th>Gambar</th>
              <th>Keterangan</th>
              <th colspan="2">Action</th>
            </tr>
          </thead>
          <tbody>
              <?php
              $i= 1;
              $galeri = \App\Galeri::all();
              ?>
              @foreach($galeri as $q)
            <tr>
              <th scope="row">{{$i++}}</th>
              

               <td><img src="{{url('/picture3/',$q->gambar)}}" style="width: 50%;height: 50%;"></td>
              <td>{!!$q->keterangan!!}</td>
             
              <td>
                <a href="{{url('admin/galeri/edit/'.$q->id)}}" class="btn btn-outline-warning btn-sm">Edit</a>
                 <a href="{{url('admin/galeri/delete/'.$q->id)}}" onclick="return confirm('anda yakin untuk menghapusnya ?')" 
                 class="btn btn-outline-danger btn-sm">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        </div>
        <hr>

          <a href="{{url('admin/galeri/add')}}" class="btn btn-outline-primary btn-sm">Tambah Data</a>

          <div style="float: right;">
          <a href="{{url('admin/galeri/pdf')}}">
            <button class="btn btn-outline-primary">Download PDF</button>
          </a>
        </div>

      </div>
    </div>
  </div>
</div>
</div>
@endsection
