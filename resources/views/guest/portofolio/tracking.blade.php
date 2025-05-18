@extends('layouts.index')

@section('title', 'Portofolio')

@section('content')

    <div class="font-outfit">
        <section>
            <div class="mt-10 md:mt-20 place-content-start place-items-center gap-4 mx-auto px-4 sm:px-6 lg:px-20">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mt-10 gap-y-8 gap-x-4 my-20 w-full">
                    @for ($i = 0; $i < 2; $i++)
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
                                        <img src="/images//thumb.svg" alt="like" class="w-6 h-6" />
                                        <p class="text-sm text-gray-400 font-semibold">200</p>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <img src="/images//view.svg" alt="view" class="w-6 h-6" />
                                        <p class="text-sm text-gray-400 font-semibold">1.340</p>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <img src="/images//share.svg" alt="share" class="w-6 h-6" />
                                        <p class="text-sm text-gray-400 font-semibold">Share</p>
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
