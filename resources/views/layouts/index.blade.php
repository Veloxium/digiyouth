<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/custom.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    @vite('resources/css/app.css')
    <title>@yield('title', 'Home') | Digiyouth</title>
</head>

<body>
    <!-- Navbar -->
    <nav>
        <div class="flex items-center justify-between px-20 shadow-lg font-outfit">
            <div class="flex items-center gap-4">
                <div class="w-48 p-4 mb-4">
                    <img src="/images/logo.png" alt="logo" class="object-cover" />
                </div>
                <div>
                    <a href="" class="text-lg px-4 py-2">Beranda</a>
                    <a href="" class="text-lg px-4 py-2">Kategori</a>
                    <a href="" class="text-lg px-4 py-2">Portofolio</a>
                    <a href="" class="text-lg px-4 py-2">Reward</a>
                </div>
            </div>
            <div class="">
                <div class="flex items-center gap-4">
                    <div class="relative flex items-center">
                        <div class="absolute left-3 text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search-icon lucide-search">
                                <path d="m21 21-4.34-4.34" />
                                <circle cx="11" cy="11" r="8" />
                            </svg>
                        </div>
                        <input type="text" placeholder="Cari proyek, kategori, atau nama siswa" class="w-80 pl-10 pr-4 py-2.5 text-sm border border-gray-200 rounded bg-white focus:ring-2 focus:ring-[#B03335] focus:outline-none" />
                    </div>
                    <div>
                        @auth
                        <button class="px-8 py-2 btn-zprimary rounded">Logout</button>
                        @else
                        <button class="px-8 py-2 btn-zprimary rounded">Login</button>
                        @endauth
                    </div>
                    <button class="p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bell-dot-icon lucide-bell-dot">
                            <path d="M10.268 21a2 2 0 0 0 3.464 0" />
                            <path d="M13.916 2.314A6 6 0 0 0 6 8c0 4.499-1.411 5.956-2.74 7.327A1 1 0 0 0 4 17h16a1 1 0 0 0 .74-1.673 9 9 0 0 1-.585-.665" />
                            <circle cx="18" cy="8" r="3" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content Section -->
    <main>
        @yield('content')
    </main>

    <!-- Footer Section -->
    <footer class="grid grid-cols-6 gap-x-8 px-20 py-10 font-outfit">
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
            <p>Copyright © 2024 All right reserved | Skomda</p>
        </div>
        <div class="flex flex-col gap-8">
            <h2 class="font-semibold text-lg">Menu Utama</h2>
            <a href="" class="text-lg">Beranda</a>
            <a href="" class="text-lg">Kategori</a>
            <a href="" class="text-lg">Event</a>
        </div>
        <div class="flex flex-col gap-8">
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
        <div class="flex flex-col gap-8">
            <h2 class="font-semibold text-lg">Aplikasi Siswa</h2>
            <a href="" class="text-lg">Digiyouth Showcase</a>
            <a href="" class="text-lg">MyLMS</a>
            <a href="" class="text-lg">Siakad</a>
        </div>
        <div class="flex flex-col gap-8">
            <h2 class="font-semibold text-lg">Hubungi Kami</h2>
            <a href="" class="text-lg">+123456789</a>
            <a href="" class="text-lg">skomda@gmail.com</a>
        </div>
    </footer>
</body>

</html>