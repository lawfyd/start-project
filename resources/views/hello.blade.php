<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title></title>
</head>
<body>
<ul>
    @foreach( $tasks as $task)
        <li>{{ $task }}</li>
    @endforeach
</ul>
</body>
</html>