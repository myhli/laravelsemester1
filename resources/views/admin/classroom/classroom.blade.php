<x-admin.layout>
    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between mb-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">
                {{ $title ?? 'Classroom' }}
            </h1>
            <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                Kelola data kelas.
            </p>
        </div>
    </div>

    <div class="bg-white dark:bg-gray-800 rounded-2xl border border-gray-100 dark:border-gray-700 shadow-sm p-5 sm:p-6">
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left">
                <thead class="text-xs font-semibold text-gray-700 uppercase border-b border-gray-100 dark:text-gray-300 dark:border-gray-700">
                    <tr>
                        <th scope="col" class="py-3 px-4 text-left w-16">ID</th>
                        <th scope="col" class="py-3 px-4 text-left">NAME</th>
                        <th scope="col" class="py-3 px-4 text-left">MAJOR</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 dark:divide-gray-700">
                    @foreach ($classrooms as $classroom)
                        <tr class="hover:bg-gray-50/60 dark:hover:bg-gray-700/40 transition-colors">
                            <td class="py-3.5 px-4 text-gray-500 dark:text-gray-400">
                                {{ $classroom['id'] ?? $classroom->id }}
                            </td>
                            <td class="py-3.5 px-4 text-gray-800 dark:text-gray-100 font-medium">
                                {{ $classroom['name'] ?? $classroom->name }}
                            </td>
                            <td class="py-3.5 px-4 text-gray-600 dark:text-gray-300">
                                <span class="inline-block px-2.5 py-1 text-xs font-medium rounded-lg bg-blue-50 text-blue-700 dark:bg-blue-900/40 dark:text-blue-300">
                                    {{ $classroom['major'] ?? $classroom->major }}
                                </span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-admin.layout>
