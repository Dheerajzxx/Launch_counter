<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sentriqo IT Solutions PVT. LTD.') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Styles -->
    
    <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
</head>
<body class="scrollbar-hide">
    <div>
        <nav class="navbar navbar-expand-md navbar-light shadow-sm bg-main">
            <div class="container h-full flex justify-between items-center py-3">
                <h1 class="text-dark text-3xl px-4 font-bold">
                    {{ config('app.name', 'Laravel') }}
                </h1>
                <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                @guest
                @else
                    <div id="admin-dropdown" class="flex items-center justify-center nav-dropdown">
                        <div class=" relative inline-block text-left">
                            <span
                                class="inline-flex justify-center w-full lg:pr-4 pr-1 pl-9 relative  text-sm font-medium leading-5 transition duration-300 ease-in-out cursor-pointer">
                                <img class="w-8 h-8 px-1 rounded-full absolute left-0 lg:-top-1 -top-6  bg-gray-700"
                                    src="{{asset('images/Logo.png')}}" alt="">
                                <span class="hidden lg:inline-block font-semibold">{{ Auth::user()->name }}</span>
                                <svg class="hidden lg:inline-block w-5 h-5 ml-2 -mr-1 navbar-arrow transition-all duration-300 transform"
                                    viewbox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            <div
                                class="absolute hidden dropdown-menu right-0 top-10 bg-white text-gray-700 border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none">
                                <div class="px-4 py-3 w-40">
                                    <a href="#" class="text-sm leading-5"><i class="fas fa-user-alt pr-2"> </i> Profile</a>
                                </div>
                                <div class="px-4 py-3">
                                    <a href="#" class="text-sm leading-5"><i class="fas fa-cog pr-2"> </i> Setting</a>
                                </div>
                                <div class="px-4 py-3">
                                    <a href="{{ route('logout') }}" class="text-sm leading-5" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt pr-2"> </i>
                                        Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endguest
                {{--
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto text-lg px-4 py-2 font-semibold flex justify-center items-center">
                        <!-- Authentication Links -->
                        
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link focus:outline-none px-2 py-1 bg-gray-300 rounded-sm cursor-pointer" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                            
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul> 
                </div> 
                --}}
            </div>
        </nav>

        
        <main>
            @yield('content')
        </main>
    </div>
    @guest
    @else
    <div id="app"></div>
    @endguest
    <script>
     // Navbar Show hide popover
  $(".nav-dropdown").click(function () {
    $(this).find(".dropdown-menu").slideToggle("slow");
    $(this).find(".navbar-arrow").toggleClass("rotate-180");
  });
   //  Close navbar popover on click outside
   $(document).on("click", function (event) {
    var $trigger1 = $("#admin-dropdown");
    if ($trigger1 !== event.target && !$trigger1.has(event.target).length) {
      $trigger1.find(".dropdown-menu").slideUp('slow');
      $trigger1.find(".navbar-arrow").removeClass("rotate-180");
    }
  });
    </script>
</body>
</html>
