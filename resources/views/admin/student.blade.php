<x-admin.layout>
    {{-- Header Section --}}
    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between mb-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">
                {{ $title ?? 'Students' }}
            </h1>
            <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                Kelola data siswa.
            </p>
        </div>
        <div>
            <button type="button" class="inline-flex items-center justify-center px-4 py-2.5 text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 rounded-lg shadow-sm focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none transition-colors">
                <span class="mr-1.5 font-bold text-base leading-none">+</span> Tambah Siswa
            </button>
        </div>
    </div>

    {{-- Main Card --}}
    <div class="bg-white dark:bg-gray-800 rounded-2xl border border-gray-100 dark:border-gray-700 shadow-sm p-5 sm:p-6">
        {{-- Search and Filter Controls --}}
        <div class="flex flex-col sm:flex-row items-center justify-between gap-4 mb-6">
            <div class="relative w-full max-w-md">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none text-gray-400">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input
                    type="text"
                    id="table-search-students"
                    class="block w-full pl-10 pr-4 py-2 text-sm text-gray-900 border border-gray-200 rounded-xl bg-gray-50/50 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Cari nama atau NIS..."
                />
            </div>
            <div class="w-full sm:w-auto">
                <select id="class-filter-select" class="w-full sm:w-auto bg-white border border-gray-200 text-gray-700 text-sm rounded-xl px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected value="--Semua Kelas--">--Semua Kelas--</option>
                    <option value="X PPLG 1">X PPLG 1</option>
                    <option value="X PPLG 2">X PPLG 2</option>
                    <option value="XI PPLG 1">XI PPLG 1</option>
                    <option value="XI PPLG 2">XI PPLG 2</option>
                </select>
            </div>
        </div>

        {{-- Table --}}
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left">
                <thead class="text-xs font-semibold text-gray-700 uppercase border-b border-gray-100 dark:text-gray-300 dark:border-gray-700">
                    <tr>
                        <th scope="col" class="py-3 px-4 text-left w-16">NO</th>
                        <th scope="col" class="py-3 px-4 text-left">NAME</th>
                        <th scope="col" class="py-3 px-4 text-left">NIS</th>
                        <th scope="col" class="py-3 px-4 text-left">CLASS</th>
                        <th scope="col" class="py-3 px-4 text-left">STATUS</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 dark:divide-gray-700">
                    @foreach ($students as $index => $student)
                        <tr class="hover:bg-gray-50/60 dark:hover:bg-gray-700/40 transition-colors">
                            <td class="py-3.5 px-4 text-gray-500 dark:text-gray-400">
                                {{ $index + 1 }}
                            </td>
                            <td class="py-3.5 px-4 text-gray-800 dark:text-gray-100 font-normal">
                                {{ $student['name'] }}
                            </td>
                            <td class="py-3.5 px-4 text-gray-500 dark:text-gray-400">
                                {{ $student['nis'] }}
                            </td>
                            <td class="py-3.5 px-4 text-gray-600 dark:text-gray-300">
                                {{ $student['class'] }}
                            </td>
                            <td class="py-3.5 px-4">
                                @if (strtolower($student['status'] ?? 'active') === 'active')
                                    <span class="inline-block px-3 py-1 text-xs font-medium rounded-full bg-emerald-50 text-emerald-600 dark:bg-emerald-950/50 dark:text-emerald-400">
                                        Active
                                    </span>
                                @else
                                    <span class="inline-block px-3 py-1 text-xs font-medium rounded-full bg-rose-50 text-rose-600 dark:bg-rose-950/50 dark:text-rose-400">
                                        Inactive
                                    </span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const searchInput = document.getElementById('table-search-students');
            const classFilter = document.getElementById('class-filter-select');
            const rows = document.querySelectorAll('tbody tr');

            function filterTable() {
                const query = searchInput ? searchInput.value.toLowerCase().trim() : '';
                const selectedClass = classFilter ? classFilter.value : '--Semua Kelas--';

                rows.forEach(row => {
                    const name = row.children[1]?.textContent.toLowerCase() || '';
                    const nis = row.children[2]?.textContent.toLowerCase() || '';
                    const className = row.children[3]?.textContent.trim() || '';

                    const matchesQuery = !query || name.includes(query) || nis.includes(query);
                    const matchesClass = selectedClass === '--Semua Kelas--' || className === selectedClass;

                    row.style.display = (matchesQuery && matchesClass) ? '' : 'none';
                });
            }

            if (searchInput) {
                searchInput.addEventListener('input', filterTable);
            }
            if (classFilter) {
                classFilter.addEventListener('change', filterTable);
            }
        });
    </script>
</x-admin.layout>
