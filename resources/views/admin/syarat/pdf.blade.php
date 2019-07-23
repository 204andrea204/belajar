<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table, th, td{
			border: 1px solid black;
			border-collapse: collapse;
			margin:auto;
		}
		th, td{
			padding:5px;
			text-align: left;
		}
		.footer{
			position: absolute;
			left: 0;
			bottom: 0;
			width: 100%;
			color: black;
			text-align: right;
		}
	</style>
</head>
<body>
	<img src="./tni/tni.png" style="width: 100px; margin-left: 600px;" >
	<h1 style="text-align: center;">Tentara Nasional Indonesia</h1>
	<h1 style="text-align: center;">Pertahanan Indonesia</h1>
	<h2>Laporan Syarat TNI</h2>

	<table>
		<thead>
			<tr>
				<th>No</th>
				<th>Judul</th>
              	<th>Keterangan</th>
              	<th>Gambar</th>
            </tr>
          </thead>
          <tbody>
              <?php
              $i= 1;
              $galeri = \App\Syarat::all();
              ?>
              @foreach($galeri as $q)
            <tr>
              <th scope="row">{{$i++}}</th>
              <td>{{$q->Judul}}</td>
              <td>{!!$q->keterangan!!}</td>
              <td><img src="./picture1/{{$q->gambar}}" style="width: 80px;height: 80px;"></td>
			</tr>
			@endforeach
		</thead>
	</table>

</body>
</html>