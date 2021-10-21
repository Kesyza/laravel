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
        background-color : rgb(4, 167, 167);
    }
</style>
<body>
    <center><h1>Data Pembelian</h1>
    <table border="1">
        <tr>
            <td>Nama Barang</td>
            <td>Nama Suplier</td>
            <td>Quantity</td>
            <td>Tanggal Beli</td>
        </tr>
    @foreach ($data as $item)
        <tr>
            <td>{{$item->namaBarang}}</td>
            <td>{{$item->namaSuplier}}</td>
            <td>{{$item->qty}}</td>
            <td>{{$item->tanggalBeli}}</td>
        </tr>
    @endforeach
    </table>
    </center>
</body>
</html>
