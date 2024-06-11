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

            <div class="flex flex-col py-2 md:p-10 gap-4 justify-center h-full items-center">
                <div class="card w-full md:max-w-xl bg-base-100 shadow-xl p-4 md:p-8">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <label class="form-control w-full w-full my-2" for="nama"  style="margin-top: -80px;">
                            <div class="label">
                                <span class="label-text">Nama hewan</span>
                            </div>
                            <input type="text" class="input input-bordered input-md w-full" name="nama" required autofocus autocomplete="nama" id="nama">
                        </label>

                        <label class="form-control w-full w-full my-2" for="jenis">
                            <div class="label">
                                <span class="label-text">Jenis hewan</span>
                            </div>
                            
                            <select id="pet-type" name="pet_type" required>
                                <option value="">Pilih jenis hewan</option>
                                <option value="dog">Anjing</option>
                                <option value="cat">Kucing</option>
                            </select>
                        </label>

                        <label class="form-control w-full w-full my-2" for="tanggal">
                            <div class="label">
                                <span class="label-text">Tanggal janji</span>
                            </div>
                            <input type="date" class="input input-bordered input-md w-full" name="tanggal" required autofocus autocomplete="tanggal" id="tanggal">
                        </label>

                        <label class="form-control w-full w-full my-2" for="waktu">
                            <div class="label">
                                <span class="label-text">Waktu janji</span>
                            </div>
                            <input type="time" class="input input-bordered input-md w-full" name="waktu" required autofocus autocomplete="waktu" id="waktu">
                        </label>
                        
                        <a href="{{ url('/') }}" class="inline-block drop-shadow-xl cursor-pointer leading-6 focus:ring-4 focus:outline-none focus:ring-secondary-300 rounded-full text-sm font-medium px-4 py-2 text-center transition hover:scale-103 text-primary-50 bg-primary-500 hover:bg-primary-600 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 w-full my-2" type="submit">Buat janji</a>
                        
                </div>
            </div>
        </div>
        
        <div class="md:basis-2/5 md:min-h-screen md:bg-gradient-to-r md:from-primary-400 md:to-primary-700 flex flex-col md:text-white text-primary-900 text-center md:text-left left-shadow">
            <div class="flex justify-between md:justify-end">
                <div class="self-end text-primary-200 m-4 text-xs">
                    <a class="leading-6 text-sm px-4 py-2 text-center hover:opacity-90 flex items-center text-primary-100" href="{{ url('about') }}">
                        &lt; kembali
                    </a>
                </div>
            </div>

            <div class="py-4 md:px-12 md:pt-36 h-full">
                <h1 class="text-5xl md:text-6xl capitalize leading-xxs !text-3xl md:!text-4xl !font-semibold">Atur jadwalmu!</h1>
                <p class="mt-4">Semua akan baik-baik saja :)</p>
            </div>
        </div>
    </div>
</div>
@endsection
