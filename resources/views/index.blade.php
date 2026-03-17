@extends('layouts.app')

@section('content')

<a href="{{ route('articles.create') }}"
    class="bg-indigo-500 text-white px-4 py-2 rounded-lg shadow hover:scale-105 transition">
    + Articol
</a>

<div class="grid md:grid-cols-3 gap-6 mt-6">

    @foreach($articles as $article)

    <div class="bg-white rounded-xl shadow hover:shadow-xl transition transform hover:-translate-y-2 duration-300 overflow-hidden">

        <!-- Image -->
        <img src="https://picsum.photos/seed/{{ $article->id }}/400/250"
            class="w-full h-40 object-cover">

        <!-- Content -->
        <div class="p-4">
            <h2 class="text-lg font-semibold mb-2">
                {{ $article->title }}
            </h2>

            <p class="text-gray-600 text-sm mb-3">
                {{ Str::limit($article->content, 80) }}
            </p>

            <div class="flex justify-between text-sm">
                <a href="{{ route('articles.edit', $article) }}"
                    class="text-blue-500 hover:underline">
                    Edit
                </a>

                <form method="POST"
                    action="{{ route('articles.destroy', $article) }}">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-500 hover:underline">
                        Delete
                    </button>
                </form>
            </div>
        </div>

    </div>

    @endforeach

</div>

@endsection