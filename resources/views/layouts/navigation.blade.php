<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <div class="shrink-0 flex items-center">
                    <a href="/" class="font-black text-xl text-indigo-600 tracking-tighter">
                        AUTO-SERWIS
                    </a>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="url('/')" :active="request()->is('/')">
                        Strona Główna
                    </x-nav-link>
                    @auth
                        @if(auth()->user()->role === 'mechanic')
                            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                                Panel
                            </x-nav-link>
                        @endif
                        <x-nav-link :href="route('appointments.index')" :active="request()->routeIs('appointments.index')">
                            Wizyty
                        </x-nav-link>
                    @endauth
                    <x-nav-link :href="route('about')" :active="request()->routeIs('about')">
                        O nas
                    </x-nav-link>
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ms-6">
                @auth
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }} ({{ Auth::user()->role }})</div>
                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.292a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>
                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">Profil</x-dropdown-link>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                    Wyloguj się
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline font-semibold">Zaloguj</a>
                    <a href="{{ route('register') }}" class="ms-4 text-sm text-gray-700 underline font-semibold">Rejestracja</a>
                @endauth
            </div>
        </div>
    </div>
</nav>