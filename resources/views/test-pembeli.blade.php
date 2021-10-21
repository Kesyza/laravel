<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Seeder ke view</title>
</head>
<style>
    body{
        background-color : rgb(6, 230, 230);
    }
</style>
<body>
    <center><h1>Data Pembeli</h1>
    <table border="1">
        <tr>
            <td>Nama Pembeli</td>
            <td>Jenis Kelamin</td>
            <td>Alamat Pembeli</td>
            <td>Kode Pos</td>
            <td>Kota Asal</td>
            <td>Tanggal Lahir</td>
        </tr>
    @foreach ($data as $item)
        <tr>
            <td>{{$item->nama}}</td>
            <td>{{$item->jenisKelamin}}</td>
            <td>{{$item->alamat}}</td>
            <td>{{$item->kodePos}}</td>
            <td>{{$item->kota}}</td>
            <td>{{$item->tanggalLahir}}</td>
        </tr>
    @endforeach
    </table>
    </center>
</body>
</html>
