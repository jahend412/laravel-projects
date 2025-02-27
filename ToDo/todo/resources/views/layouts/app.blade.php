<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo App - @yield('title')</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-800 min-h-screen">
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4">
            <h1 class="text-3xl font-bold text-gray-900">@yield('header', 'Todo App')</h1>
        </div>
    </header>
    <main class="max-w-7xl mx-auto">
        @yield('content')
    </main>
    
    <footer class="max-w-7xl mx-auto py-6 px-4 text-center text-gray-500">
        <p>Todo App - A Laravel Learing Project</p>
    </footer>
</body>
</html>