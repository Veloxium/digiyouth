@extends('layouts.index')

@section('title', 'Portofolio')

@section('content')

    <div class="font-outfit">
        <section>
            <div class="mt-10 md:mt-20 place-content-start place-items-center gap-4 mx-auto px-4 sm:px-6 lg:px-20">
                <div class="place-content-center place-items-center my-10">
                    <div class="flex items-center justify-center gap-2">
                        <div>
                            <img src="{{ $user->profile_picture ? asset('storage/public/user/profile/' . $user->profile_picture) : asset('images/profile.png') }}"
                                alt="img-profile" class="w-20 h-20 rounded-full mx-auto">
                        </div>
                        <div>
                            <p class="text-xl font-semibold">{{ $user->name }}</p>
                            <p class="flex items-center gap-2 text-gray-500">{{ $user->class }}<span
                                    class="w-1 h-1 rounded-full bg-gray-400 inline-block" aria-hidden="true"></span>
                                {{ $totalProjects }} Karya
                            </p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 my-4">
                        <div class="flex items-center gap-2">
                            <img src="/images//thumb.svg" alt="like" class="w-6 h-6" />
                            <p class="text-sm text-gray-400 font-semibold">{{ $totalLikes }}</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <img src="/images//view.svg" alt="view" class="w-6 h-6" />
                            <p class="text-sm text-gray-400 font-semibold">{{$totalViews}}</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <img src="/images//share.svg" alt="share" class="w-6 h-6" />
                            <p class="text-sm text-gray-400 font-semibold">Share</p>
                        </div>
                    </div>
                    <p class="text-lg">Eksplor berbagai project menarik dari {{ $user->name }}</p>
                </div>
                <div class="mt-20 flex flex-1 w-full items-end md:items-center justify-between">
                    <div class="flex flex-col-reverse md:flex-row items-start md:items-center gap-4">
                        <a href="{{ url('portofolio/upload-project') }}"
                            class="w-fit flex py-3 px-4 gap-2 btn-zprimary rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-upload-icon lucide-upload">
                                <path d="M12 3v12" />
                                <path d="m17 8-5-5-5 5" />
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                            </svg>
                            <p>Upload Project</p>
                        </a>
                        <a href="{{ url('portofolio/tracking') }}"
                            class="w-fit flex py-3 px-4 gap-2 border border-zprimary rounded">
                            <p>1 project sedang dalam review</p>
                        </a>
                    </div>
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
                            <a href="?sort=latest"
                                class="block px-4 py-2 text-gray-700 hover:bg-[#b03335] hover:text-white transition-colors">Terbaru</a>
                            <a href="?sort=popular"
                                class="block px-4 py-2 text-gray-700 hover:bg-[#b03335] hover:text-white transition-colors">Terpopuler</a>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mt-10 gap-y-8 gap-x-4 my-20 w-full">

                    @foreach ($projects as $project)
                        <a href="{{ url('portofolio/'. $project->id .' /statistic') }}">

                            <div class="card" style="flex: 0 0 auto;">
                                <div
                                    class="relative overflow-hidden h-[200px] md:h-[270px] w-full md:w-[424px] bg-zprimary rounded-2xl place-content-center place-items-center p-6 mb-4">
                                    <div
                                        class="absolute z-10 top-0 left-0 w-full h-full bg-gradient-to-t from-black to-transparent">
                                    </div>

                                    @if ($project->project_picture)
                                        <img src="{{ asset('storage/public/user/projects/' . $project->project_picture) }}"
                                            alt="{{ $project->project_title }}"
                                            class="absolute top-0 left-0 w-full h-full object-cover z-0" />
                                    @endif
                                </div>

                                <div class="flex items-center gap-2 justify-between">
                                    <p class="text-lg font-semibold">{{ $project->project_title }}</p>
                                    <p class="px-6 py-3 bg-label rounded-full text-zprimary">
                                        {{ $project->category?->category_name ?? 'Tanpa kategori' }}
                                    </p>
                                </div>

                                <div class="flex items-center gap-4">
                                    <div class="flex items-center gap-2">
                                        <img src="/images/thumb.svg" alt="like" class="w-6 h-6" />
                                        <p class="text-sm text-gray-400 font-semibold">{{ $project->likes_count }}</p>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <img src="/images/view.svg" alt="view" class="w-6 h-6" />
                                        <p class="text-sm text-gray-400 font-semibold">{{ $project->views_count }}</p>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <img src="/images/share.svg" alt="share" class="w-6 h-6" />
                                        <p class="text-sm text-gray-400 font-semibold">Share</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
                <div class="mb-20">
                    <nav class="flex items-center justify-center mt-8 space-x-2">
                        <a href="#"
                            class="w-10 h-10 flex justify-center items-center bg-white rounded-md pag text-gray-500 hover:bg-zprimary hover:text-white transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline w-4 h-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7" />
                            </svg>
                        </a>
                        <a href="#"
                            class="w-10 h-10 flex justify-center items-center bg-white rounded-md pag bg-zprimary text-white">1</a>
                        <a href="#"
                            class="w-10 h-10 flex justify-center items-center bg-white rounded-md pag text-gray-700 hover:bg-zprimary hover:text-white transition-colors">2</a>
                        <a href="#"
                            class="w-10 h-10 flex justify-center items-center bg-white rounded-md pag text-gray-700 hover:bg-zprimary hover:text-white transition-colors">3</a>
                        <span
                            class="w-10 h-10 flex justify-center items-center bg-white text-gray-400 rounded-md">...</span>
                        <a href="#"
                            class="w-10 h-10 flex justify-center items-center bg-white rounded-md pag text-gray-700 hover:bg-zprimary hover:text-white transition-colors">10</a>
                        <a href="#"
                            class="w-10 h-10 flex justify-center items-center bg-white rounded-md pag text-gray-500 hover:bg-zprimary hover:text-white transition-colors">
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
