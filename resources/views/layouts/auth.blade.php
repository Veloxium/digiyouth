<!DOCTYPE html>
<html lang="id" x-data="{ open: false }" x-cloak>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/custom.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>@yield('title', 'Home') | Digiyouth</title>
</head>

<body class="font-outfit">
    <main>
        @yield('content')
    </main>
</body>

</html>
