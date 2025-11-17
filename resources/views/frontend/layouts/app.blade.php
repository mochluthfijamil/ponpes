<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Pesantren Rohmatul Umam' }}</title>

    {{-- Tailwind / Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 text-gray-800">

    {{-- NAVBAR --}}
    @include('frontend.partials.navbar')

    {{-- HALAMAN --}}
    <main class="min-h-screen pt-4">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    @include('frontend.partials.footer')

</body>
</html>
