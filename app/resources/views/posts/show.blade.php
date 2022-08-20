<x-layout>
    <x-slot name='title'>
       {{$post}}- MY BBS
    </x-slot>

    <div class="back-link">
        &laquo; <a href="{{route('posts.index') }}">戻る</a>
    </div>
    <h1>{{$post}}</h1>

</x-layout>
