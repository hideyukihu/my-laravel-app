<x-layout>
    <x-slot name='title'>
        MY BBS
    </x-slot>
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
</x-layout>
