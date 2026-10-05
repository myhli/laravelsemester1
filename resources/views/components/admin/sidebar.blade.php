<aside
    id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidebar"
>
    <div class="h-full px-3 pb-4 overflow-y-auto">

        <div class="px-3 mb-3 text-xs font-semibold text-gray-400 uppercase">
            Admin
        </div>

        <ul class="space-y-1">
            <x-admin.menu-item
                href="/admin/dashboard"
                label="Dashboard"
                icon='
                    <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                    <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                '
            />

            <x-admin.menu-item
                href="/admin/about"
                label="About"
                icon='
                    <path
                        fill-rule="evenodd"
                        d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.408-5.5a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2h-.01ZM10 10a1 1 0 1 0 0 2h1v3h-1a1 1 0 1 0 0 2h4a1 1 0 1 0 0-2h-1v-4a1 1 0 0 0-1-1h-2Z"
                        clip-rule="evenodd"
                    />'
            />
        </ul>

        {{-- MASTER DATA --}}
        <div class="px-3 mt-6 mb-3 text-xs font-semibold text-gray-400 uppercase">
            Master Data
        </div>

        <ul class="space-y-1">
            <x-admin.menu-item
                href="/admin/student"
                label="Student"
                icon='
                    <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                '
            />
        </ul>

    </div>
</aside>
