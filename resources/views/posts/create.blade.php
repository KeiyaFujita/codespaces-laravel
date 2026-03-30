<x-layout>
    <x-slot:title>
       Add new post | Welcome To The My Earth
    </x-slot>

     <h1>Add new post</h1>
     <form method="post" action="{{ route('posts.store' )}}">
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
                <textarea name="body">{{ old('body') }}</textarea>
            </label>
                @error('body')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <button>あど</button>
        </div>
     </form>

     <p class="back-link"><a href="{{ route('posts.index') }}">Back to the future</a></p>
</x-layout>


