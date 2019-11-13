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
<table cellpadding="10">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Action</th>
    </tr>
    @foreach($GetData as $Fill)
    <tr>
        <td align="center">{{ $Fill->name }}</td>
        <td align="center">{{ $Fill->email }}</td>
        <td align="center">{{ $Fill->password }}</td>
        <td align="center">
            <form method="GET" action="{{ url('/EditData') }}">
                {{ csrf_field() }}
                <input type="hidden" name="id_edit" id="id_edit" value="{{ $Fill->id }}">
                <button type="submit" class="btn bg-orange btn-block btn-sm waves-effect">EDIT</button>
            </form>
            <br>
            <form method="GET" action="{{ url('/Hapus') }}">
                {{ csrf_field() }}
                <input type="hidden" name="id_hapus" id="id_hapus" value="{{ $Fill->id }}">
                <button type="submit" class="btn bg-orange btn-block btn-sm waves-effect">HAPUS</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

</body>
</html>