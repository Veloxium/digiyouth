@extends('layouts.index')

@section('title', 'Tracking')

@section('content')

    <div class="font-outfit">
        <section>
            <div class="max-w-7xl mt-10 md:my-20 place-content-start place-items-center gap-4 mx-auto px-4 sm:px-6 lg:px-20">
                <div class="flex flex-col md:flex-row justify-between items-start gap-8 md:items-center w-full">
                    <a href="{{ url('portofolio') }}"
                        class="w-10 h-10 flex justify-center items-center bg-white rounded pag text-gray-500 hover:bg-zprimary hover:text-white transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-arrow-left-icon lucide-arrow-left">
                            <path d="m12 19-7-7 7-7" />
                            <path d="M19 12H5" />
                        </svg>
                    </a>
                    <h1 class="text-4xl font-bold mb-4">Tracking Status Project</h1>
                    <div></div>
                </div>
                <div class="grid grid-cols-1 md:mt-10 gap-y-4 gap-x-4 mb-20 md:mb-0 md:my-20 w-full">
                    @for ($i = 0; $i < 2; $i++)
                        <a href="{{ url('category/dummyID/detail') }}">
                            <div class="card" style="flex: 0 0 auto;">
                                <div
                                    class="relative overflow-hidden h-[200px] md:h-[270px] w-full bg-zprimary rounded-2xl place-content-center place-items-center">
                                    <img src="/images/tracking.png" alt="portofolio"
                                        class="w-full h-full object-cover rounded-2xl z-0" />
                                    <div
                                        class="absolute z-10 top-0 left-0 w-full h-full bg-gradient-to-t from-black/90 to-transparent">
                                    </div>
                                    <div
                                        class="absolute z-20 top-0 left-0 w-full h-full flex flex-col justify-evenly py-4 px-4 md:px-20">
                                        <div class="flex flex-col items-start gap-2">
                                            <div class="w-20 h-2 bg-zprimary"></div>
                                            <p class="text-white text-2xl font-semibold">NFT Website Design
                                                {{ $i + 1 }}</p>
                                        </div>
                                        <div class="flex items-center gap-2 justify-between">
                                            <div class="flex items-center gap-4">
                                                <p class="px-6 py-2 bg-label rounded-full text-zprimary">Hipster</p>
                                                <p class="text-white">10 September 2024</p>
                                            </div>
                                            <div class="flex items-center gap-4">
                                                <a href=""
                                                    class="w-12 h-12 flex justify-center items-center bg-white rounded-full">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-pencil-icon lucide-pencil">
                                                        <path
                                                            d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z" />
                                                        <path d="m15 5 4 4" />
                                                    </svg>
                                                </a>
                                                <a href="{{ url('portofolio/tracking/dummyID/detail') }}"
                                                    class="w-12 h-12 flex justify-center items-center bg-zprimary text-white rounded-full">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-arrow-up-right-icon lucide-arrow-up-right">
                                                        <path d="M7 7h10v10" />
                                                        <path d="M7 17 17 7" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endfor
                </div>
            </div>
        </section>
    </div>

@endsection
