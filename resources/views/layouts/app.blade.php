<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <title>Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#F8FAFC] text-[#1E293B]">

<div class="max-w-5xl mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6 text-indigo-500">Blog</h1>

    @if(session('success'))
        <div class="bg-green-100 p-3 mb-4 rounded">
            {{ session('success') }}
        </div>
    @endif

    @yield('content')
</div>

</body>
</html>