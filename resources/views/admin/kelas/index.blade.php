
            <!DOCTYPE html>
<html lang="en">

<head>
    <!--- Basic Page Needs  -->
    <meta charset="utf-8">
    <title>Tpers 2018</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Specific Meta  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('zeedapp/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('zeedapp/css/responsive.css')}}">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{asset('zeedapp/img/favicon.ico')}}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>
    <!-- counter-box area end -->
    <!-- demo area start -->
    <div class="container">
        <center>
            <div class="col-md-12">
                <div class="counter-item">
                    <a href="/"><button class="btn btn-primary">Kembali</button></a>
                </div>
            </div>
        </center>
      @foreach ($data as $datas1)
      @php
        $file = \App\File::where('id_kelas', 'id');
        $i = 1;
      @endphp
      @endforeach
      <br>
      <br>
      <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Jurusan</th>
                  <th scope="col">Umur</th>
                  <th scope="col">Alamat</th>
                  <th colspan="3">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $datas)
                <tr>
                  <th scope="row">{{$i++}}</th>
                  <td>{{$datas->nama}}</td>
                  <td>{{$datas->jurusan}}</td>
                  <td>{{$datas->umur}}</td>
                  <td>{{$datas->alamat}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
    </div>