<div>
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
    @if ($myTweet)
        <summary class="tweet-option relative text-gray-500">
            <div>
                <a href="{{ route('tweet.update.index', ['tweetId' => $tweetId]) }}">
                    編集
                </a>
            </div>
            <div>
                <form action="{{ route('tweet.delete', ['tweetId' => $tweetId]) }}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit">削除</button>
                </form>
            </div>
        </summary>
    @endif
</div>
