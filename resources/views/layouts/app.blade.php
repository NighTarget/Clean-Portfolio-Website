<!DOCTYPE html>
<html lang="en" class="h-full bg-white text-neutral-900 antialiased">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portfolio')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-full flex flex-col justify-between max-w-3xl mx-auto px-6 py-12">

    <!-- Minimal Header -->
    <header class="flex justify-between items-center mb-16">
        <a href="{{ route('home') }}" class="font-medium text-lg tracking-tight hover:opacity-75 transition text-neutral-900">
            MUH. ALFI REZKI AZIS<span class="text-neutral-400">.</span>
        </a>
        <nav class="flex space-x-6 text-sm text-neutral-500">
            <a href="{{ route('home') }}" class="hover:text-neutral-900 transition {{ request()->routeIs('home') ? 'text-neutral-900 underline underline-offset-8 font-medium' : '' }}">Home</a>
            <a href="{{ route('projects') }}" class="hover:text-neutral-900 transition {{ request()->routeIs('projects') ? 'text-neutral-900 underline underline-offset-8 font-medium' : '' }}">Work</a>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="grow">
        @yield('content')
    </main>

    <!-- Minimal Footer -->
    <footer class="mt-20 pt-8 border-t border-neutral-200 text-xs text-neutral-500 flex justify-between items-center">
        <p>&copy; {{ date('Y') }} — Built with Laravel & Herd</p>
        <div class="flex space-x-4">
            <a href="http://github.com/NighTarget/" target="_blank" class="hover:text-neutral-900 transition">GitHub</a>
            <a href="mailto:alfi.mks2009@gmail.com" class="hover:text-neutral-900 transition">Email</a>
        </div>
    </footer>

</body>
</html>
