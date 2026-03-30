<x-layout>
    <x-slot:title>
       Ediiiiiiiit post | Welcome To The My Earth
    </x-slot>

     <h1>Add new post</h1>
     <form method="post" action="{{ route('posts.update', $post) }}">
        @method('PATCH')
        @csrf

        <div>
            <label>
                Title
                <input type="text" name="title" value="{{ old('title') }}">
            </label>
            @error('title')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label>
                Body
                <textarea name="body">{{ old('body', $post->body) }}</textarea>
            </label>
                @error('body')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <button>あぷで</button>
        </div>
     </form>

     <p class="back-link"><a href="{{ route('posts.show', $post) }}">Back to the future</a></p>
</x-layout>


