<x-admin.layout>
    {{-- Page Header --}}
    <div class="mb-6">
        <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <h1 class="text-2xl font-bold text-gray-900 dark:text-white">
                    Students
                </h1>

                <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                    Kelola data siswa.
                </p>
            </div>
        </div>
    </div>

    {{-- Main Card --}}
    <div class="bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
        {{-- Table --}}
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th class="px-6 py-3 text-center w-16">
                            No
                        </th>

                        <th class="px-6 py-3">
                            NIS
                        </th>

                        <th class="px-6 py-3">
                            Name
                        </th>

                        <th class="px-6 py-3">
                            Classroom
                        </th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($students as $index => $student)
                        <tr class="bg-white border-b hover:bg-gray-50 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700/50">
                            <td class="px-6 py-4 text-center font-medium text-gray-900 dark:text-white">
                                {{ $index + 1 }}
                            </td>

                            <td class="px-6 py-4 font-mono font-medium text-gray-900 dark:text-white">
                                {{ $student->nis ?? $student['nis'] }}
                            </td>

                            <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                                {{ $student->name ?? $student['name'] }}
                            </td>

                            <td class="px-6 py-4">
                                <span class="rounded bg-blue-100 px-2.5 py-0.5 text-xs font-medium text-blue-800 dark:bg-blue-900/60 dark:text-blue-300">
                                    {{ $student->classroom ?? $student['classroom'] }}
                                </span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-admin.layout>
