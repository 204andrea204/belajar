<!doctype html>

<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>WebcamJS Test Page</title>
    <style type="text/css">
        body { font-family: Helvetica, sans-serif; }
        h2, h3 { margin-top:0; }
        form { margin-top: 15px; }
        form > input { margin-right: 15px; }
        #results { float:right; margin:20px; padding:20px; border:1px solid; background:#ccc; }
    </style>
</head>
<body>
    <div id="results">Your captured image will appear here...</div>
    
    <h1>WebcamJS Test Page</h1>
    <h3>Demonstrates simple 320x240 capture &amp; display</h3>
    
    <div id="my_camera"></div>
    
    <!-- First, include the Webcam.js JavaScript Library -->
    <script type="text/javascript" src="../../webcam.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    
    <!-- Configure a few settings and attach camera -->
    <script language="JavaScript">
        Webcam.set({
            width: 320,
            height: 240,
            image_format: 'jpeg',
            jpeg_quality: 90
        });
        Webcam.attach( '#my_camera' );
    </script>
    
    <!-- A button for taking snaps -->
    <form>
        <input type=button value="Take Snapshot" onClick="take_snapshot()">
    </form>
    
    <!-- Code to handle taking the snapshot and displaying it locally -->
    <div style="text-align: center;">
    <script language="JavaScript">
        function take_snapshot() {
            // take snapshot and get image data
            Webcam.snap( function(data_uri) {
                // display results in page
                document.getElementById('results').innerHTML = 
                    '<form method="post" enctype="multipart/form-data" action="{{url('admin/webcame/save')}}"> '+
                    '@csrf'+
                    '<h2>Here is your image:</h2>' +
                    '<label>Nama</label>'+
                    '<input name="nama" type="text">'+
                    '<img type="hidden" src="'+data_uri+'"/>'+
                    '<input name="gambar" value="'+data_uri+'">'+
                    
                    
                    '<br><button onClick="konfirmasiDulu()" type="submit">Simpan</button>'+
                    '</form>';
            } );
        }

        function konfirmasiDulu(){
                var konfirmasi = confirm("Silakan Klik Tombol Salah Satu Tombol");
                var text = "";
                
                if(konfirmasi === true) {
                    text = "Kamu klik Tombol OK";
                }else{
                    text = "Kamu klik Tombol Cancel";
                }
                
                document.getElementById("hasil").innerHTML = text;
            }
    </script>
</div>
</body>
</html>