<x-admin.layout>

<div class="mb-4">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Teacher</h1>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">ID</th>
                    <th scope="col" class="px-6 py-3">Name</th>
                    <th scope="col" class="px-6 py-3">NIY</th>
                    <th scope="col" class="px-6 py-3">Subjects</th>
                    <th scope="col" class="px-6 py-3">Start Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teachers as $teacher)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">{{ $teacher->id }}</td>
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">{{ $teacher->name }}</td>
                        <td class="px-6 py-4">{{ $teacher->niy }}</td>
                        <td class="px-6 py-4">{{ $teacher->subject->name ?? 'Belum ada mapel' }}</td>
                        <td class="px-6 py-4">{{ \Carbon\Carbon::parse($teacher->start_date)->format('Y-m-d') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-admin.layout>
