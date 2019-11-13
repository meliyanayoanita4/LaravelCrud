<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="{{route('UpdateDataPengguna')}}" method="GET">
    {{ csrf_field() }}
    <table>
        <tr><th></th>
            <th></th></tr>
        <tr>
            <td><label>Name</label></td>
            <td><input type="text" name="name" id="name" value="{{$DataEdit->name}}"></td>
        </tr>
        <tr>
            <td><label>Email</label></td>
            <td><input type="text" name="email" id="email" value="{{$DataEdit->email}}"></td>
        </tr>
        <tr>
            <td><label>Password</label></td>
            <td><input type="password" name="pass" id="pass" value="{{$DataEdit->password}}"></td>
        </tr>
    </table>
    <input type="hidden" name="id_edit" id="id_edit" value="{{ $DataEdit->id }}">
    <button type="submit" class="btn bg-orange btn-block btn-sm waves-effect">Edit  Data</button>
</form>
<form method="GET" action="{{route('GetData')}}">
    {{ csrf_field() }}
    <button type="submit" class="btn bg-orange btn-block btn-sm waves-effect">View Data</button>
</form>


</body>
</html>