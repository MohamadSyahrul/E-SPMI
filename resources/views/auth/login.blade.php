@extends('layout.master2')
@section('content')
<div class="my-auto mx-auto xl:ml-20 bg-white xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
    <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
        Sign In
    </h2>
    <div class="intro-x mt-2 text-gray-500 xl:hidden text-center">Selamat Datang Di Sistem Penjaminan Mutu Internal Politeknik Negeri Banyuwangi</div>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="intro-x mt-8">
            <input type="email" class="intro-x login__input input input--lg border border-gray-300 block @error('email') is-invalid @enderror"name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocu>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <input type="password" class="intro-x login__input input input--lg border border-gray-300 block mt-4 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="intro-x flex text-gray-700 text-xs sm:text-sm mt-4">
            <div class="flex items-center mr-auto">
                <input type="checkbox" class="input border mr-2" id="remember-me" name="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="cursor-pointer select-none" for="remember-me">Remember me</label>
            </div>

            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Password ?') }}
                </a>
            @endif
            
        </div>
        <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
            <button type="submit" class="button button--lg w-full xl:w-32 text-white bg-theme-1 xl:mr-3">Login</button>
            <button class="button button--lg w-full xl:w-32 text-gray-700 border border-gray-300 mt-3 xl:mt-0">Sign up</button>
        </div>
    </form>
    <div class="intro-x mt-10 xl:mt-24 text-gray-700 text-center xl:text-left">
        By signin up, you agree to our 
        <br>
        <a class="text-theme-1" href="">Terms and Conditions</a> & <a class="text-theme-1" href="">Privacy Policy</a> 
    </div>
</div>
@endsection