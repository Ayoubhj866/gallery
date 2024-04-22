<nav class="bg-white border-gray-200 py-2.5 dark:bg-gray-900">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
        <a href="#" class="flex items-center">
            <img src="{{ asset('images/logo.svg') }}" class="h-6 mr-3 sm:h-9" alt="Landwind Logo" />
            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">ImageScape</span>
        </a>
        <div class="flex items-center lg:order-2">
            @auth
                @if (Route::has('dashboard'))
                    <x-yubi.secondary-button :url="route('dashboard')">Dasboard</x-yubi.secondary-button>
                @endif
            @else
                {{-- login button  --}}
                <x-yubi.secondary-button :url="route('login')">Login</x-yubi.secondary-button>
                <x-yubi.purple-button :url="route('register')">Register</x-yubi.purple-button>
            @endauth





            <x-yubi.open-menu-button />


        </div>
        <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
            <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">

                <x-yubi.nav-link navName='Home'></x-yubi.nav-link>

                <li>
                    <a href="#"
                        class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
