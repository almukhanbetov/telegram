<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-800">

    <div class="flex min-h-screen">

        <!-- SIDEBAR -->
        <aside id="sidebar"
            class="custom-scroll fixed z-40 inset-y-0 left-0 w-64
           bg-gray-900 text-white
           flex flex-col h-screen overflow-y-auto
           transform -translate-x-full
           md:translate-x-0
           transition-transform duration-300 ease-in-out">

            <!-- LOGO -->
            <div
                class="p-6 border-b border-gray-700
             flex items-center justify-center
             sticky top-0 z-10
             bg-gray-900 shadow-md">
                <img src="{{ asset('web/img/logo/logo.png') }}" alt="DevOps Admin" class="h-20 object-contain">
            </div>

            <!-- MENU -->
            <nav class="p-4 space-y-3 flex-1">
                <a href="index.html" class="block px-4 py-2 rounded bg-gray-800">
                    Главная
                </a>

                <a href="#" class="block px-4 py-2 rounded hover:bg-gray-800">
                    Студенты
                </a>

                <a href="live.html" class="block px-4 py-2 rounded hover:bg-gray-800">
                    Менторы онлайн
                </a>

                <div class="h-96"></div>
            </nav>

            <!-- CTA -->
            <div class="p-4 border-t border-gray-700">
                <button
                    class="w-full bg-orange-600 hover:bg-orange-700
               text-white font-semibold py-2 rounded-lg">
                    Оставить заявку
                </button>
            </div>

        </aside>

        <!-- OVERLAY -->
        <div id="overlay" onclick="closeSidebar()" class="fixed inset-0 bg-black/50 hidden z-30 md:hidden">
        </div>

        <!-- CONTENT -->
        <div class="flex-1 flex flex-col">

            <!-- HEADER -->
            <header
                class="fixed top-0 right-0 z-20
             h-16 w-full
             bg-gray-900 shadow
             px-4 flex items-center
             md:ml-64
             md:w-[calc(100%-16rem)]">

                <!-- LEFT (burger) -->
                <div class="flex items-center">
                    <button onclick="openSidebar()" class="md:hidden text-gray-300 hover:text-white relative z-50">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>

                <!-- RIGHT (search + auth) -->
                <div class="ml-auto flex items-center gap-3">

                    <!-- SEARCH -->
                    <input type="text" placeholder="Поиск..."
                        class="hidden sm:block
                 border border-gray-700
                 bg-gray-800 text-gray-200
                 rounded px-3 py-1 text-sm
                 focus:outline-none focus:border-orange-600">

                    <!-- AUTH -->
                    <a href="auth.html" class="text-gray-300 hover:text-white text-sm">
                        Войти
                    </a>

                    <a href="register.html"
                        class="bg-orange-600 hover:bg-orange-700
                 text-white px-3 py-1.5
                 rounded-lg text-sm font-semibold">
                        Регистрация
                    </a>

                </div>
            </header>

            <!-- MAIN -->
            <main class="flex-1 bg-gray-800 text-white pt-20 md:ml-64">
                @yield('content')

            </main>

        </div>
    </div>

    <!-- Scripts -->


</body>

</html>
