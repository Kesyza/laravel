<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Seeder ke view</title>
</head>
<body>
    <table>
    <center><h1>Tampilkan  Data siswa</h1></center><hr>
    @foreach ($query as $item)
        <tr>
            <td>Nama Siswa</td>
            <td>:</td>
            <td><h4>{{$item->name}}</h4></td>
        </tr>
        <tr>
            <td>Tanggal Lahir Siswa</td>
            <td>:</td>
            <td><p>{{$item->bornDate}}</p></td>
        </tr>
        <tr>
            <td>Jenis Kelamin Siswa</td>
            <td>:</td>
            <td><p>{{$item->gender}}</p></td>
        </tr>
        <tr>
            <td>Alamat Siswa</td>
            <td>:</td>
            <td><p>{{$item->address}}</p></td>
        </tr>
        <tr>
            <td>Agama Siswa</td>
            <td>:</td>
            <td><p>{{$item->religion}}</p></td>
        </tr>
        <tr>
            <td>Umur Siswa</td>
            <td>:</td>
            <td><p>{{$item->age}}</p></td>
        </tr>
        <tr>
            <td>Hobi Siswa</td>
            <td>:</td>
            <td><p>{{$item->hobby}}</p></td>
        </tr>
        <tr>
            <td><hr></td>
        </tr>
    @endforeach
    </table>
</body>
</html>
