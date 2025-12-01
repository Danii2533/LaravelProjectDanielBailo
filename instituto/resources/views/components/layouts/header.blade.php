<header  class="bg-header h-header">
    <img class="h-17 " src="{{asset('./images/logo.png')}}" alt="logo">
    <h1 class="text-blue-800 text-6xl">Gestion de instituto</h1>
    <div class="space-x-2">Login
    @guest
        <a href="login"><button class="btn btn-primary">Login
        </button></a>
        <a href="register"><button class = "btn btn-primary">Register
        </button>
    @endguest
    @auth
        <span class="text-xl text-blue-900">{{auth()->user()->name}}</span>
        <form action="logout" method="POST">
            @csrf
            <input class="btn btn-secondary" type="submit" name="logout">
        </form>
    @endauth
    </a> 
    </div>
</header>
