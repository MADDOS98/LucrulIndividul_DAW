@extends('layouts.app')

@section('content')

<a href="{{ route('articles.create') }}"
   class="bg-indigo-500 text-white px-4 py-2 rounded">
   + Adaugă articol
</a>

<div class="mt-6 space-y-4">
    @foreach($articles as $article)
        <div class="p-4 bg-white rounded shadow">
            <h2 class="text-xl font-bold">{{ $article->title }}</h2>
            <p>{{ $article->content }}</p>

            <div class="mt-3 flex gap-2">
                <a href="{{ route('articles.edit', $article) }}"
                   class="text-blue-500">Edit</a>

                <form method="POST"
                      action="{{ route('articles.destroy', $article) }}">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-500">Delete</button>
                </form>
            </div>
        </div>
    @endforeach
</div>

{{ $articles->links() }}

@endsection