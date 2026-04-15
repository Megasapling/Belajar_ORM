<!DOCTYPE html>
<html>
<head>
    <title>Daftar Post</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1>Data dari Database SQLite</h1>
    @foreach($data as $item)
        <div style="border: 1px solid #ffffff; padding: 10px; margin-bottom: 10px;">
            <h3>{{ $item->title }}</h3>
            <p>{{ $item->content }}</p>
        </div>
    @endforeach
</body>
<body class="bg-gray-50 text-gray-900 font-sans">
    <div class="max-w-6xl mx-auto p-6">
        <header class="py-10 border-b border-gray-200 mb-10">
            <h1 class="text-3xl font-bold tracking-tight">Katalog Data SQLite</h1>
            <p class="text-gray-500 mt-2">Daftar artikel yang berhasil diambil dari database.</p>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($data as $item)
                <article class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:border-blue-400 transition-colors">
                    <span class="text-blue-600 text-xs font-semibold tracking-widest uppercase">Post #{{ $item->id }}</span>
                    <h2 class="text-xl font-bold mt-2 mb-3 text-gray-800">{{ $item->title }}</h2>
                    <p class="text-gray-600 leading-relaxed">{{ $item->content }}</p>
                    <div class="mt-6 pt-6 border-t border-gray-50 flex items-center text-sm text-gray-400">
                        <span>{{ $item->created_at->diffForHumans() }}</span>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</body>
</html>