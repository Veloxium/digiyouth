<!DOCTYPE html>
<html lang="id" x-data="{ open: false }" x-cloak>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/custom.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>@yield('title', 'Home') | Digiyouth</title>
</head>

<body class="font-outfit">
    <!-- Navbar -->
    <nav class="shadow-lg">
        <div class="mx-auto px-4 sm:px-6 lg:px-20 py-4 flex items-center justify-between flex-wrap">
            <!-- Left: Logo & Menu -->
            <div class="flex items-center gap-4">
                <a href="/" class="w-40">
                    <img src="/images/logo.png" alt="logo" class="object-contain h-10" />
                </a>
                <div class="hidden md:flex items-center gap-4">
                    <a class="text-lg px-2 py-1 @if (request()->is('/')) active @endif"
                        href="{{ url('/') }}">Beranda</a>
                    <div x-data="{ openCategory: false }" class="relative">
                        <button @click="openCategory = !openCategory"
                            class="text-lg px-2 py-1 flex items-center gap-1 @if (request()->is('category')) active @endif"
                            type="button">
                            Kategori
                            <svg :class="{ 'rotate-180': openCategory }" class="w-4 h-4 transition-transform"
                                fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M6 9l6 6 6-6" />
                            </svg>
                        </button>
                        <div x-show="openCategory" @click.away="openCategory = false" x-transition
                            class="absolute -left-40 mt-2 w-[600px] text-sm bg-base border border-gray-200 rounded shadow-lg z-20 grid grid-cols-3 p-2">
                            <a href="{{ url('/category/cloud-engineer') }}"
                                class="flex items-center gap-1 px-4 py-2 hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-cloud">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M6.657 18c-2.572 0 -4.657 -2.007 -4.657 -4.483c0 -2.475 2.085 -4.482 4.657 -4.482c.393 -1.762 1.794 -3.2 3.675 -3.773c1.88 -.572 3.956 -.193 5.444 1c1.488 1.19 2.162 3.007 1.77 4.769h.99c1.913 0 3.464 1.56 3.464 3.486c0 1.927 -1.551 3.487 -3.465 3.487h-11.878" />
                                </svg>
                                Cloud Engineer
                            </a>
                            <a href="{{ url('/category/hacker') }}"
                                class="flex items-center gap-1 px-4 py-2 hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-shield-lock">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M12 3a12 12 0 0 0 8.5 3a12 12 0 0 1 -8.5 15a12 12 0 0 1 -8.5 -15a12 12 0 0 0 8.5 -3" />
                                    <path d="M12 11m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                    <path d="M12 12l0 2.5" />
                                </svg>
                                Hacker</a>
                            <a href="{{ url('/category/graphic-designer') }}"
                                class="flex items-center gap-1 px-4 py-2 hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-palette">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M12 21a9 9 0 0 1 0 -18c4.97 0 9 3.582 9 8c0 1.06 -.474 2.078 -1.318 2.828c-.844 .75 -1.989 1.172 -3.182 1.172h-2.5a2 2 0 0 0 -1 3.75a1.3 1.3 0 0 1 -1 2.25" />
                                    <path d="M8.5 10.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                    <path d="M12.5 7.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                    <path d="M16.5 10.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                </svg>
                                Graphic Designer</a>
                            <a href="{{ url('/category/hipster') }}"
                                class="flex items-center gap-1 px-4 py-2 hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-table">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M3 5a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-14z" />
                                    <path d="M3 10h18" />
                                    <path d="M10 3v18" />
                                </svg>
                                Hipster</a>
                            <a href="{{ url('/category/hustler') }}"
                                class="flex items-center gap-1 px-4 py-2 hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-graph">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M4 18v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                                    <path d="M7 14l3 -3l2 2l3 -3l2 2" />
                                </svg>
                                Hustler</a>
                            <a href="{{ url('/category/iot-engineer') }}"
                                class="flex items-center gap-1 px-4 py-2 hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-sitemap">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M3 15m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                    <path
                                        d="M15 15m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                    <path
                                        d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                    <path d="M6 15v-1a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v1" />
                                    <path d="M12 9l0 3" />
                                </svg>
                                IoT
                                Engineer</a>
                            <a href="{{ url('/category/network-engineer') }}"
                                class="flex items-center gap-1 px-4 py-2 hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-world">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                    <path d="M3.6 9h16.8" />
                                    <path d="M3.6 15h16.8" />
                                    <path d="M11.5 3a17 17 0 0 0 0 18" />
                                    <path d="M12.5 3a17 17 0 0 1 0 18" />
                                </svg>
                                Network Engineer</a>
                            <a href="{{ url('/category/fiber-optic-engineer') }}"
                                class="flex items-center gap-1 px-4 py-2 hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-plug-connected">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M7 12l5 5l-1.5 1.5a3.536 3.536 0 1 1 -5 -5l1.5 -1.5z" />
                                    <path d="M17 12l-5 -5l1.5 -1.5a3.536 3.536 0 1 1 5 5l-1.5 1.5z" />
                                    <path d="M3 21l2.5 -2.5" />
                                    <path d="M18.5 5.5l2.5 -2.5" />
                                    <path d="M10 11l-2 2" />
                                    <path d="M13 14l-2 2" />
                                </svg>
                                Fiber Optic Engineer</a>
                            <a href="{{ url('/category/system-administrator') }}"
                                class="flex items-center gap-1 px-4 py-2 hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-adjustments-cog">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M4 10a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                    <path d="M6 4v4" />
                                    <path d="M6 12v8" />
                                    <path d="M13.199 14.399a2 2 0 1 0 -1.199 3.601" />
                                    <path d="M12 4v10" />
                                    <path d="M12 18v2" />
                                    <path d="M16 7a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                    <path d="M18 4v1" />
                                    <path d="M18 9v2.5" />
                                    <path d="M19.001 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                    <path d="M19.001 15.5v1.5" />
                                    <path d="M19.001 21v1.5" />
                                    <path d="M22.032 17.25l-1.299 .75" />
                                    <path d="M17.27 20l-1.3 .75" />
                                    <path d="M15.97 17.25l1.3 .75" />
                                    <path d="M20.733 20l1.3 .75" />
                                </svg>
                                System Administrator</a>
                        </div>
                    </div>
                    <a class="text-lg px-2 py-1 @if (request()->is('portofolio')) active @endif"
                        href="{{ url('/portofolio') }}">Portofolio</a>
                    <a class="text-lg px-2 py-1 @if (request()->is('reward')) active @endif"
                        href="{{ url('/reward') }}">Reward</a>
                </div>
            </div>

            <!-- Right: Search, Login, Notification -->
            <div class="hidden md:flex items-center gap-4">
                <div class="relative">
                    <div class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-500">
                        <!-- search icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                            stroke="currentColor" stroke-width="2" class="lucide lucide-search">
                            <path d="m21 21-4.34-4.34" />
                            <circle cx="11" cy="11" r="8" />
                        </svg>
                    </div>
                    <input type="text" placeholder="Cari proyek, kategori, atau nama siswa"
                        class="w-max-72 pl-10 pr-4 py-2.5 text-sm border border-gray-200 rounded bg-white focus:ring-2 focus:ring-[#B03335] focus:outline-none" />
                </div>
                <div>
                    @auth
                        <button class="px-6 py-2 btn-zprimary rounded">Logout</button>
                    @else
                        <a href="{{ url('/authentication/login') }}" class="px-6 py-2 btn-zprimary rounded">
                            Login
                        </a>
                    @endauth
                </div>
                <button class="p-2">
                    <!-- bell icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        stroke="currentColor" stroke-width="2" class="lucide lucide-bell-dot">
                        <path d="M10.268 21a2 2 0 0 0 3.464 0" />
                        <path
                            d="M13.916 2.314A6 6 0 0 0 6 8c0 4.499-1.411 5.956-2.74 7.327A1 1 0 0 0 4 17h16a1 1 0 0 0 .74-1.673" />
                        <circle cx="18" cy="8" r="3" />
                    </svg>
                </button>
            </div>

            <!-- Mobile Toggle Button -->
            <button @click="open = !open" class="md:hidden p-2 ml-auto">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" stroke="currentColor"
                    stroke-width="2">
                    <path x-show="!open" stroke-linecap="round" stroke-linejoin="round"
                        d="M4 6h16M4 12h16M4 18h16" />
                    <path x-show="open" stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <!-- Mobile Dropdown Menu -->
            <div x-show="open" class="w-full mt-4 md:hidden flex flex-col gap-2">
                <a class="block text-base py-2 @if (request()->is('/')) active @endif"
                    href="{{ url('/') }}">Beranda</a>
                <div x-data="{ openCategoryMobile: false }" class="relative">
                    <button @click="openCategoryMobile = !openCategoryMobile"
                        class="text-base py-2 w-full text-left flex items-center justify-between @if (request()->is('category')) active @endif"
                        type="button">
                        Kategori
                        <svg :class="{ 'rotate-180': openCategoryMobile }" class="w-4 h-4 transition-transform inline-block"
                            fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M6 9l6 6 6-6" />
                        </svg>
                    </button>
                    <div x-show="openCategoryMobile" @click.away="openCategoryMobile = false" x-transition
                        class="mt-2 w-full bg-base rounded z-20 flex flex-col">
                        <a href="{{ url('/category/cloud-engineer') }}" class="px-4 py-2 hover:bg-gray-100 flex items-center gap-2">
                            Cloud Engineer
                        </a>
                        <a href="{{ url('/category/hacker') }}" class="px-4 py-2 hover:bg-gray-100 flex items-center gap-2">
                            Hacker
                        </a>
                        <a href="{{ url('/category/graphic-designer') }}" class="px-4 py-2 hover:bg-gray-100 flex items-center gap-2">
                            Graphic Designer
                        </a>
                        <a href="{{ url('/category/hipster') }}" class="px-4 py-2 hover:bg-gray-100 flex items-center gap-2">
                            Hipster
                        </a>
                        <a href="{{ url('/category/hustler') }}" class="px-4 py-2 hover:bg-gray-100 flex items-center gap-2">
                            Hustler
                        </a>
                        <a href="{{ url('/category/iot-engineer') }}" class="px-4 py-2 hover:bg-gray-100 flex items-center gap-2">
                            IoT Engineer
                        </a>
                        <a href="{{ url('/category/network-engineer') }}" class="px-4 py-2 hover:bg-gray-100 flex items-center gap-2">
                            Network Engineer
                        </a>
                        <a href="{{ url('/category/fiber-optic-engineer') }}" class="px-4 py-2 hover:bg-gray-100 flex items-center gap-2">
                            Fiber Optic Engineer
                        </a>
                        <a href="{{ url('/category/system-administrator') }}" class="px-4 py-2 hover:bg-gray-100 flex items-center gap-2">
                            System Administrator
                        </a>
                    </div>
                </div>
                <a class="block text-base py-2 @if (request()->is('portofolio')) active @endif"
                    href="{{ url('/portofolio') }}">Portofolio</a>
                <a href="#" class="block text-base py-2">Reward</a>
                <div class="relative">
                    <div class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-500">
                        <!-- search icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                            stroke="currentColor" stroke-width="2" class="lucide lucide-search">
                            <path d="m21 21-4.34-4.34" />
                            <circle cx="11" cy="11" r="8" />
                        </svg>
                    </div>
                    <input type="text" placeholder="Cari proyek..."
                        class="w-full mt-2 pl-10 pr-4 py-2 text-sm border border-gray-200 rounded bg-white" />
                </div>
                <div class="mt-2 ms-auto">
                    @auth
                        <button class="w-full py-2 btn-zprimary rounded">Logout</button>
                    @else
                        <a href="{{ url('/authentication/login') }}"
                            class="w-full py-2 px-8 btn-zprimary rounded">Login</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="grid grid-cols-2 md:grid-cols-6 gap-x-8 mx-auto px-4 sm:px-6 lg:px-20 py-4 md:py-10 font-outfit">
        <div class="flex flex-col col-span-2">
            <div class="w-56 mb-4">
                <img src="/images/logo.png" alt="logo" class="object-cover" />
            </div>
            <p class="text-lg mt-4">Ready to take the next step? Submit your project and let your skills shine.</p>
            <div class="flex items-center gap-4 my-4 text-zprimary">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="lucide lucide-globe-icon lucide-globe">
                    <circle cx="12" cy="12" r="10" />
                    <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20" />
                    <path d="M2 12h20" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="lucide lucide-instagram-icon lucide-instagram">
                    <rect width="20" height="20" x="2" y="2" rx="5" ry="5" />
                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                    <line x1="17.5" x2="17.51" y1="6.5" y2="6.5" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="lucide lucide-facebook-icon lucide-facebook">
                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                </svg>
            </div>
            <p class="hidden md:block">Copyright © 2024 All right reserved | Skomda</p>
        </div>
        <div class="flex flex-col gap-2 md:gap-8">
            <h2 class="font-semibold text-lg">Menu Utama</h2>
            <a href="" class="text-lg">Beranda</a>
            <a href="" class="text-lg">Kategori</a>
            <a href="" class="text-lg">Event</a>
        </div>
        <div class="flex flex-col gap-2 md:gap-8">
            <h2 class="font-semibold text-lg">Explore</h2>
            <a href="" class="text-lg">Hacker</a>
            <a href="" class="text-lg">Hipster</a>
            <a href="" class="text-lg">Hustler</a>
            <a href="" class="text-lg">IoT Engineer</a>
            <a href="" class="text-lg">Cloud Engineer</a>
            <a href="" class="text-lg">Graphic Designer</a>
            <a href="" class="text-lg">Network Engineer</a>
            <a href="" class="text-lg">Fiber Optic Engineer</a>
            <a href="" class="text-lg">System Administrator</a>
        </div>
        <div class="flex flex-col gap-2 md:gap-8">
            <h2 class="font-semibold text-lg">Aplikasi Siswa</h2>
            <a href="" class="text-lg">Digiyouth Showcase</a>
            <a href="" class="text-lg">MyLMS</a>
            <a href="" class="text-lg">Siakad</a>
        </div>
        <div class="flex flex-col gap-2 md:gap-8">
            <h2 class="font-semibold text-lg">Hubungi Kami</h2>
            <a href="" class="text-lg">(+62)12-2345-6789</a>
            <a href="" class="text-lg">skomda@gmail.com</a>
        </div>
        <p class="col-span-2 flex justify-center md:hidden mt-8">Copyright © 2024 All right reserved | Skomda</p>
    </footer>

    <!-- Scripts -->
    @yield('script')

</body>

</html>
