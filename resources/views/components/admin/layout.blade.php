<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body class="bg-gray-50 dark:bg-gray-900 antialiased overflow-x-hidden">

    <!-- 1. Navbar -->
    <x-admin.navbar/>

    <!-- 2. Sidebar -->
    <x-admin.sidebar/>

    <!-- 3. Area Konten Utama -->
    <div class="p-4 md:ml-64 pt-20 min-h-screen">
        <main class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
            {{ $slot }}
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>
</html>
