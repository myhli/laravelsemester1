<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Laravel App' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
</head>
<body class="bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-white min-h-screen flex flex-col">
    <!-- Flowbite Header/Navbar Block -->
    <header>
        <nav class="bg-white border-b border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800 dark:border-gray-700">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <a href="/home" class="flex items-center">
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">LaravelApp</span>
                </a>
                <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                </button>
                <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                        <li>
                            <a href="/home" class="block py-2 pr-4 pl-3 rounded lg:p-0 {{ request()->is('home') ? 'text-blue-700 dark:text-white font-semibold' : 'text-gray-700 hover:text-blue-700 dark:text-gray-400 dark:hover:text-white' }}">Home</a>
                        </li>
                        <li>
                            <a href="/about" class="block py-2 pr-4 pl-3 rounded lg:p-0 {{ request()->is('about') ? 'text-blue-700 dark:text-white font-semibold' : 'text-gray-700 hover:text-blue-700 dark:text-gray-400 dark:hover:text-white' }}">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Content Slot / Section -->
    <main class="flex-grow max-w-screen-xl mx-auto w-full p-4 lg:p-6">
        @yield('content')
        {{ $slot ?? '' }}
    </main>

    <!-- Flowbite Footer Block -->
    <footer class="p-4 bg-white border-t border-gray-200 md:p-6 dark:bg-gray-800 dark:border-gray-700">
        <div class="max-w-screen-xl mx-auto flex items-center justify-between">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© {{ date('Y') }} LaravelApp. All Rights Reserved.</span>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>
</html>
