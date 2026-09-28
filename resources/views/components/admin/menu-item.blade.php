@php
    $isActive = request()->is(ltrim($href, '/')); // jika di klik, dia akan aktif
@endphp
<li>
    <a href="{{ $href }}"
        {{-- mengatur layout jika menu aktif (di klik) atau tidak --}}
        @class([
            'flex items-center p-2 text-base font-medium rounded-lg group',
            'bg-gray-100 text-gray-900 dark:bg-gray-700 dark:text-white' => $isActive, // jika menu aktif (diklik)
            'text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700' => !$isActive, //jika tidak
        ])>
        <svg
            aria-hidden="true"
            @class([
                'w-6 h-6 transition duration-75',
                'text-gray-900 dark:text-white' => $isActive, //jika menu aktif
                'text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white' => !$isActive,
            ])
            fill="currentColor"
            viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            {!! $icon ?? $slot !!}
        </svg>
        <span class="ml-3">{{ $label }}</span>
    </a>
</li>
