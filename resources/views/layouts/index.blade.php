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
                    <a class="text-lg px-2 py-1 @if(request()->is('/')) active @endif" href="{{ url('/') }}">Beranda</a>
                    <a class="text-lg px-2 py-1 @if(request()->is('category')) active @endif" href="{{ url('/category') }}">Kategori</a>
                    <a class="text-lg px-2 py-1 @if(request()->is('portofolio')) active @endif" href="{{ url('/portofolio') }}">Portofolio</a>
                    <a class="text-lg px-2 py-1 @if(request()->is('reward')) active @endif" href="{{ url('/reward') }}">Reward</a>
                </div>
            </div>

            <!-- Right: Search, Login, Notification -->
            <div class="hidden md:flex items-center gap-4">
                <div class="relative">
                    <div class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-500">
                        <!-- search icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" class="lucide lucide-search">
                            <path d="m21 21-4.34-4.34" />
                            <circle cx="11" cy="11" r="8" />
                        </svg>
                    </div>
                    <input type="text" placeholder="Cari proyek, kategori, atau nama siswa" class="w-72 pl-10 pr-4 py-2.5 text-sm border border-gray-200 rounded bg-white focus:ring-2 focus:ring-[#B03335] focus:outline-none" />
                </div>
                <div>
                    @auth
                    <button class="px-6 py-2 btn-zprimary rounded">Logout</button>
                    @else
                        <a href="{{ url('/authentication/login') }}"  class="px-6 py-2 btn-zprimary rounded">
                            Login
                        </a>
                    @endauth
                </div>
                <button class="p-2">
                    <!-- bell icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" class="lucide lucide-bell-dot">
                        <path d="M10.268 21a2 2 0 0 0 3.464 0" />
                        <path d="M13.916 2.314A6 6 0 0 0 6 8c0 4.499-1.411 5.956-2.74 7.327A1 1 0 0 0 4 17h16a1 1 0 0 0 .74-1.673" />
                        <circle cx="18" cy="8" r="3" />
                    </svg>
                </button>
            </div>

            <!-- Mobile Toggle Button -->
            <button @click="open = !open" class="md:hidden p-2 ml-auto">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2">
                    <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    <path x-show="open" stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <!-- Mobile Dropdown Menu -->
            <div x-show="open" class="w-full mt-4 md:hidden flex flex-col gap-2">
                <a class="block text-base py-2 @if(request()->is('/')) active @endif" href="{{ url('/') }}">Beranda</a>
                <a class="block text-base py-2 @if(request()->is('category')) active @endif" href="{{ url('/category') }}">Kategori</a>
                <a class="block text-base py-2 @if(request()->is('portofolio')) active @endif" href="{{ url('/portofolio') }}">Portofolio</a>
                <a href="#" class="block text-base py-2">Reward</a>
                <div class="relative">
                    <div class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-500">
                        <!-- search icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" class="lucide lucide-search">
                            <path d="m21 21-4.34-4.34" />
                            <circle cx="11" cy="11" r="8" />
                        </svg>
                    </div>
                    <input type="text" placeholder="Cari proyek..." class="w-full mt-2 pl-10 pr-4 py-2 text-sm border border-gray-200 rounded bg-white" />
                </div>
                <div class="mt-2 ms-auto">
                    @auth
                    <button class="w-full py-2 btn-zprimary rounded">Logout</button>
                    @else
                    <a href="{{ url('/authentication/login') }}"  class="w-full py-2 px-8 btn-zprimary rounded">Login</a>
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
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-globe-icon lucide-globe">
                    <circle cx="12" cy="12" r="10" />
                    <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20" />
                    <path d="M2 12h20" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-instagram-icon lucide-instagram">
                    <rect width="20" height="20" x="2" y="2" rx="5" ry="5" />
                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                    <line x1="17.5" x2="17.51" y1="6.5" y2="6.5" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-facebook-icon lucide-facebook">
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
