<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data</title>
</head>
<body>

<form action="{{route('TambahDataPengguna')}}" method="GET">
    {{ csrf_field() }}
    <table>
        <tr><th></th>
            <th></th></tr>
        <tr>
            <td><label>Name</label></td>
            <td><input type="text" name="name" id="name" placeholder="Input Your Name"></td>
        </tr>
        <tr>
            <td><label>Email</label></td>
            <td><input type="text" name="email" id="email" placeholder="Input Your Email"></td>
        </tr>
        <tr>
            <td><label>Password</label></td>
            <td><input type="password" name="pass" id="pass" placeholder="Input Your Password"></td>
        </tr>
    </table>
    <br>
    <button type="submit" class="btn bg-orange btn-block btn-sm waves-effect">Save Data</button>
</form>
<br>
<form method="GET" action="{{route('GetData')}}">
    {{ csrf_field() }}
    <button type="submit" class="btn bg-orange btn-block btn-sm waves-effect">View Data</button>
</form>
<br><br>
<form method="GET" action="{{route('SearchData')}}">
    {{ csrf_field() }}
    <table cellpadding="2">
        <tr><th></th></tr>
        <tr>
            <td><label>ID</label></td>
        </tr>
        <tr>
            <td><input type="text" name="id" id="id" placeholder="Input Id"></td>
        </tr>
    <tr>
        <td>
        <button type="submit" class="btn bg-orange btn-block btn-sm waves-effect">Search Data</button>
        </td>
    </tr>

    </table>
</form>
</body>
</html>