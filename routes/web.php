<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/about', function () {
    return '<h1>Halo</h1>'
    .'Selamat datang di web saya<br>'
    .'Laravel, emang keren.';
});


Route::get('/pembuka', function () {
    return view('/key/pembuka');
});


Route::get('/perkenalan', function () {
    return view('/key/perkenalan');
});


Route::get('/riwayat', function () {
    return view('/key/riwayat');
});


Route::get('/prestasi', function () {
    return view('/key/prestasi');
});


Route::get('/penutup', function () {
    return view('/key/penutup');
});


Route::get('/coba', function () {
    return view('/key/coba');
});


Route::get('page/{page?}', function ($hal = 2) {
    return "Halaman <b>$hal</b>";
});


Route::get('/pesan/{makanan?}/{minuman?}/{cemilan?}', function ($makanan = null, $minuman = null, $cemilan = null) {

    if($makanan && $minuman && $cemilan != null){
        return "Anda memesan Makanan = $makanan <br>
                Anda memesan Minuman = $minuman <br>
                Anda memesan Cemilan = $cemilan";
    }else if($makanan && $minuman != null){
        return "Anda memesan Makanan = $makanan <br>
                Anda memesan Minuman = $minuman";
    }else if($makanan || $minuman != null){
        return $makanan != null ? "Anda memesan makanan : $makanan" : "Anda memesan minuman : $minuman";
    }else {
        return "Anda tidak memesan silahkan pulang";
    }

});


Route::get('profile', function () {
    $nama = "Kesyza";
    return view('profile', compact('nama'));
});


Route::get('bio', function () {
    $nama = "Kesyza Andriana Hartuti";
    $umur = "16 tahun";
    $alamat = "Kp. Cilebak Ds. Rancamanyar RT.02/02";
    $sekolah = "SMK Assalaam Bandung";
    $kelas = "XII Rpl2";
    $hobi = "Membaca Buku Dan Menonton Film";
    return view('bio', compact('nama', 'umur', 'alamat', 'sekolah', 'kelas', 'hobi'));
});


Route::get('blog', function () {
    $posts = [
        ['id' => 1, 'title' => 'Lorem Ipsum 1', 'content' => 'Content Pertama'],
        ['id' => 2, 'title' => 'Lorem Ipsum 2', 'content' => 'Content Kedua'],
        ['id' => 3, 'title' => 'Lorem Ipsum 3', 'content' => 'Content Ketiga']
    ];

    return view('blog', compact('posts'));
});


Route::get('latihan',function(){
    $pel = [
        ['id' => '1',
        'nama' => 'Kesyza andriana hartuti',
        'username' => 'key_cute',
        'email' => 'kesyza@gmail.com',
        'alamat' => 'Rancamnayar',
        'mapel' => [
        'pilih' => 'Bahasa Indonesia',
        'pilih1' => 'Bahasa Inggris',
        'pilih2' => 'Bahasa Jepang',
        'pilih3' => 'Bahasa Korea',
        'pilih4' => 'Bahasa Thailand']
         ],

        ['id' => '2',
        'nama' => 'Fitria Amelia',
        'username' => 'amel_galak',
        'email' => 'amel@gmail.com',
        'alamat' => 'Sadang Pesantren',
        'mapel' => [
        'pilih' => 'Bahasa Indonesia',
        'pilih1' => 'Sejarah Indonesia',
        'pilih2' => 'Bahasa Jepang',
        'pilih3' => 'Bahasa Korea',
        'pilih4' => 'Bahasa Thailand']
        ],

        ['id' => '3',
        'nama' => 'Dina Amelia',
        'username' => 'dina_baik',
        'email' => 'dina@gmail.com',
        'alamat' => 'Babakan Nugraha',
        'mapel' => [
        'pilih' => 'Bahasa Indonesia',
        'pilih1' => 'Bahasa Inggris',
        'pilih2' => 'Biologi',
        'pilih3' => 'Fisika',
        'pilih4' => 'Bahasa Thailand']
        ],

        ['id' => '4',
        'nama' => 'Erin Rafani',
        'username' => 'erin_gaya',
        'email' => 'erin@gmail.com',
        'alamat' => 'Cangkuang',
        'mapel' => [
        'pilih' => 'Bahasa Sunda',
        'pilih1' => 'Bahasa Inggris',
        'pilih2' => 'Bahasa Jepang',
        'pilih3' => 'Bahasa Korea',
        'pilih4' => 'IPS']
        ],

        ['id' => '5',
        'nama' => 'Aku Cantik Banget',
        'username' => 'aku_cantik',
        'email' => 'aku@gmail.com',
        'alamat' => 'Bandung',
        'mapel' => [
        'pilih' => 'Bahasa Indonesia',
        'pilih1' => 'TIK',
        'pilih2' => 'Bahasa Sunda',
        'pilih3' => 'IPS',
        'pilih4' => 'IPA']
        ],
         ];
    return view ('latihan',compact('pel'));
});


Route::get('/testmodel', function() {
    $query = App\Models\Post::all(); ;
    return $query;
    });


Route::get('/cobaan', function() {
    $query = App\Models\Biodatas::all(); ;
    return $query;
});


Route::get('/test-post', function () {
    $query = App\Models\Post::all();
    return view('test-post', compact('query'));
});


Route::get('/test-biodatas', function () {
    $query = App\Models\Biodatas::all();
    return view('test-biodatas', compact('query'));
});
