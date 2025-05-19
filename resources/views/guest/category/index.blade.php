@extends('layouts.index')

@section('title', 'Category')

@section('content')

    <div class="font-outfit">
        <section>
            <div class="mt-10 md:mt-20 place-content-start place-items-center gap-4  mx-auto px-4 sm:px-6 lg:px-20">
                <div class="w-20 h-2 bg-zprimary my-4"></div>
                <h1 class="text-4xl font-bold mb-4 capitalize">{{ $item['title'] }}</h1>
                <p class="text mb-8 max-w-7xl text-center">
                    {{ $item['desc'] }}
                </p>
                <div class="mt-20 flex gap-2 flex-wrap justify-center items-center">
                    @php
                        $tags = [
                            'hacker',
                            'hipster',
                            'hustler',
                            'iot-engineer',
                            'cloud-engineer',
                            'graphic-designer',
                            'network-engineer',
                            'fiber-optic-engineer',
                            'system-administrator',
                        ];
                    @endphp
                    @foreach ($tags as $tag)
                        <a href="{{ url('category/' . $tag) }}"
                            class="rounded-md capitalize py-1 px-2 {{ $item['cat'] == $tag ? 'bg-zprimary text-white' : '' }}">{{ str_replace('-', ' ', $tag) }}</a>
                    @endforeach
                </div>
                <div class="flex justify-center items-center gap-4 mt-10">
                    <div class="relative">
                        <button type="button" id="filterDropdownBtn"
                            class="flex items-center gap-2 py-2 px-4 rounded-md transition-colors"
                            style="transition: background-color 0.2s, color 0.2s; cursor: pointer;"
                            onclick="document.getElementById('filterDropdownMenu').classList.toggle('hidden')"
                            onmouseover="this.style.backgroundColor='#a02a2d';this.style.color='#fff';"
                            onmouseout="this.style.backgroundColor='';this.style.color='';">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-list-filter-icon lucide-list-filter">
                                <path d="M3 6h18" />
                                <path d="M7 12h10" />
                                <path d="M10 18h4" />
                            </svg>
                            <span class="text-sm">Filter</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-chevron-down-icon lucide-chevron-down">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </button>
                        <div id="filterDropdownMenu"
                            class="absolute right-0 mt-2 w-40 bg-white border border-[#b03335] rounded-md shadow-lg hidden z-50">
                            <a href="?sort=terbaru"
                                class="block px-4 py-2 text-gray-700 hover:bg-[#b03335] hover:text-white transition-colors">Terbaru</a>
                            <a href="?sort=terpopuler"
                                class="block px-4 py-2 text-gray-700 hover:bg-[#b03335] hover:text-white transition-colors">Terpopuler</a>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mt-10 gap-y-8 gap-x-4 my-20 w-full">
                    @for ($i = 0; $i < 6; $i++)
                        <a href="{{ url('category/dummyID/detail') }}">
                            <div class="card" style="flex: 0 0 auto;">

                                <div
                                    class="relative overflow-hidden  h-[200px] md:h-[270px] w-full md:w-[424px] bg-zprimary rounded-2xl place-content-center place-items-center p-6 mb-4">
                                    <div class="flex items-center gap-2 z-20 absolute bottom-6 left-6">
                                        <div class="w-8 h-8 bg-white my-2 rounded-full"></div>
                                        <p class="text-white">Indayani Pratama</p>
                                    </div>
                                    <div
                                        class="absolute z-10 top-0 left-0 w-full h-full bg-gradient-to-t from-black to-transparent">
                                    </div>
                                </div>
                                <div class="flex items-center gap-2 justify-between">
                                    <p class="text-lg font-semibold">UI/UX Design Competition</p>
                                    <p class="px-6 py-3 bg-label rounded-full text-zprimary">Hipster</p>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div class="flex items-center gap-2">
                                        <img src="/images/thumb.svg" alt="like" class="w-6 h-6" />
                                        <p class="text-sm text-gray-400 font-semibold">200</p>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <img src="/images/view.svg" alt="view" class="w-6 h-6" />
                                        <p class="text-sm text-gray-400 font-semibold">1.340</p>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <img src="/images/share.svg" alt="share" class="w-6 h-6" />
                                        <p class="text-sm text-gray-400 font-semibold">Share</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endfor
                </div>
                <div class="mb-20">
                    <nav class="flex items-center justify-center mt-8 space-x-2">
                        <a href="#"
                            class="w-10 h-10 flex justify-center items-center bg-white rounded-md pag text-gray-500 hover:bg-[#b03335] hover:text-white transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline w-4 h-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                            </svg>
                        </a>
                        <a href="#"
                            class="w-10 h-10 flex justify-center items-center bg-white rounded-md pag bg-zprimary text-white">1</a>
                        <a href="#"
                            class="w-10 h-10 flex justify-center items-center bg-white rounded-md pag text-gray-700 hover:bg-[#b03335] hover:text-white transition-colors">2</a>
                        <a href="#"
                            class="w-10 h-10 flex justify-center items-center bg-white rounded-md pag text-gray-700 hover:bg-[#b03335] hover:text-white transition-colors">3</a>
                        <span
                            class="w-10 h-10 flex justify-center items-center bg-white text-gray-400 rounded-md">...</span>
                        <a href="#"
                            class="w-10 h-10 flex justify-center items-center bg-white rounded-md pag text-gray-700 hover:bg-[#b03335] hover:text-white transition-colors">10</a>
                        <a href="#"
                            class="w-10 h-10 flex justify-center items-center bg-white rounded-md pag text-gray-500 hover:bg-[#b03335] hover:text-white transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline w-4 h-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </nav>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('script')
    <script>
        // Optional: Hide dropdown when clicking outside
        document.addEventListener('click', function(event) {
            const btn = document.getElementById('filterDropdownBtn');
            const menu = document.getElementById('filterDropdownMenu');
            if (!btn.contains(event.target) && !menu.contains(event.target)) {
                menu.classList.add('hidden');
            }
        });
    </script>
@endsection
