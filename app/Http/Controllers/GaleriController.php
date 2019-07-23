<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeri;
use PDF;

class GaleriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	return view('admin.index');
    }
    public function pdfgaleri()
    {
        $test = Galeri::all();
        $pdf = PDF::loadView('admin.galeri.pdf');
        return $pdf->download('DataDiriTNI.pdf');
    }
    public function indexgaleri()
    {
    	return view('admin.galeri.index');
    }
    public function addgaleri()
    {
    	return view('admin.galeri.add');
    }
    public function savegaleri(Request $r)
    {
    	$t = new Galeri;

    	$t->gambar = $r->input('gambar');
        $file = $r->file('gambar');
        $filename = $file->getClientOriginalName();
        $r->file('gambar')->move("picture3/", $filename);
        $t->gambar = $filename;

    	$t->keterangan = $r->input('keterangan');
    	
    	$t->save();
    	return redirect(url('admin/galeri'));
    }
    public function editgaleri($id)
    {
    	$galeri = Galeri::find($id);
    	return view('admin.galeri.edit')->with('galeri',$galeri);
    }
    public function updategaleri(Request $m)
    {
    	$s = Galeri::find($m->input('id'));

    	$file = $m->file('gambar');
        $filename = $file->getClientOriginalName();
        $m->file('gambar')->move("picture3/", $filename);
        $s->gambar = $filename;

    	$s->keterangan = $m->input('keterangan');
        
    	$s->save();
    	return redirect(url('admin/galeri'));
    }
    public function deletegaleri($id)
    {
    	$galeri = Galeri::find($id);
    	$galeri->delete();
    	return redirect(url('admin/galeri'));
    }
}
