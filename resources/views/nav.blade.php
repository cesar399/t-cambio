<nav class="navbar bg-white shadow-sm">
	<a class="navbar-brand" href="/">
	{{config('app.name')}}
	</a>

	<ul class="nav nav-pills ">
	    <li class="nav-item {{setActive('home')}}">
	    	<a class=" nav-link" href="/">Inicio</a>
	    </li>
	    <li class="nav-item  ">
	    	<a class=" nav-link {{setActive('create')}}" href="{{route('tipo_cambio.create')}}">Crear</a>
	    </li>
	    <li class="nav-item {{setActive('index')}} ">
	    	<a class=" nav-link" href="{{route('tipo_cambio.index')}}">Listar</a>
	    </li>
	    @if (Route::has('login'))
	    	@auth
	    	<li class="nav-item {{setActive('index')}} ">
	    		<a class=" nav-link" href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
	    	</li>
    	    @else
                <li class="nav-item {{setActive('login')}} ">
                	<a class=" nav-link" href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>
               	</li>
                @if (Route::has('register'))
                <li class="nav-item {{setActive('register')}} ">
                    <a class=" nav-link" href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                </li>
                @endif
            @endauth
        @endif




	</ul>
</nav>