<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="{{ asset('images/icon.png') }}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Legal Akses | JNE</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/tailwindcss@^3/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.4/datatables.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
</head>

<body>
    <div class="min-h-screen max-w-[1500px] mx-auto border">
        <header class="flex flex-col w-full">
            <div class="flex justify-between items-center p-4">
                <a href="/">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo JNE" class="w-36">
                </a>
            </div>

            <div class="flex justify-end">
                <div class="inline-flex rounded-md shadow-sm bg-gray-200 -mt-16" role="group">
                    <a href="#"
                        class="bg-transparent py-5 px-7 text-sm font-medium text-gray-900 bg-white border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                        Tentang Kami
                    </a>
                    <a href="#"
                        class="bg-transparent py-5 px-7 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                        Layanan Hukum
                    </a>
                    <a href="#"
                        class="bg-transparent py-5 px-7 text-sm font-medium text-gray-900 bg-white border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                        Informasi
                    </a>
                    <a href="#"
                        class="bg-transparent py-5 px-7 text-sm font-medium text-gray-900 bg-white border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                        Database
                    </a>
                    <a href="/contact-us"
                        class="bg-transparent py-5 px-7 text-sm font-medium text-gray-900 bg-white border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                        Hubungi Kami
                    </a>
                    @guest
                        <a href="/login"
                            class="bg-transparent py-5 px-7 text-sm font-medium text-gray-900 bg-white border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                            Login
                        </a>
                    @endguest
                    @auth
                        <a href="{{ route('logout') }}"
                            class="bg-transparent py-5 px-7 text-sm font-medium text-gray-900 bg-white border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                            Hi, {{ Auth::user()->name }}
                        </a>
                    @endauth
                </div>
            </div>



            <div class="bg-[#D0391C] py-1 px-4">
                <div class="grid grid-cols-2">
                    @php
                        use Illuminate\Support\Carbon;
                    @endphp
                    <span class="text-white"> {{ Carbon::now()->translatedFormat('l, d F Y | H:i') }} WIB</span>
                    <span class="text-white font-bold uppercase text-center">
                        Selamat Datang di Legal Service Access
                    </span>
                </div>
            </div>
        </header>

        <main>
            @yield('content')
        </main>
    </div>
</body>

</html>
