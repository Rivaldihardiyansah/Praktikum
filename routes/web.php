<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController;
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

Route::get('/biodata', function () {
    $data=[
        'nama'=>'Rivaldy hardiyansyah',
        'lahir'=>'17 Agustus 1945',
        'hobi'=>'Futsal',
        'jk'=>'Laki-Laki',
        'umur'=>'17',
        'pekerjaan'=>'Mahasiswa',
        'alamat'=>'Bandung',
        'notlp'=>'087718067627',
        'email'=>'rivaldi@gmail.com',
        'photo'=>'../images/rivaldi.jpeg'

    ];
    return view('biodata',$data);
});

Route::get('/deskripsi', function () {
    $data=[
        'judul'=>'Malin Kundang',
        'penulis'=>'Rivaldi Hardiyansanyah',
        'isi'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi aut alias, et tempoe, placeat quas excepturi obcaecati est expedita animi debitis deserunt! Repellendus, quia maiores? '

    ];
    return view('deskripsi',$data);
});

Route::get('/list', [BiodataController::class, 'index']);
