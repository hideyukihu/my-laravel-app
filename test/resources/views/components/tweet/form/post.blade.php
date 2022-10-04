@auth
    <div>
        @if (session('feedback.success'))
            <p style="color: blue">{{ session('feedback.success') }}</p>
        @endif
        <form action="{{ route('tweet.create') }}" method="post">
            @csrf
            <div class="mt-1">
                <textarea name="tweet" id="tweet-content" type="text" cols="30" rows="5" placeholder="つぶやき入力"
                    class="mb-7 first-letter:focus:ring-blue-400 focus-border-blue-400 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md p-2"></textarea>
            </div>
            <span class="mt-2 text-sm text-gray-500">140字まで</span>
            @error('tweet')
                <p style="color: red;" class="mt-2 text-sm text-gray-500">{{ $message }}</p>
            @enderror

            <div class="flex flex-wrap justify-end">
                <x-element.button>
                    つぶやく
                </x-element.button>
            </div>
        </form>
    </div>
@endauth

@guest
    <div class="flex flex-wrap justify-center">
        <div class="w-1/2 p-4 flex flex-wrap justify-evenly">
            <x-element.button-a :href="route('login')">
                ログイン
            </x-element.button-a>
            <x-element.button-a :href="route('register')">
                会員登録
            </x-element.button-a>
        </div>
    </div>
@endguest
