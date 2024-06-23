<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="robots" content="noindex, nofollow">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JANJITEMU</title>

    <link rel="shortcut icon" type="image/x-icon" href="https://demo.saasykit.com/images/favicon.ico">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="preload" as="style" href="https://demo.saasykit.com/build/assets/app-2d85f3e3.css">
    <link rel="stylesheet" href="https://demo.saasykit.com/build/assets/app-2d85f3e3.css" data-navigate-track="reload">

</head>

<body class="text-primary-900">
    <div id="app">
        <div class="w-full">
            <div class="flex flex-col-reverse flex-wrap md:flex-nowrap md:flex-row">
                <div class="md:basis-3/5 flex flex-col">
                    <div class="hidden md:block">
                        <a href="https://demo.saasykit.com">
                            <img src="LogoKlinik.png" alt="Klinik Hewan Logo" style="height: 150px;">
                        </a>
                    </div>

                    <div class="flex flex-col py-2 md:p-10 gap-4 justify-center h-full items-center" style="margin-top: -90px;">
                        <div class="card w-full md:max-w-xl bg-base-100 shadow-xl p-4 md:p-8">
                            <form method="POST" action="{{ '/' }}">
                                @csrf

                                <label class="form-control w-full my-2" for="name">
                                    <div class="label">
                                        <span class="label-text">Nama Hewan</span>
                                    </div>
                                    <input type="text" class="input input-bordered input-md w-full" name="nama_hewan" required autofocus autocomplete="off" id="name">
                                </label>

                                <label class="form-control w-full my-2" for="tanggal_janji">
                                    <div class="label">
                                        <span class="label-text">Tanggal Janji</span>
                                    </div>
                                    <input type="date" class="input input-bordered input-md w-full" name="tanggal_janji" required id="tanggal_janji">
                                </label>

                                <label class="form-control w-full my-2" for="waktu_janji">
                                    <div class="label">
                                        <span class="label-text">Waktu Janji</span>
                                    </div>
                                    <input type="time" class="input input-bordered input-md w-full" name="waktu_janji" required id="waktu_janji">
                                </label>

                                <button class="inline-block drop-shadow-xl cursor-pointer leading-6 focus:ring-4 focus:outline-none focus:ring-secondary-300 rounded-full text-sm font-medium px-4 py-2 text-center transition hover:scale-103 text-primary-50 bg-primary-500 hover:bg-primary-600 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 w-full my-2" type="submit">
                                    Buat Janji
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="md:basis-2/5 md:min-h-screen md:bg-gradient-to-r md:from-primary-400 md:to-primary-700 flex flex-col md:text-white text-primary-900 text-center md:text-left left-shadow">
                    <div class="flex justify-between md:justify-end">
                        <div class="md:hidden">
                            <a href="https://demo.saasykit.com">
                                <img src="https://demo.saasykit.com/images/logo-dark.png" class="inline-block h-6 m-6" alt="Logo" />
                            </a>
                        </div>

                        <div class="self-end text-primary-200 m-4 text-xs">
                            <a class="leading-6 text-sm px-4 py-2 text-center hover:opacity-90 flex items-center text-primary-100" href="{{ url('dokter') }}">
                                &lt; kembali
                            </a>
                        </div>
                    </div>

                    <div class="py-4 md:px-12 md:pt-36 h-full">
                        <h1 class="text-5xl md:text-6xl capitalize leading-xxs !text-3xl md:!text-4xl !font-semibold">
                            Atur Jadwalmu!
                        </h1>
                        <p class="mt-4">
                            It's great to see you back again :)
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scripts -->
        <link rel="modulepreload" href="https://demo.saasykit.com/build/assets/app-d3ef097f.js">
        <script type="module" src="https://demo.saasykit.com/build/assets/app-d3ef097f.js" data-navigate-track="reload"></script>
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-7D2CW2VV62"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'G-7D2CW2VV62');
        </script>
    </div>
</body>

</html>
