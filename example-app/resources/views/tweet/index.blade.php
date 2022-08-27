<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>つぶやき</title>
</head>
<body>
    <h1>つぶやくよ</h1>
    <div>
        <p>投稿フォーム</p>
        <form action="{{ route('tweet.create') }}" method="POST">
            @csrf
            <label for="tweet-content">つぶやき</label>
            <span>140字まで</span>
            <textarea name="tweet" id="tweet-content" cols="30" rows="10" type="text" placeholder="つぶやきを入力"></textarea>
            @error('tweet')
            <p style="color: red;">{{ $message }}</p>
            @enderror
            <button type="submit">投稿</button>
        </form>
    </div>
    <div>
        @foreach ($tweets as $tweet)
        <summary>
            <p>{{$tweet->content}}</p>
        </summary>
        <div>
            <a href="{{ route('tweet.update.index', ['tweetId' => $tweet->id])}}">編集</a>
        </div>
        @endforeach
    </div>
</body>
</html>
