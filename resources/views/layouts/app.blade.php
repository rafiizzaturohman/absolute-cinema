<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel - @yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        @endif
    </head>
    
    <body class="bg-gray-400/75 text-white max-w-7xl mx-auto my-3">
        <main class="bg-black rounded-2xl">
            <nav class="font-semibold px-20 py-6 border-b border-slate-400">
                <ul class="flex flex-row justify-between text-center items-center">
                    <li>
                        <p class="font-black text-xl">Absolute Cinema</p>
                    </li>
    
                    <div class="flex flex-row space-x-4">
                        <li>
                            <a href="#list-films">In Theatres</a>
                        </li>
                        <li>
                            <a href="#list-cinemas">Cinema List</a>
                        </li>
                        <li>
                            <a href="#">My Favorites</a>
                        </li>
                    </div>
                </ul>
            </nav>
    
            <section class="py-4">
                @yield('content')
            </section>
        </main>
    </body>
</html>
