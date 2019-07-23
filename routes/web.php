<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/datakelas', function () {
    return view('admin.kelas.index');
});

Route::get('generate-pdf','HomeController@generatePDF');


Route::get('/', 'HomeController@welcome');

Route::get('/saldo/{id}', 'SaldoController@saldo');
Route::post('/tambah_saldo/', 'SaldoController@tambah_saldo');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::prefix('admin')->group(function(){
	Route::get('/', 'AdminController@index');
	Route::get('/tni', 'AdminController@indextni');
	Route::get('/tni/add', 'AdminController@addtni');
	Route::post('/tni/save', 'AdminController@savetni');
	Route::get('/tni/edit/{id}', 'AdminController@edittni');
	Route::post('/tni/update', 'AdminController@updatetni');
	Route::get('/tni/delete/{id}', 'AdminController@deletetni');
	Route::get('/tni/pdf', 'AdminController@pdftni');
});

Route::prefix('admin')->group(function(){
	Route::get('/', 'SyaratController@index');
	Route::get('/syarat', 'SyaratController@indexsyarat');
	Route::get('/syarat/add', 'SyaratController@addsyarat');
	Route::post('/syarat/save', 'SyaratController@savesyarat');
	Route::get('/syarat/edit/{id}', 'SyaratController@editsyarat');
	Route::post('/syarat/update', 'SyaratController@updatesyarat');
	Route::get('/syarat/delete/{id}', 'SyaratController@deletesyarat');
	Route::get('/syarat/pdf', 'SyaratController@pdfsyarat');
});

Route::prefix('admin')->group(function(){
	Route::get('/', 'BeritaController@index');
	Route::get('/berita', 'BeritaController@indexberita');
	Route::get('/berita/add', 'BeritaController@addberita');
	Route::post('/berita/save', 'BeritaController@saveberita');
	Route::get('/berita/edit/{id}', 'BeritaController@editberita');
	Route::post('/berita/update', 'BeritaController@updateberita');
	Route::get('/berita/delete/{id}', 'BeritaController@deleteberita');
	Route::get('/berita/pdf', 'BeritaController@pdfberita');
});

Route::prefix('admin')->group(function(){
	Route::get('/', 'GaleriController@index');
	Route::get('/galeri', 'GaleriController@indexgaleri');
	Route::get('/galeri/add', 'GaleriController@addgaleri');
	Route::post('/galeri/save', 'GaleriController@savegaleri');
	Route::get('/galeri/edit/{id}', 'GaleriController@editgaleri');
	Route::post('/galeri/update', 'GaleriController@updategaleri');
	Route::get('/galeri/delete/{id}', 'GaleriController@deletegaleri');
	Route::get('/galeri/pdf', 'GaleriController@pdfgaleri');
});

Route::prefix('admin')->group(function(){
	Route::get('/', 'WebcameController@index');
	Route::get('/webcame', 'WebcameController@indexweb');
	Route::get('/webcame/add', 'WebcameController@add');
	Route::post('/webcame/save', 'WebcameController@save');
	Route::get('/webcame/delete/{id}', 'WebcameController@delete');
	Route::get('/webcame/pdf', 'WebcameController@pdfwebcame');
});

		Route::get('admin/pemasukan', 'LaporanuangController@indexpemasukan')->name('addpemasukan');
		Route::get('admin/pemasukan/add', 'LaporanuangController@addpemasukan')->name('addpemasukan');
		Route::post('admin/pemasukan/save', 'LaporanuangController@savepemasukan')->name('savepemasukan');
		Route::get('admin/pemasukan/edit/{id}', 'LaporanuangController@editpemasukan')->name('editpemasukan');
		Route::post('admin/pemasukan/update', 'LaporanuangController@updatepemasukan')->name('updatepemasukan');
		Route::get('admin/pemasukan/delete/{id}', 'LaporanuangController@deletepemasukan')->name('deletepemasukan');


		Route::get('admin/pengeluaran', 'LaporanuangController@indexpengeluaran');
		Route::get('admin/pengeluaran/add', 'LaporanuangController@addpengeluaran');
		Route::post('admin/pengeluaran/save', 'LaporanuangController@savepengeluaran');
		Route::get('admin/pengeluaran/edit/{id}', 'LaporanuangController@editpengeluaran');
		Route::post('admin/pengeluaran/update', 'LaporanuangController@updatepengeluaran');
		Route::get('admin/pengeluaran/delete/{id}', 'LaporanuangController@deletepengeluaran');

		Route::get('/admin/data/{id}', 'KelasController@data');