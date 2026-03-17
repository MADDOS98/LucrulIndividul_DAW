@extends('layouts.app')

@section('content')

<div class="max-w-xl mx-auto mt-10 bg-white p-6 rounded-xl shadow animate-fade">

    <form method="POST" action="{{ route('articles.store') }}">
        @csrf

        <input name="title" placeholder="Titlu"
            class="w-full mb-3 p-2 border rounded focus:ring-2 focus:ring-indigo-400 transition">

        <textarea name="content"
            class="w-full mb-3 p-2 border rounded focus:ring-2 focus:ring-indigo-400 transition"></textarea>

        <button class="bg-indigo-500 text-white px-4 py-2 rounded hover:scale-105 transition">
            Save
        </button>
        <button type="button" onclick="window.history.back()"
            class="bg-gray-500 text-white px-4 py-2 rounded hover:scale-105 transition">
            Cancel
        </button>

    </form>

</div>

@endsection