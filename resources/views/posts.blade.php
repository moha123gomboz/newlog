<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/app.css">
    <title>mangement</title>
</head>
<body>
@isset($posts)
@foreach($posts as $post)
    @if($loop->$first)
        this is the first iteration
    @endif
    <article>
        {!!$post!!}

    </article>
    @if($loop->$last)
        this is the last iteration
    @endif

@endforeach
@endisset
</body>
</html>
