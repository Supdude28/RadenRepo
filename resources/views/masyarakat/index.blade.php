<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1" borderspacing="0">
        <thead>
            <tr>
                <th>NIK</th>
                <th>NAMA</th>
                <th>TELP</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bebas as $udin)
                <tr>
                    <td>{{$udin->nik}}</td>
                    <td>{{$udin->nama}}</td>
                    <td>{{$udin->telpon}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Petugasa</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID PETUGAS</th>
                <th>NAMA PETUGAS</th>
                <th>TELPP</th>
                <th>LEVEL</th>
            </tr>
        </thead>
    </table>
</body>
</html>