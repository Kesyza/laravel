<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Route Mengambil Dari View</title>
</head>
<body>
    <ul>
        @foreach ($posts as $data)
            id : {{$data['id']}} <br>
            Judul : {{$data['title']}} <br>
            Content : {{$data['content']}} <br>
        @endforeach
    </ul>
</body>
</html>
