@extends('layouts.app')

@section('content')
    <div class="flex items-center min-h-screen p-4 bg-gray-100 lg:justify-center">
            <div
                class="flex flex-col overflow-hidden bg-dark rounded-md shadow-lg max md:flex-row md:flex-1 lg:max-w-screen-md">
                <div
                    class="p-4 py-6 text-dark bg-main md:w-80 md:flex-shrink-0 md:flex md:flex-col md:items-center md:justify-evenly">
                    <div class="my-3 text-4xl font-bold tracking-wider text-center">
                        <a>Sentriqo</a>
                    </div>
                    <p class="mt-6 font-normal text-center text-light md:mt-0">
                        With the power of Sentriqo, you can now focus only on functionaries for your digital products,
                        while leaving the
                        UI design on us!
                    </p>
                    <p class="flex flex-col items-center justify-center mt-10 text-center">
                        <span>Don't have an account?</span>
                        <a href="#" class="underline">Get Started!</a>
                    </p>
                    <p class="mt-6 text-sm text-center text-light">
                        Read our <a href="#" class="underline">terms</a> and <a href="#"
                            class="underline">conditions</a>
                    </p>
                </div>
                <div class="p-5 bg-light md:flex-1 border border-main rounded-tr-md rounded-br-md border-opacity-20">
                    <h3 class="my-4 text-2xl font-semibold text-dark">Account Login</h3>
                    <form method="POST" action="{{ route('login') }}" class="flex flex-col space-y-5">
                        @csrf
                        <div class="flex flex-col space-y-1">
                            <label for="email" class="text-sm font-semibold text-dark">Email address</label>
                            <input type="email" id="email" autofocus name="email" value="{{ old('email') }}" required autocomplete="email"
                                class="@error('email') is-invalid @enderror px-4 py-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-main focus:ring-opacity-20" />
                            @error('email')
                                <span class="invalid-feedback text-red-500" role="alert">
                                    <i>{{ $message }}</i>
                                </span>
                            @enderror
                        </div>
                        <div class="flex flex-col space-y-1">
                            <div class="flex items-center justify-between">
                                <label for="password" class="text-sm font-semibold text-dark">Password</label>
                                <a href="#" class="text-sm text-main hover:underline focus:text-blue-800">Forgot
                                    Password?</a>
                            </div>
                            <input type="password" id="password" name="password" required autocomplete="current-password"
                                class="@error('password') is-invalid @enderror px-4 py-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-main focus:ring-opacity-20" />
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="flex items-center space-x-2">
                            <input type="checkbox" id="remember"  name="remember"{{ old('remember') ? 'checked' : '' }}
                                class="w-4 h-4 transition duration-300 rounded checked:rounded-full appearance-none border-2 border-gray-400  checked:border-transparent  checked:bg-main" />
                            <label for="remember" class="text-sm font-semibold text-dark">Remember me</label>
                        </div>
                        <div>
                            <button type="submit"
                                class="w-full px-4 py-2 text-lg font-semibold text-dark transition-colors duration-300 bg-main rounded-md shadow hover:bg-opacity-75 focus:outline-none ">
                                Log in
                            </button>
                        </div>
                        <div class="flex flex-col space-y-5">
                            <span class="flex items-center justify-center space-x-2">
                                <span class="h-px bg-gray-400 w-14"></span>
                                <span class="font-normal text-dark">or login with</span>
                                <span class="h-px bg-gray-400 w-14"></span>
                            </span>
                            <div class="flex flex-col space-y-4">
                                <a href="#"
                                    class="flex items-center justify-center px-4 py-2 space-x-2 transition-colors duration-300 border border-gray-800 rounded-md group hover:bg-gray-800 focus:outline-none">
                                    <span>
                                        <svg class="w-5 h-5 text-gray-800 fill-current group-hover:text-dark"
                                            viewBox="0 0 16 16" version="1.1" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span class="text-sm font-medium text-gray-800 group-hover:text-dark">Github</span>
                                </a>
                                <a href="#"
                                    class="flex items-center justify-center px-4 py-2 space-x-2 transition-colors duration-300 border border-blue-500 rounded-md group hover:bg-blue-500 focus:outline-none">
                                    <span>
                                        <svg class="text-blue-500 group-hover:text-dark" width="20" height="20"
                                            fill="currentColor">
                                            <path
                                                d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84">
                                            </path>
                                        </svg>
                                    </span>
                                    <span
                                        class="text-sm font-medium text-blue-500 group-hover:text-dark">Twitter</span>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection





{{--
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-main">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
--}}
