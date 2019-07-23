<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use \App\Webcame;
use PDF;
class WebcameController extends Controller
{
	public function indexweb()
    {
    	return view('admin.webcame.index');
    }
    public function add()
    {
    	return view('admin.webcame.add');
    }


    public function save(Request $r)
    {
    	$image = $r->input('gambar');
        $image = str_replace('data:image/jpeg;base64,','', $image);
        $image = base64_decode($image);
        $filename = 'image_'.time().'.png';
        file_put_contents('uploads/'.$filename,$image);
        $nama = $r->nama;

        $webcame = new Webcame;
        $webcame->nama= $nama;
        $webcame->gambar = $filename;
        $webcame->save();

        return redirect(url('admin/webcame/'));
    }
    public function delete($id)
    {
    	$webcame = Webcame::find($id);
    	$webcame->delete();
    	return redirect(url('admin/webcame'));
    }
    public function pdfwebcame()
    {
        $test = Webcame::all();
        $pdf = PDF::loadView('admin.webcame.pdf');
        return $pdf->download('DataDiriTNI.pdf');
    }
}
