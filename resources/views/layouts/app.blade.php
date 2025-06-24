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
        
        <!-- Iconos (Font Awesome) -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            <!-- Barra de navegación mejorada -->
            <nav class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex">
                            <!-- Logo -->
                            <div class="shrink-0 flex items-center">
                                <a href="{{ route('inicio') }}">
                                    <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                                </a>
                            </div>

                            <!-- Links de navegación -->
                            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                @auth
                                    <x-nav-link :href="route('inicio')" :active="request()->routeIs('inicio')">
                                        <i class="fas fa-home mr-2"></i> Inicio
                                    </x-nav-link>
                                    
                                    @can('admin')
                                    <x-nav-link :href="route('admin.register.create')" :active="request()->routeIs('admin.register.*')">
                                        <i class="fas fa-user-plus mr-2"></i> Registrar Usuarios
                                    </x-nav-link>
                                    @endcan
                                @endauth
                            </div>
                        </div>

                        <!-- Menú derecha (autenticación) -->
                        <div class="hidden sm:flex sm:items-center sm:ml-6">
                            @auth
                                <!-- Menú desplegable del perfil -->
                                <x-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                            <div>{{ Auth::user()->name }}</div>
                                            <div class="ml-1">
                                                <i class="fas fa-chevron-down"></i>
                                            </div>
                                        </button>
                                    </x-slot>

                                    <x-slot name="content">
                                        <x-dropdown-link :href="route('profile.edit')">
                                            <i class="fas fa-user-circle mr-2"></i> Perfil
                                        </x-dropdown-link>

                                        <!-- Formulario de logout -->
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <x-dropdown-link :href="route('logout')"
                                                    onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                                <i class="fas fa-sign-out-alt mr-2"></i> Cerrar Sesión
                                            </x-dropdown-link>
                                        </form>
                                    </x-slot>
                                </x-dropdown>
                            @else
                                <!-- Links para invitados -->
                                <div class="space-x-4">
                                    <a href="{{ route('login') }}" class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-gray-100">
                                        <i class="fas fa-sign-in-alt mr-1"></i> Iniciar Sesión
                                    </a>
                                    <a href="{{ route('register') }}" class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-gray-100">
                                        <i class="fas fa-user-plus mr-1"></i> Registrarse
                                    </a>
                                </div>
                            @endauth
                        </div>

                        <!-- Botón móvil -->
                        <div class="-mr-2 flex items-center sm:hidden">
                            <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Menú móvil -->
                <div class="sm:hidden" x-show="open" @click.away="open = false">
                    <div class="pt-2 pb-3 space-y-1">
                        @auth
                            <x-responsive-nav-link :href="route('inicio')" :active="request()->routeIs('inicio')">
                                <i class="fas fa-home mr-2"></i> Inicio
                            </x-responsive-nav-link>
                            
                            @can('admin')
                            <x-responsive-nav-link :href="route('admin.register.create')" :active="request()->routeIs('admin.register.*')">
                                <i class="fas fa-user-plus mr-2"></i> Registrar Usuarios
                            </x-responsive-nav-link>
                            @endcan
                            
                            <x-responsive-nav-link :href="route('profile.edit')">
                                <i class="fas fa-user-circle mr-2"></i> Perfil
                            </x-responsive-nav-link>
                            
                            <!-- Logout móvil -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-responsive-nav-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    <i class="fas fa-sign-out-alt mr-2"></i> Cerrar Sesión
                                </x-responsive-nav-link>
                            </form>
                        @else
                            <x-responsive-nav-link :href="route('login')">
                                <i class="fas fa-sign-in-alt mr-2"></i> Iniciar Sesión
                            </x-responsive-nav-link>
                            <x-responsive-nav-link :href="route('register')">
                                <i class="fas fa-user-plus mr-2"></i> Registrarse
                            </x-responsive-nav-link>
                        @endauth
                    </div>
                </div>
            </nav>

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main class="py-6">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>