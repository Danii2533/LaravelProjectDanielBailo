<header class="bg-header h-header text-white flex justify-between items-center">
    <img src="{{asset('./images/logo.png')}}" alt="logo" class="h-17 m-5 max-h-full">
    <h1 class="text-4xl">SCHOOL MANAGEMENT</h1>
    <div class="space-x-2">
        @guest
        <a href="login"><button class="bg-white px-4 py-2 rounded-md text-black font-medium">Login</button></a>
        <a href="register"><button class="bg-gray-300 px-6 py-2 rounded-md text-black font-medium">Register</button></a>
        <button class="bg-neutral-600 px-8 py-2 rounded-md text-white mr-4 font-medium">English</button>
        @endguest
        @auth
        <div class="flex items-center">
            <span class="text-xl text-white mr-5"> {{auth()->user()->name}}</span>
            <button class="bg-neutral-600 px-8 py-2 rounded-md text-white mr-4 font-medium">English</button>
            <form action="logout" method="POST">
                @csrf
                <input type="submit" name="logout" value="Cerrar sesión" class="bg-gray-300 px-6 py-2 rounded-md text-black font-medium mr-5">
            </form>
        </div>
        @endauth
    </div>

</header>