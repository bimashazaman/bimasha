<header class="flex items-center justify-between px-8 py-4">
    <a href="#">Bimasha</a>

    <div class="flex items-center">
        @if (Route::has('login'))
        <div class=" px-6 py-4">
            @auth
                {{-- <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a> --}}
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                    </a>
                    </form>

            @else
                <a href="{{ url('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif
        <a href="">
            <img src="https://www.businessnetworks.com/sites/default/files/default_images/default-avatar.png"
                 alt="avatar" class="w-10 h-10 rounded-full">
        </a>
        
    </div>
</header>
