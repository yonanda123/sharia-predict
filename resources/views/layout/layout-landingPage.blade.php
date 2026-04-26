<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>@yield('title', 'Form Tracer')</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .background-images {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
        }

        .background-images img {
            position: absolute;
            width: 50%;
            height: auto;
            object-fit: cover;
        }

        .background-images .top-left {
            top: 0;
            left: 0;
        }

        .background-images .top-right {
            top: 0;
            right: 0;
        }

        .highlighted-text {
            background: linear-gradient(to right, #252F3E, #6B84AA);
            border-radius: 1ch;
            padding: 0.2rem 1rem;
            color: white;
        }

        .relative-container {
            position: relative;
            height: 13vh;
        }

        .bottom-right {
            position: absolute;
            bottom: 0;
            right: 0;
        }

        .center {
            position: absolute;
            top: 30%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80%;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 10;
        }

        .main-container {
            display: grid;
            grid-template-rows: auto auto 1fr;
        }

        @media (max-width: 768px) {
            .relative-container {
                height: auto;
            }
        }
    </style>
</head>

<body>
    <div class="min-h-full">
        <nav class="bg-white" x-data="{ isOpen: false }">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-20 items-center justify-between">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <a href="{{ route('get.beranda') }}"
                                class="flex items-center space-x-3 rtl:space-x-reverse">
                                <img src="{{ URL('img/logo.png') }}" class="h-10 w-10 object-contain object-center"
                                    alt="Sharia Predict Logo" />
                                <span class="text-xl font-semibold whitespace-nowrap tracking-tight dark:text-white">
                                    Sharia Prediction
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="hidden md:flex md:items-center md:justify-between w-full">
                        <div class="ml-auto flex items-baseline space-x-4">
                            <a href="#"
                                class="rounded-md px-3 py-2 text-sm font-medium text-gray-900 hover:text-blue-700"
                                aria-current="page">Beranda</a>
                            <a href="#"
                                class="rounded-md px-3 py-2 text-sm font-medium text-gray-900 hover:text-blue-700">Berita</a>
                            <a href="#"
                                class="rounded-md px-3 py-2 text-sm font-medium text-gray-900 hover:text-blue-700">Statistik</a>
                            <a href="#"
                                class="rounded-md px-3 py-2 text-sm font-medium text-gray-900 hover:text-blue-700">Faq</a>
                        </div>
                        <a href="{{ route('get.login') }}"
                            class="inline-block ml-3 px-3 py-1 border border-transparent text-base font-medium rounded-md shadow-2xl text-white bg-blue-500 hover:bg-blue-700">Login</a>
                    </div>
                    <div class="-mr-2 flex md:hidden">
                        <!-- Mobile menu button -->
                        <button type="button" @click="isOpen = !isOpen"
                            class="relative inline-flex items-center justify-center rounded-md bg-blue-700 p-2 text-white hover:bg-blue-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-white"
                            aria-controls="mobile-menu" aria-expanded="false">
                            <span class="absolute -inset-0.5"></span>
                            <span class="sr-only">Open main menu</span>
                            <!-- Menu open: "hidden", Menu closed: "block" -->
                            <svg :class="{ 'hidden': isOpen, 'block': !isOpen }" class="block h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                            <!-- Menu open: "block", Menu closed: "hidden" -->
                            <svg :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Mobile menu, show/hide based on menu state. -->
            <div x-show="isOpen" class="md:hidden" id="mobile-menu">
                <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                    <a href="#"
                        class="block rounded-md hover:bg-blue-700 px-3 py-2 text-base font-medium text-gray-900 hover:text-white"
                        aria-current="page">Beranda</a>
                    <a href="#"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-900 hover:bg-blue-700 hover:text-white">Berita</a>
                    <a href="#"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-900 hover:bg-blue-700 hover:text-white">Statistik</a>
                    <a href="#"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-900 hover:bg-blue-700 hover:text-white">Faq</a>
                </div>
            </div>
        </nav>
        <div class="background-images">
            <img src="{{ URL('img/linear-green.png') }}" alt="Background Top Left" class="top-left">
            <img src="{{ URL('img/linear-purple.png') }}" alt="Background Top Right" class="top-right">
        </div>
        <main class="main-container">
            @yield('content.landing.page')
        </main>
        <footer class="bg-white dark:bg-gray-900 mt-14">
            <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
                <div class="sm:flex sm:items-center sm:justify-between">
                    <a href="{{ route('get.beranda') }}"
                        class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                        <img src="{{ URL('img/logo.png') }}" class="h-10 w-10 object-contain object-center"
                            alt="Sharia Predict Logo" />
                        <span
                            class="self-center text-xl font-semibold whitespace-nowrap tracking-tight dark:text-white">
                            Sharia Prediction
                        </span>
                    </a>
                </div>
                <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
                <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">
                    © 2024 <a href="{{ route('get.beranda') }}" class="hover:underline">Sharia Prediction</a>. All
                    Rights Reserved.
                </span>
            </div>
        </footer>
    </div>

</body>

</html>
