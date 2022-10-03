<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body class="container mx-auto">
    <h1 class="text-4xl text-center mx-auto">つぶやきアプリ</h1>
    @auth
        <div>
            <p>投稿フォーム</p>
            @if (session('feedback.success'))
                <p style="color: blue">{{ session('feedback.success') }}</p>
            @endif
            <form action="{{ route('tweet.create') }}" method="post">
                @csrf
                <label for="tweet-content">つぶやき</label>
                <span>140字まで</span>
                <textarea name="tweet" id="tweet-content" type="text" cols="30" rows="5" placeholder="つぶやき入力" class="focus:ring-blue-400 focus-border-blue-400 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md p-2"></textarea>
                @error('tweet')
                    <p style="color: red;" class="mt-2 text-sm text-gray-500">{{ $message }}</p>
                @enderror
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-500 hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">投稿</button>
            </form>
        </div>
    @endauth
    <div>
        @foreach ($tweets as $tweet)
            <div>
                <div>{{ $tweet->content }}</div> by {{ $tweet->user->name }}<br>
            </div>
            @if (\Illuminate\Support\facades\Auth::id() === $tweet->user_id)
                <div>
                    <a href="{{ route('tweet.update.index', ['tweetId' => $tweet->id]) }}">編集</a>
                </div>
                <form action="{{ route('tweet.delete', ['tweetId' => $tweet->id]) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit">削除</button>
                </form>
            @else
                編集できません
            @endif
        @endforeach
    </div>

</body>

</html>
