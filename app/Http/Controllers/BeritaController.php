<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use PDF;

class BeritaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	return view('admin.index');
    }
    public function pdfberita()
    {
        $test = Berita::all();
        $pdf = PDF::loadView('admin.berita.pdf');
        return $pdf->download('DataDiriTNI.pdf');
    }
    public function indexberita()
    {
    	return view('admin.berita.index');
    }
    public function addberita()
    {
    	return view('admin.berita.add');
    }
    public function saveberita(Request $r)
    {
    	$t = new Berita;

    	$t->gambar = $r->input('gambar');
        $file = $r->file('gambar');
        $filename = $file->getClientOriginalName();
        $r->file('gambar')->move("picture2/", $filename);
        $t->gambar = $filename;

    	$t->tanggal = $r->input('tanggal');
    	$t->keterangan = $r->input('keterangan');
    	
    	$t->save();
    	return redirect(url('admin/berita'));
    }
    public function editberita($id)
    {
    	$berita = Berita::find($id);
    	return view('admin.berita.edit')->with('berita',$berita);
    }
    public function updateberita(Request $m)
    {
    	$s = Berita::find($m->input('id'));

    	$file = $m->file('gambar');
        $filename = $file->getClientOriginalName();
        $m->file('gambar')->move("picture2/", $filename);
        $s->gambar = $filename;

    	$s->tanggal = $m->input('tanggal');
    	$s->keterangan = $m->input('keterangan');
        
    	$s->save();
    	return redirect(url('admin/berita'));
    }
    public function deleteberita($id)
    {
    	$tanggal = Berita::find($id);
    	$tanggal->delete();
    	return redirect(url('admin/berita'));
    }
}
