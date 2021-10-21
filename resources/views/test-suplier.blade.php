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
        background-color : rgb(6, 208, 208);
    }
</style>
<body>
    <center><h1>Data Suplier</h1>
    <table border="1">
        <tr>
            <td>Nama Suplier</td>
            <td>Alamat</td>
            <td>Kode Pos</td>
            <td>Kota</td>
        </tr>
    @foreach ($data as $item)
        <tr>
            <td>{{$item->nama}}</td>
            <td>{{$item->alamat}}</td>
            <td>{{$item->kodePos}}</td>
            <td>{{$item->kota}}</td>
        </tr>
    @endforeach
    </table>
    </center>
</body>
</html>
