<x-layout>
    <x-slot:title>
       {{ $post->title }} |Welcome To The My Earth
    </x-slot>

     <h1>
        {{ $post->title }}
        <a href="{{ route('posts.edit', $post) }}">編集せよ</a>
        <form method="post" action="{{ route('posts.destroy', $post) }}" id="delete-form">
            @method('DELETE')
            @csrf
            <button>削除削除削除</button>
        </form>
    </h1>
     <p>{!! nl2br(e($post->body)) !!}</p>


     <h2>Comments</h2>
     <ul>
    @forelse ($post->comments as $comment)
        <li>
            {{ $comment->body }}
            <form method="post" action="{{ route('posts.comments.destroy', [$post,$comment]) }}" class="comment-delete-form">
                @csrf
                @method('DELETE')
                <button>DelEEEEt</button>
            </form>
        </li>
    @empty
        <li>No comment.</li>
    @endforelse
     </ul>

     <h2>コメント追加嗚呼</h2>
     <form method="post" action="{{ route('posts.comments.store', $post) }}">
        @csrf
        <div>
            <input type="text" name="body">
            @error('body')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <button>Add</button>
        </div>
     </form>

     <p class="back-link"><a href="{{ route('posts.index') }}">Back to the future</a></p>

     <script>
        'use strict';

        {
            const form = document.querySelector('#delete-form');
            form.addEventListener('submit', (e)=> {
                e.preventDefault();

                if (confirm('マジィ?') === false){
                    return;
                }

                form.submit();
        });

        const commentForms = document.querySelectorAll('.comment-delete-form');
        commentForms.forEach((commentForm) =>{
            commentForm.addEventListener('submit', (e)=> {
                e.preventDefault();

                if (confirm('マ?') === false){
                    return;
                }

                commentForm.submit();
        });
        });

        }
     </script>
</x-layout>
