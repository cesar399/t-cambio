<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 shadow-sm">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->

                <div class="hidden sm:flex sm:items-center sm:ml-8">
                    <x-dropdown align="top" width="48">
                        <x-slot name="trigger">
                            <button class="flex items-center text-sm font-medium text-black-200 hover:text-black-200 hover:border-black-100 focus:outline-none focus:text-black-300 focus:border-black-300 transition duration-150 ease-in-out">
                                <div>Cambios</div>

                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('tipo_cambio.index')">
                                {{ __('Listado') }}
                            </x-dropdown-link>
                            <!-- Authentication -->
                            <x-dropdown-link :href="route('tipo_cambio.create')">
                                {{ __('Nuevo') }}
                            </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                @guest
                    <nav class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <ul class="nav nav-pills">
                            <li class="nav-item {{setActive('home')}}">
                                <a class=" nav-link" href="{{ route('login') }}" class="ml-4 text-sm text-black-700 underline">Iniciar Sesión</a>
                                |
                                <a class=" nav-link" href="{{ route('register') }}" class="ml-4 text-sm text-black-700 underline">Registrarse</a>
                            </li>
                        </ul>
                    </nav>
                </div>

            @else
                <div class="hidden sm:flex sm:items-center sm:ml-8">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="flex items-center text-sm font-medium text-black-500 hover:text-black-700 hover:border-black-300 focus:outline-none focus:text-black-700 focus:border-black-300 transition duration-150 ease-in-out">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link >
                                {{ __('apiKey') }} = {{ Auth::user()->access_key }}
                            </x-dropdown-link>
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Cerrar Sesión') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            @endguest

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->

            @guest
                <div class="pt-4 pb-1 border-t border-black-200">
                    <div class="px-4">
                        <div class="font-medium text-base text-black-800"><a class=" nav-link" href="{{ route('login') }}" class="ml-4 text-sm text-black-700 underline">Iniciar Sesión</a></div> |
                        <div class="font-medium text-sm text-black-500"><a class=" nav-link" href="{{ route('register') }}" class="ml-4 text-sm text-black-700 underline">Registrarse</a></div>
                    </div>
                </div>
            @else
                <div class="pt-4 pb-1 border-t border-black-200">
                    <div class="px-4">
                        <div class="font-medium text-base text-black-800">{{ Auth::user()->name }}</div>
                    </div>

                    <div class="mt-3 space-y-1">
                        <x-dropdown-link :href="route('tipo_cambio.index')">
                            {{ __('Generar apiKey') }} = {{ Auth::user()->access_key }}
                        </x-dropdown-link>
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-responsive-nav-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Cerrar Sesión') }}
                            </x-responsive-nav-link>
                        </form>
                    </div>
                </div>
            @endguest
        </div>
    </div>
</nav>
