@extends('layout.app')

@section('content')
<div class="w-full">
    <div class="flex flex-col-reverse flex-wrap md:flex-nowrap md:flex-row">
        <div class="md:basis-3/5 flex flex-col">
            <div class="hidden md:block">
            <a class="navbar-brand" href="/">
                <img src="LogoKlinik.png" alt="Klinik Hewan Logo" style="height: 150px;">
            </a>
            </div>

            <div class="flex flex-col py-2 md:p-10 gap-4 justify-center h-full items-center" style="margin-top: -80px;"> 
                <div class="card w-full md:max-w-xl bg-base-100 shadow-xl p-4 md:p-8">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <p class="text-xs mt-2 text-end">Belum punya akun? <a class="text-primary-500 font-bold" href="{{ ('register') }}">Daftar</a></p>

                        <div class="grid grid-cols-2 gap-4 my-4">
                            <button class="p-2 border border-primary-400 rounded-2xl hover:scale-103 transition text-gray-500 text-sm" id="login-as-admin">Login as <strong>Admin</strong></button>
                            <button class="p-2 border border-primary-400 rounded-2xl hover:scale-103 transition text-gray-500 text-sm" id="login-as-user">Login as <strong>Normal User</strong></button>
                        </div>

                        <label class="form-control w-full w-full my-2" for="email">
                            <div class="label">
                                <span class="label-text">Email Address</span>
                            </div>
                            <input type="email" class="input input-bordered input-md w-full" name="email" required autofocus autocomplete="email" id="email">
                        </label>

                        <label class="form-control w-full w-full my-2" for="password">
                            <div class="label">
                                <span class="label-text">Password</span>
                            </div>
                            <input type="password" class="input input-bordered input-md w-full" name="password" required id="password">
                        </label>
                        
                        <div class="my-3 flex flex-wrap gap-2 justify-between text-sm">
                            <div class="flex gap-2">
                                <input class="checkbox checkbox-sm" type="checkbox" name="remember" id="remember">
                                <label class="text-sm" for="remember">Ingat Saya</label>
                            </div>
                            <div>
                                <a class="text-primary-500 text-xs" href="{{ ('/') }}">Lupa Kata Sandi?</a>
                            </div>
                        </div>
                        <a href="{{ url('/') }}" class="inline-block drop-shadow-xl cursor-pointer leading-6 focus:ring-4 focus:outline-none focus:ring-secondary-300 rounded-full text-sm font-medium px-4 py-2 text-center transition hover:scale-103 text-primary-50 bg-primary-500 hover:bg-primary-600 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 w-full my-2" type="submit">Masuk</a>
                </div>
            </div>
        </div>
        
        <div class="md:basis-2/5 md:min-h-screen md:bg-gradient-to-r md:from-primary-400 md:to-primary-700 flex flex-col md:text-white text-primary-900 text-center md:text-left left-shadow">
            <div class="flex justify-between md:justify-end">
                <div class="self-end text-primary-200 m-4 text-xs">
                    <a class="leading-6 text-sm px-4 py-2 text-center hover:opacity-90 flex items-center text-primary-100" href="{{ url('/') }}">
                        &lt; kembali
                    </a>
                </div>
            </div>

            <div class="py-4 md:px-12 md:pt-36 h-full">
                <h1 class="text-5xl md:text-6xl capitalize leading-xxs !text-3xl md:!text-4xl !font-semibold">Login.</h1>
                <p class="mt-4">Senang bertemu Anda kembali lagi :)</p>
            </div>
        </div>
    </div>
</div>
@endsection