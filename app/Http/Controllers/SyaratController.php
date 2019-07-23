<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Syarat;
use PDF;

class SyaratController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	return view('admin.index');
    }
    public function pdfsyarat()
    {
        $test = Syarat::all();
        $pdf = PDF::loadView('admin.syarat.pdf');
        return $pdf->download('DataDiriTNI.pdf');
    }
    public function indexsyarat()
    {
    	return view('admin.syarat.index');
    }
    public function addsyarat()
    {
    	return view('admin.syarat.add');
    }
    public function savesyarat(Request $r)
    {
    	$t = new Syarat;

    	$t->gambar = $r->input('gambar');
        $file = $r->file('gambar');
        $filename = $file->getClientOriginalName();
        $r->file('gambar')->move("picture/", $filename);
        $t->gambar = $filename;

    	$t->judul = $r->input('judul');
    	$t->keterangan = $r->input('keterangan');
    	
    	$t->save();
    	return redirect(url('admin/syarat'));
    }
    public function editsyarat($id)
    {
    	$syarat = Syarat::find($id);
    	return view('admin.syarat.edit')->with('syarat',$syarat);
    }
    public function updatesyarat(Request $m)
    {
    	$s = Syarat::find($m->input('id'));

    	$file = $m->file('gambar');
        $filename = $file->getClientOriginalName();
        $m->file('gambar')->move("picture/", $filename);
        $s->gambar = $filename;

    	$s->judul = $m->input('judul');
    	$s->keterangan = $m->input('keterangan');
        
    	$s->save();
    	return redirect(url('admin/syarat'));
    }
    public function deletesyarat($id)
    {
    	$syarat = Syarat::find($id);
    	$syarat->delete();
    	return redirect(url('admin/syarat'));
    }
}
