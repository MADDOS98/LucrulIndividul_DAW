@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('articles.update', $article) }}">
    @csrf
    @method('PUT')

    <input type="text" name="title"
        value="{{ $article->title }}"
        class="border p-2 w-full mb-3">

    <textarea name="content"
        class="border p-2 w-full mb-3">{{ $article->content }}</textarea>

    <button class="bg-indigo-500 text-white px-4 py-2 rounded">
        Update
    </button>
</form>

@endsection