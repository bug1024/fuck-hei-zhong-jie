<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <title>黑历史-{{ $agent->name }}</title>
</head>

<body>
    <p>
        姓名：{{ $agent->name }}
    </p>
    @foreach ($comments as $comment)
        <p>{{ $comment->content }} {{ $comment->add_time }}</p>
    @endforeach
</body>

</html>
