{{-- Modal Create Student --}}
<div
    id="createStudentModal"
    tabindex="-1"
    aria-hidden="true"
    class="hidden fixed inset-0 z-50 items-center justify-center w-full h-full overflow-y-auto overflow-x-hidden"
>
    <div class="relative w-full max-w-lg p-4">

        {{-- Modal Content --}}
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">

            {{-- Modal Header --}}
            <div class="flex items-center justify-between p-4 border-b rounded-t dark:border-gray-600">

                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Tambah Data Siswa
                </h3>

                <button
                    type="button"
                    data-modal-hide="createStudentModal"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                >
                    <svg
                        class="w-3 h-3"
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 14 14"
                    >
                        <path
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"
                        />
                    </svg>
                </button>

            </div>

            {{-- Modal Body --}}
            <form
                action="{{ route('admin.student.store') }}"
                method="POST"
                class="p-4"
            >
                @csrf

                <div class="space-y-4">

                    {{-- Name --}}
                    <div>
                        <label
                            for="name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                        >
                            Nama Siswa
                        </label>

                        <input
                            type="text"
                            name="name"
                            id="name"
                            value="{{ old('name') }}"
                            required
                            placeholder="Masukkan nama siswa"
                            class="w-full p-2.5 text-sm text-gray-900 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:text-white"
                        >

                        @error('name')
                            <p class="mt-1 text-sm text-red-600">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    {{-- NIS --}}
                    <div>
                        <label
                            for="nis"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                        >
                            NIS
                        </label>

                        <input
                            type="text"
                            name="nis"
                            id="nis"
                            value="{{ old('nis') }}"
                            required
                            placeholder="Masukkan NIS"
                            class="w-full p-2.5 text-sm text-gray-900 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:text-white"
                        >

                        @error('nis')
                            <p class="mt-1 text-sm text-red-600">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    {{-- Classroom --}}
                    <div>
                        <label
                            for="classroom_id"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                        >
                            Kelas
                        </label>

                        <select
                            name="classroom_id"
                            id="classroom_id"
                            required
                            class="w-full p-2.5 text-sm text-gray-900 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:text-white"
                        >
                            <option value="">-- Pilih Kelas --</option>

                            @foreach ($classrooms as $classroom)
                                <option
                                    value="{{ $classroom->id }}"
                                    {{ old('classroom_id') == $classroom->id ? 'selected' : '' }}
                                >
                                    {{ $classroom->name }}
                                </option>
                            @endforeach

                        </select>

                        @error('classroom_id')
                            <p class="mt-1 text-sm text-red-600">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    {{-- Address --}}
                    <div>
                        <label
                            for="address"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                        >
                            Alamat
                        </label>

                        <textarea
                            name="address"
                            id="address"
                            rows="3"
                            required
                            placeholder="Masukkan alamat siswa"
                            class="w-full p-2.5 text-sm text-gray-900 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:text-white"
                        >{{ old('address') }}</textarea>

                        @error('address')
                            <p class="mt-1 text-sm text-red-600">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                </div>

                {{-- Modal Footer --}}
                <div class="flex items-center space-x-4 border-t border-gray-200 dark:border-gray-600 pt-4 md:pt-6">

                    <button
                        type="submit"
                        class="inline-flex items-center text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 focus:outline-none dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    >
                        <svg class="w-4 h-4 me-1.5 -ms-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/></svg>
                        Tambah Siswa
                    </button>

                    <button
                        type="button"
                        data-modal-hide="createStudentModal"
                        class="text-gray-700 bg-white border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-4 py-2.5 focus:outline-none dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:bg-gray-600"
                    >
                        Batal
                    </button>

                </div>

            </form>

        </div>
    </div>
</div>
