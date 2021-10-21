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
        background-color : rgb(6, 133, 133);
    }
</style>
<body>
    <center><h1>Data Pesanan</h1>
    <table border="1">
        <tr>
            <td>Nama Pelanggan</td>
            <td>Nama Barang</td>
            <td>Quantity</td>
            <td>Tanggal Pesan</td>
        </tr>
    @foreach ($data as $item)
        <tr>
            <td>{{$item->namaPelanggan}}</td>
            <td>{{$item->namaBarang}}</td>
            <td>{{$item->qty}}</td>
            <td>{{$item->tanggalPesan}}</td>
        </tr>
    @endforeach
    </table>
    </center>
</body>
</html>
