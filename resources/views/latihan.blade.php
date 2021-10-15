<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Route Mengambil Dari View</title>
</head>
<body>
    @foreach ($pel as $data)
    Id : {{$data['id']}}<br>
    Nama : {{$data['nama']}}<br>
    Username : {{$data['username']}}<br>
    E-mail : {{$data['email']}}<br>
    Alamat : {{$data['alamat']}}<br>
    Mata pelajaran :
    @foreach($data['mapel'] as $mapel)
    <li>{{$mapel}}</li>
    @endforeach
    <hr>
    @endforeach
</body>
</html>
