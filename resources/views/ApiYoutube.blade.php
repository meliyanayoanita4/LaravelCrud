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
<table align="center">
    <tr>
        <th align="center">SEARCH RESULT</th>
    </tr>
    <tr>
        <td align="center"></td>
    </tr>
    @foreach($channel as $channel1)
    <tr>
        <td align="center">{{$channel1->snippet->title}}</td>
    </tr>
    @endforeach
</table>
<form method="GET" action="{{ url('/') }}">
    {{ csrf_field() }}
    <button type="submit" class="btn bg-orange btn-block btn-sm waves-effect">BACK</button>
</form>
</body>
</html>