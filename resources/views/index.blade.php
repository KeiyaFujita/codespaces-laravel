<x-layout>
    <x-slot:title>
     Welcome To The My Earth
    </x-slot>

    <h1>My Bad
        posts
        <a href="{{ route('posts.create') }}">Add new</a>
    </h1>
    <ul>
        @forelse ($posts as $post)
           <li>
            <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
           </li>
        @empty
           <li>Not found!</li>
        @endforelse
    </ul>

</x-layout>
