@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('articles.store') }}">
    @csrf

    <input type="text" name="title" placeholder="Titlu"
        class="border p-2 w-full mb-3">

    <textarea name="content" placeholder="Conținut"
        class="border p-2 w-full mb-3"></textarea>

    <button class="bg-indigo-500 text-white px-4 py-2 rounded">
        Salvează
    </button>
</form>

@endsection