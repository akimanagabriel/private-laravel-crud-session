<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>

    <header class="bg-gray-100 text-center py-5">
        <h1>LARAVEL CRUD APPLICATION</h1>
    </header>
    <div class="flex h-screen">
        <aside class="bg-gray-100 w-[300px] p-10">
            <ul>
                <li><a href="/">HOME</a></li>
                <li><a href="/book">LIBRARY</a></li>
            </ul>
        </aside>
        <main class="p-10">
            @yield('content')
        </main>
    </div>

</body>

</html>
