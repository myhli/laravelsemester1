

@php
    $isActive = request()->is(ltrim($href, "/"));
@endphp

<li>
    <a href="{{ $href }}"
       @class([

           'flex items-center p-2 text-base font-medium rounded-lg group transition-colors',


           'bg-gray-100 dark:bg-gray-700 text-blue-600 dark:text-blue-500' => $isActive,

           'text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700' => !$isActive,
       ])>

        <svg aria-hidden="true"
             @class([
                 'w-6 h-6 transition duration-75 group-hover:text-gray-900 dark:group-hover:text-white',
                 'text-blue-600 dark:text-blue-500' => $isActive,
                 'text-gray-500 dark:text-gray-400' => !$isActive,
             ])
             fill="currentColor"
             viewBox="0 0 20 20"
             xmlns="http://www.w3.org/2000/svg">
            {!! $icon !!}
        </svg>

        <span class="ml-3">{{ $label }}</span>
    </a>
</li>
