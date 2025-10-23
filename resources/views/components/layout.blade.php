<!DOCTYPE html>
<html lang="en" class="h-full bg-slate-100 dark:bg-gray-900">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Document</title>

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif

        @vite('resources/js/theme-toggler.js')
    </head>
    <body class="h-full">
        <div class="min-h-full">
            <nav class="bg-gray-900 dark:bg-gray-900">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="flex h-16 items-center justify-between">
                        <div class="flex items-center">
                            <div class="shrink-0">
                                <img src="{{ asset('images/catto.jpg') }}" alt="Piioni" class="size-8 rounded" />
                            </div>
                            <div class="hidden md:block">
                                <div class="ml-10 flex items-baseline space-x-4">
                                    <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                                    <x-nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav-link>
                                    <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
                                </div>
                            </div>
                        </div>
                        <div class="md:block">
                            <div class="ml-4 flex items-center gap-8 md:ml-6">
                                <button
                                    id="theme-toggle"
                                    type="button"
                                    class="rounded-lg p-2.5 text-sm text-slate-500 transition-colors hover:bg-slate-100 hover:text-slate-900 focus:ring-4 focus:ring-slate-600 focus:outline-none dark:text-slate-400 hover:dark:bg-slate-700 dark:hover:text-slate-100"
                                    aria-label="Toggle dark mode"
                                >
                                    <!-- Sol (Light mode) -->
                                    <svg
                                        id="theme-toggle-light-icon"
                                        class="hidden h-5 w-5 transition-colors"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                        ></path>
                                    </svg>
                                    <!-- Luna (Dark mode) -->
                                    <svg
                                        id="theme-toggle-dark-icon"
                                        class="h-5 w-5 transition-colors"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z"
                                        ></path>
                                    </svg>
                                </button>

                                <button
                                    class="relative flex max-w-xs items-center rounded-full focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500"
                                >
                                    <span class="absolute -inset-1.5"></span>
                                    <span class="sr-only">Open user menu</span>
                                    <img
                                        src="{{ asset('images/trunk.png') }}"
                                        alt=""
                                        class="size-8 rounded-full outline -outline-offset-1 outline-white/10"
                                    />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <header
                class="relative bg-gray-800 after:pointer-events-none after:absolute after:inset-x-0 after:inset-y-0 after:border-y after:border-white/10"
            >
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    <h1 class="text-3xl font-bold tracking-tight text-white">{{ $heading }}</h1>
                </div>
            </header>
            <main>
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 dark:text-gray-300">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </body>
</html>
