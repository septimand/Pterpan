<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
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
    return view('login');
});
Route::get('/postlogin','Auth\LoginController@index');
Route::post('/postlogin','Auth\LoginController@postlogin')->name('postlogin');
Route::get('/logout','Auth\LoginController@logout')->name('logout');

Route::group(['middleware' => ['auth','role:admin']],function(){
    Route::get('/admin', 'AdminController@index')->name('admin');
});

Route::get('/admin/dashboard', '\App\Http\Controllers\AdminController@index');

Route::get('/dashboard', 'DashboardController@dashboard');
Route::get('/tambahPengguna', 'TambahController@tambahPengguna');
Route::post('/tambahPengguna/simpan', 'TambahController@simpan');
Route::get('/tambahPengguna/editPengguna/{email}', 'TambahController@editPengguna');
Route::post('/tambahPengguna/update','TambahController@update');
Route::get('/tambahPengguna/delete/{email}','TambahController@delete');

//unit
Route::get('/unit','UnitController@unit');
Route::post('/unit/simpan', 'UnitController@simpan');
Route::get('/unit/editUnit/{id_unit}', 'UnitController@editUnit');
Route::post('/unit/update','UnitController@update');
Route::get('/unit/delete/{id_unit}','UnitController@delete');

//kategori
Route::get('/kategori','KategoriController@kategori');
Route::post('/kategori/simpan', 'KategoriController@simpan');
Route::get('/kategori/editKategori/{id_kategori}', 'KategoriController@editKategori');
Route::post('/kategori/update','KategoriController@update');
Route::get('/kategori/delete/{id_kategori}','KategoriController@delete');

//inventaris
Route::get('/inventaris', 'InventarisController@inventaris');
Route::get('/inventaris/manajemenInventaris/{id_unit}', 'InventarisController@viewUnit');
Route::post('/ManajemenInventaris/simpan/', 'InventarisController@simpan');
Route::get('/inventaris/manajemenInventaris/{id_unit}/editInventaris/{kode_barcode}', 'InventarisController@editInventaris');
Route::post('/manajemenInventaris/update','InventarisController@update');
Route::get('/inventaris/manajemenInventaris/delete/{kode_barcode}','InventarisController@delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
