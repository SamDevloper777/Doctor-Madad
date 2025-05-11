<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Admin Dashboard' }}</title>
    @php
    $manifest = json_decode(file_get_contents(public_path('build/manifest.json')), true);
    $js = $manifest['resources/js/app.js']['file'] ?? null;
    $css = $manifest['resources/css/app.css']['css'][0] ?? null;
    @endphp

    @if ($js && $css)
    <link rel="stylesheet" href="{{ asset("build/{$css}") }}">
    <script type="module" src="{{ asset("build/{$js}") }}"></script>
    @endif

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

</head>

<body class="bg-gray-50">
    <div class="min-h-screen flex flex-col">
        <x-admin.header />
        <div class="flex-1 flex">
            <x-admin.sidebar />
            <main class="flex-1 p-6">
                {{ $slot }}
            </main>
        </div>
    </div>
      @livewireScripts
</body>

</html>