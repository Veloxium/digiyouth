<!DOCTYPE html>
<html lang="id" x-data="{ open: false }" x-cloak>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/custom.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>@yield('title', 'Home') | Admin</title>
</head>

<body class="font-outfit">
    <main class="bg-[#F5F6FA] min-h-screen">
        <!-- Mobile Navbar & Hamburger -->
        <header class="md:hidden flex items-center justify-between px-4 py-3 border-b border-gray-200 bg-white fixed top-0 left-0 right-0 z-30">
            <div class="flex items-center gap-2">
                <button @click="open = !open" aria-label="Open sidebar" class="focus:outline-none">
                    <svg :class="{'hidden': open, 'block': !open}" class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg :class="{'block': open, 'hidden': !open}" class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
                <img src="/images/logo.png" alt="logo" class="w-28 h-full object-contain ml-2">
            </div>
            <div class="flex items-center gap-2">
                <img src="/images/person.png" alt="User" class="w-9 h-9 rounded-full object-cover border border-gray-300">
            </div>
        </header>

        <!-- Mobile Sidebar -->
        <aside 
            class="fixed inset-y-0 left-0 w-64 bg-white shadow-lg z-40 flex flex-col transition-transform duration-200 md:hidden"
            :class="open ? 'translate-x-0' : '-translate-x-full'"
            x-show="open"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="-translate-x-full"
            x-transition:enter-end="translate-x-0"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="translate-x-0"
            x-transition:leave-end="-translate-x-full"
            @click.away="open = false"
        >
            <div class="flex flex-col items-start justify-center border-b border-gray-200 px-4 pb-2 pt-4">
                <div class="px-3 py-2 mb-4">
                    <img src="/images/logo.png" alt="logo" class="w-32 h-full object-contain">
                </div>
                <a href="{{ route('admin.dashboard') }}"
                    class="flex items-center px-3 w-full py-3 rounded hover:bg-[#b03335] hover:text-white transition gap-2 mt-2
                        {{ request()->routeIs('admin.dashboard') ? 'bg-zprimary text-white' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-grid2x2-icon lucide-grid-2x2">
                        <path d="M12 3v18" />
                        <path d="M3 12h18" />
                        <rect x="3" y="3" width="18" height="18" rx="2" />
                    </svg>
                    <span>Dashboard</span>
                </a>
            </div>
            <nav class="flex-1 px-4 py-6 overflow-y-auto">
                <p class="px-3 text-xs text-gray-400">PAGES</p>
                <ul class="space-y-4 border-b border-gray-200 pb-6">
                    <li>
                        <a href="{{ route('admin.approval') }}"
                            class="flex items-center px-3 w-full py-3 rounded hover:bg-[#b03335] hover:text-white transition gap-2 mt-2
                                {{ request()->routeIs('admin.approval') ? 'bg-zprimary text-white' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-list-checks-icon lucide-list-checks">
                                <path d="m3 17 2 2 4-4" />
                                <path d="m3 7 2 2 4-4" />
                                <path d="M13 6h8" />
                                <path d="M13 12h8" />
                                <path d="M13 18h8" />
                            </svg>
                            <span>Approval</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.report') }}"
                            class="flex items-center px-3 w-full py-3 rounded hover:bg-[#b03335] hover:text-white transition gap-2 mt-2
                                {{ request()->routeIs('admin.report') ? 'bg-zprimary text-white' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-clipboard-list-icon lucide-clipboard-list">
                                <rect width="8" height="4" x="8" y="2" rx="1" ry="1" />
                                <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2" />
                                <path d="M12 11h4" />
                                <path d="M12 16h4" />
                                <path d="M8 11h.01" />
                                <path d="M8 16h.01" />
                            </svg>
                            <span>Report</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.reward') }}"
                            class="flex items-center px-3 w-full py-3 rounded hover:bg-[#b03335] hover:text-white transition gap-2 mt-2
                                {{ request()->routeIs('admin.reward') ? 'bg-zprimary text-white' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-gift-icon lucide-gift">
                                <rect x="3" y="8" width="18" height="4" rx="1" />
                                <path d="M12 8v13" />
                                <path d="M19 12v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7" />
                                <path
                                    d="M7.5 8a2.5 2.5 0 0 1 0-5A4.8 8 0 0 1 12 8a4.8 8 0 0 1 4.5-5 2.5 2.5 0 0 1 0 5" />
                            </svg>
                            <span>Reward</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.statistic') }}"
                            class="flex items-center px-3 w-full py-3 rounded hover:bg-[#b03335] hover:text-white transition gap-2 mt-2
                                {{ request()->routeIs('admin.statistic') ? 'bg-zprimary text-white' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-chart-column-big-icon lucide-chart-column-big">
                                <path d="M3 3v16a2 2 0 0 0 2 2h16" />
                                <rect x="15" y="5" width="4" height="12" rx="1" />
                                <rect x="7" y="8" width="4" height="9" rx="1" />
                            </svg>
                            <span>Statistik</span>
                        </a>
                    </li>
                </ul>
                <div class="mt-6">
                    <form method="POST" action="">
                        @csrf
                        <button type="submit"
                            class="flex items-center px-3 w-full py-3 rounded hover:bg-[#b03335] hover:text-white transition gap-2 mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-power-icon lucide-power">
                                <path d="M12 2v10" />
                                <path d="M18.4 6.6a9 9 0 1 1-12.77.04" />
                            </svg>
                            <span>Logout</span>
                        </button>
                    </form>
                </div>
            </nav>
        </aside>

        <!-- Desktop Sidebar -->
        <aside class="hidden md:flex fixed top-0 left-0 h-full w-64 bg-white flex-col shadow-lg z-20">
            <div class="flex flex-col items-start justify-center border-b border-gray-200 px-4 pb-2">
                <div class="px-3 py-2 mb-4">
                    <img src="/images/logo.png" alt="logo" class="w-32 h-full object-contain">
                </div>
                <a href="{{ route('admin.dashboard') }}"
                    class="flex items-center px-3 w-full py-3 rounded hover:bg-[#b03335] hover:text-white transition gap-2 mt-2
                        {{ request()->routeIs('admin.dashboard') ? 'bg-zprimary text-white' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-grid2x2-icon lucide-grid-2x2">
                        <path d="M12 3v18" />
                        <path d="M3 12h18" />
                        <rect x="3" y="3" width="18" height="18" rx="2" />
                    </svg>
                    <span>Dashboard</span>
                </a>
            </div>
            <nav class="flex-1 px-4 py-6">
                <p class="px-3 text-xs text-gray-400">PAGES</p>
                <ul class="space-y-4  border-b border-gray-200 pb-6">
                    <li>
                        <a href="{{ route('admin.approval') }}"
                            class="flex items-center px-3 w-full py-3 rounded hover:bg-[#b03335] hover:text-white transition gap-2 mt-2
                                {{ request()->routeIs('admin.approval') ? 'bg-zprimary text-white' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-list-checks-icon lucide-list-checks">
                                <path d="m3 17 2 2 4-4" />
                                <path d="m3 7 2 2 4-4" />
                                <path d="M13 6h8" />
                                <path d="M13 12h8" />
                                <path d="M13 18h8" />
                            </svg>
                            <span>Approval</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.report') }}"
                            class="flex items-center px-3 w-full py-3 rounded hover:bg-[#b03335] hover:text-white transition gap-2 mt-2
                                {{ request()->routeIs('admin.report') ? 'bg-zprimary text-white' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-clipboard-list-icon lucide-clipboard-list">
                                <rect width="8" height="4" x="8" y="2" rx="1" ry="1" />
                                <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2" />
                                <path d="M12 11h4" />
                                <path d="M12 16h4" />
                                <path d="M8 11h.01" />
                                <path d="M8 16h.01" />
                            </svg>
                            <span>Report</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.reward') }}"
                            class="flex items-center px-3 w-full py-3 rounded hover:bg-[#b03335] hover:text-white transition gap-2 mt-2
                                {{ request()->routeIs('admin.reward') ? 'bg-zprimary text-white' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-gift-icon lucide-gift">
                                <rect x="3" y="8" width="18" height="4" rx="1" />
                                <path d="M12 8v13" />
                                <path d="M19 12v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7" />
                                <path
                                    d="M7.5 8a2.5 2.5 0 0 1 0-5A4.8 8 0 0 1 12 8a4.8 8 0 0 1 4.5-5 2.5 2.5 0 0 1 0 5" />
                            </svg>
                            <span>Reward</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.statistic') }}"
                            class="flex items-center px-3 w-full py-3 rounded hover:bg-[#b03335] hover:text-white transition gap-2 mt-2
                                {{ request()->routeIs('admin.statistic') ? 'bg-zprimary text-white' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-chart-column-big-icon lucide-chart-column-big">
                                <path d="M3 3v16a2 2 0 0 0 2 2h16" />
                                <rect x="15" y="5" width="4" height="12" rx="1" />
                                <rect x="7" y="8" width="4" height="9" rx="1" />
                            </svg>
                            <span>Statistik</span>
                        </a>
                    </li>
                </ul>
                <div class="mt-6">
                    <form method="POST" action="">
                        @csrf
                        <button type="submit"
                            class="flex items-center px-3 w-full py-3 rounded hover:bg-[#b03335] hover:text-white transition gap-2 mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-power-icon lucide-power">
                                <path d="M12 2v10" />
                                <path d="M18.4 6.6a9 9 0 1 1-12.77.04" />
                            </svg>
                            <span>Logout</span>
                        </button>
                    </form>
                </div>
            </nav>
        </aside>
        <div class="md:ml-64 pt-16 md:pt-0">
            <header class="hidden md:flex items-center justify-between px-8 py-4 border-b border-gray-200 bg-white">
                <div class="flex items-center w-1/2">
                    <form action="" method="GET" class="w-full">
                        <input type="text" name="search"
                            placeholder="Cari judul karya, kategori, atau nama siswa"
                            class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#b03335] transition">
                    </form>
                </div>
                <div class="flex items-center gap-3">
                    <img src="/images/person.png" alt="User"
                        class="w-10 h-10 rounded-full object-cover border border-gray-300">
                    <div class="flex flex-col">
                        <span class="font-medium text-gray-700">Admin Name</span>
                        <span class="text-xs">Admin</span>
                    </div>
                </div>
            </header>
            @yield('content')
        </div>
    </main>
    @yield('script')
</body>

</html>
