<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tni;
use PDF;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexadmin()
    {
    	return view('admin.index');
    }
    public function pdftni()
    {
        $test = Tni::all();
        $pdf = PDF::loadView('admin.tni.pdf');
        return $pdf->download('DataDiriTNI.pdf');
    }
    public function indextni()
    {
    	return view('admin.tni.index');
    }
    public function addtni()
    {
    	return view('admin.tni.add');
    }
    public function savetni(Request $r)
    {
        $t = new Tni;

        $t->gambar = $r->input('gambar');
        $file = $r->file('gambar');
        $filename = $file->getClientOriginalName();
        $r->file('gambar')->move("picture1/", $filename);
        $t->gambar = $filename;

        $t->nama = $r->input('nama');
        $t->lulusan = $r->input('lulusan');
        $t->umur = $r->input('umur');
        $t->tinggi = $r->input('tinggi');
        $t->berat = $r->input('berat');
        
        $t->save();
        return redirect(url('admin/tni'));
    }
    public function edittni($id)
    {
    	$tni = Tni::find($id);
    	return view('admin.tni.edit')->with('tni',$tni);
    }
    public function updatetni(Request $m)
    {
        $s = Tni::find($m->input('id'));

        $file = $m->file('gambar');
        $filename = $file->getClientOriginalName();
        $m->file('gambar')->move("picture1/", $filename);
        $s->gambar = $filename;

        $s->nama = $m->input('nama');
        $s->lulusan = $m->input('lulusan');
        $s->umur = $m->input('umur');
        $s->tinggi = $m->input('tinggi');
        $s->berat = $m->input('berat');
        
        $s->save();
        return redirect(url('admin/tni'));
    }
    public function deletetni($id)
    {
    	$tni = tni::find($id);
    	$tni->delete();
    	return redirect(url('admin/tni'));
    }

    public function rooms()
    {
        return view('public.deluxe.rooms');
    }

}
