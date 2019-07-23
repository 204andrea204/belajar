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
	<h2>Laporan Data Diri TNI</h2>

	<table>
		<thead>
			<tr>
				<th>No</th>
              	<th>Nama</th>
              	<th>Lulusan</th>
              	<th>Umur</th>
              	<th>Tinggi</th>
              	<th>Berat</th>
              	<th>Foto</th>
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
              <td>{{$q->tinggi}} Cm</td>
              <td>{{$q->berat}}  Kg</td>
              <td><img src="./picture1/{{$q->gambar}}" style="width: 50px;height: 50px;"></td>
			</tr>
			@endforeach
		</thead>
	</table>

</body>
</html>