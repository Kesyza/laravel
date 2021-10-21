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
        background-color : rgb(0, 255, 254);
    }
</style>
<body>
    <center><h1>Data Barang</h1>
    <table border="1">
        <tr>
            <td>Nama Barang</td>
            <td>Varian Rasa</td>
            <td>Harga Beli</td>
            <td>Harga Jual</td>
        </tr>
    @foreach ($data as $item)
        <tr>
            <td>{{$item->nama}}</td>
            <td>{{$item->varian}}</td>
            <td>{{$item->hargaBeli}}</td>
            <td>{{$item->hargaJual}}</td>
        </tr>
    @endforeach
    </table>
    </center>
</body>
</html>
