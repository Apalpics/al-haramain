<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Al Haramain' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-900 text-gray-100 min-h-screen flex flex-col">

    {{-- GLOBAL NAVIGATION --}}
    @include('layouts.navigation')

    {{-- PAGE CONTENT --}}
    <main class="flex-grow">
        {{ $slot }}
    </main>

    {{-- FOOTER --}}
    @include('layouts.footer')

</body>
</html>
