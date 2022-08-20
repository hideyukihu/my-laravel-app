<?php



?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>MyBBS</h1>


    <ul>
        {{-- @foreach ($posts as $post)
    <li>{{ $post }}</li>
    @endforeach --}}

        @forelse ($posts as $index => $post)
            <li>
                <a href="/posts/{{ $index }}">
                    {{ $post }}
                </a>
            </li>
        @empty
            <li>No Pot yet</li>
        @endforelse
    </ul>


</body>

</html>
