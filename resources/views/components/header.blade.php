<header class="sticky top-0 z-50">
    <nav class="bg-white border-gray-200 dark:bg-neutral-900 w-full">
        <div class="max-w-screen-xl mx-auto p-4 grid grid-cols-6 items-center">
            <div class="col-span-1 md:col-span-2">
                <a href="{{ route('home') }}" class="flex items-center rtl:space-x-reverse">
                    <x-logo class="w-8 sm:w-10 lg:w-12"></x-logo>
                    <span
                        class="hidden ms-3 md:block self-center lg:text-2xl sm:text-xl font-semibold whitespace-nowrap dark:text-white">{{ config('app.name', '') }}</span>
                    </a>
            </div>

            <div class="col-span-4 md:col-span-2">
                <x-search></x-search>
            </div>


            <div class="col-span-1 md:col-span-2 flex justify-end">
                <div class="hidden md:block">
                    <x-light-mode id="default"></x-light-mode>
                </div>

                {{--                Mobile menu button--}}
                <button data-collapse-toggle="navbar-menu" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-menu" aria-expanded="false">
                    <span class="sr-only">Abrir menu de navegação</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                </button>
            </div>
        </div>
    </nav>
</header>

<div class="fixed md:static bg-white border-gray-200 dark:bg-neutral-900 shadow
dark:shadow-zinc-800 items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-menu">
    <div class="mx-auto p-2 md:pb-5 md:pt-0 grid grid-cols-6 items-center">
        <ul class="col-span-6 md-col-span-1 flex flex-col md:p-0 font-medium rounded-lg md:space-x-8
                rtl:space-x-reverse md:flex-row md:mt-0">
            <li>
                <x-nav-link :href="route('home')" :active="request()->routeIs('home')" class="p-3">
                    {{ __('Início') }}
                </x-nav-link>
            </li>
            <li>
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="p-3">
                    {{ __('Oficina De Manutenção') }}
                </x-nav-link>
            </li>
            <li>
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="p-3">
                    {{ __('Acordeões A Venda') }}
                </x-nav-link>
            </li>
            <li>
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="p-3">
                    {{ __('Captações Para Acordeon') }}
                </x-nav-link>
            </li>
            <li>
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="p-3">
                    {{ __('Sobre') }}
                </x-nav-link>
            </li>
            <li>
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="p-3">
                    {{ __('Sobre') }}
                </x-nav-link>
            </li>
            <li class="md:hidden">
                <hr class="dark:opacity-10">
                <div class="col-span-1 md:col-span-1 flex justify-end mt-2">
                    <x-light-mode id="mobile"></x-light-mode>
                </div>
            </li>
        </ul>
    </div>
</div>
