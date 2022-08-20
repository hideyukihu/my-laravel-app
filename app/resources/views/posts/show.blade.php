<?php



?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('css/style.css')}}">
</head>

<body>
    <div class="back-link">
        &laquo; <a href="{{route('posts.index') }}">戻る</a>
    </div>
    <h1>{{$post}}</h1>


</body>

</html>
