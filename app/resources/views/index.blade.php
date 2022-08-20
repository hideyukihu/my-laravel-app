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
    <h1>MyBBS</h1>


    <ul>
        @forelse ($posts as $index => $post)
            <li>
                <a href="{{route('posts.show', $index) }}">
                    {{ $post }}
                </a>
            </li>
        @empty
            <li>No Pot yet</li>
        @endforelse
    </ul>


</body>

</html>
