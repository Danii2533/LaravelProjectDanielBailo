<header class="bg-blue-600 h-header text-white flex justify-between items-center">
    <a href="{{ route('main') }}" class="flex items-center">
        <img src="{{asset('./images/logo-escuela.png')}}" alt="logo" class="h-17 m-5 max-h-full cursor-pointer hover:opacity-80 transition">
    </a>
    <h1 class="text-4xl">SCHOOL MANAGEMENT</h1>
    <div class="space-x-2 mr-10 flex items-center">
        @guest
        <a href="login"><button class="bg-yellow-400 px-4 py-2 rounded-md text-black font-medium hover:bg-yellow-500 transition ease-in-out duration-150">Login</button></a>
        <a href="register"><button class="bg-yellow-400 px-6 py-2 rounded-md text-black font-medium hover:bg-yellow-500 transition ease-in-out duration-150">Register</button></a>
        @endguest
        @auth
        <div class="flex items-center">
            <span class="text-xl text-white mr-5"> {{auth()->user()->name}}</span>
            <form action="logout" method="POST">
                @csrf
                <input type="submit" name="logout" value="Cerrar sesión" class="bg-yellow-400 px-6 py-2 rounded-md text-black font-medium mr-5 hover:bg-yellow-500 transition ease-in-out duration-150">
            </form>
        </div>
        @endauth
        @php
            $currentLocale = app()->getLocale();
            $nextLocale = $currentLocale === 'en' ? 'es' : 'en';
            $buttonText = $currentLocale === 'en' ? 'Español' : 'English';
        @endphp
        <a href="{{ route('locale.set', $nextLocale) }}">
            <button class="bg-yellow-400 px-8 py-2 rounded-md text-black mr-4 font-medium hover:bg-yellow-500 transition ease-in-out duration-150 ml-auto">
                {{ $buttonText }}
            </button>
        </a>
    </div>

</header>