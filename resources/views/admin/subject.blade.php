<x-admin.layout>

<div class="mb-4">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Subject</h1>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">ID</th>
                    <th scope="col" class="px-6 py-3">Name</th>
                    <th scope="col" class="px-6 py-3">Teacher</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subjects as $subject)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">{{ $subject->id }}</td>
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">{{ $subject->name }}</td>
                        <td class="px-6 py-4">{{ $subject->teacher->name ?? 'Belum ada guru' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-admin.layout>
