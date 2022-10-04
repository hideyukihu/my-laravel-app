<div class="flex justify-center">
    <div class="max-w-sxreen-sm w-full">
        @auth
        <form action="{{route('logout')}}" method="post">
            @csrf
            <div class="flex justify-end p-4">
                <button class="mt-2 text-sm text-gray-500 hover:text-gray-800" onclick="event.preventDefault(); this.closest('form').">ログアウト</button>
            </div>
        </form>
        @endauth
        {{$slot}}
    </div>
</div>
