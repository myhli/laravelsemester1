<x-admin.layout>
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">
            {{ $title }}
        </h1>

        <p class="text-cyan-500 dark:text-cyan-400 mt-1">
            Nama :{{ $content['name'] }}
            <br>
            Github : {{ $content['github'] }}
        </p>
    </div>
</x-admin.layout>
