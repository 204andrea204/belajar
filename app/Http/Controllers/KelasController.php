<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Kelas;

class KelasController extends Controller
{
    public function data($id)
    {
    	$data = \App\File::all()->where('id_kelas', $id);
    	return view('admin.kelas.index')->with('data', $data);
    }


}
