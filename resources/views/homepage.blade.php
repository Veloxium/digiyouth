@extends('layouts.index')

@section('title', 'Landing')

@section('content')

<div class="font-outfit">
    <section>
        <div class="grid grid-cols-1 md:grid-cols-2 mt-10 md:mt-0 place-content-start place-items-center gap-4 max-w-7xl mx-auto px-4 sm:px-6 lg:px-20">
            <div class="text-left">
                <p class="text-zprimary">Part of SMK TELKOM SIDOARJO</p>
                <h1 class="text-4xl font-bold mb-4">Bikin Karya? <br>
                    Yuk, Tunjukin Karyamu!</h1>
                <p class="text mb-8 max-w-lg">
                    Tunjukkan inovasimu di DigiYouth Showcase dan buat dunia melihat potensimu. Jangan lewatkan momen ini, kirimkan karyamu sekarang, dan jadilah pelopor di era digital!
                </p>
                <a href="" class="px-8 py-2 btn-zprimary rounded">Start Your Journey</a>
            </div>
            <div class="relative">
                <img src="/images/banner.png" alt="hero" class="object-contain" />
            </div>
        </div>

    </section>
    <!-- Section  -->
    <section>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-20 lg:py-10 flex flex-col items-center justify-center mt-20">
            <div class="w-20 h-2 bg-zprimary my-4"></div>
            <h1 class="text-4xl font-bold mb-4">Eksplor Karya</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-6">
                <div class="px-4 py-6 w-[350px] border border-zprimary rounded-2xl flex gap-2 items-center justify-center">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-shield-lock"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3a12 12 0 0 0 8.5 3a12 12 0 0 1 -8.5 15a12 12 0 0 1 -8.5 -15a12 12 0 0 0 8.5 -3" /><path d="M12 11m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M12 12l0 2.5" /></svg>
                    <p>Hacker</p>
                </div>
                <div class="px-4 py-6 w-[350px] border border-zprimary rounded-2xl flex gap-2 items-center justify-center">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-table"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 5a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-14z" /><path d="M3 10h18" /><path d="M10 3v18" /></svg>
                    <p>Hipster</p>
                </div>
                <div class="px-4 py-6 w-[350px] border border-zprimary rounded-2xl flex gap-2 items-center justify-center">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-graph"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 18v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" /><path d="M7 14l3 -3l2 2l3 -3l2 2" /></svg>
                    <p>Hustler</p>
                </div>
                <div class="px-4 py-6 w-[350px] border border-zprimary rounded-2xl flex gap-2 items-center justify-center">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-sitemap"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 15m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" /><path d="M15 15m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" /><path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" /><path d="M6 15v-1a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v1" /><path d="M12 9l0 3" /></svg>
                    <p>IoT Engineer</p>
                </div>
                <div class="px-4 py-6 w-[350px] border border-zprimary rounded-2xl flex gap-2 items-center justify-center">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-cloud"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6.657 18c-2.572 0 -4.657 -2.007 -4.657 -4.483c0 -2.475 2.085 -4.482 4.657 -4.482c.393 -1.762 1.794 -3.2 3.675 -3.773c1.88 -.572 3.956 -.193 5.444 1c1.488 1.19 2.162 3.007 1.77 4.769h.99c1.913 0 3.464 1.56 3.464 3.486c0 1.927 -1.551 3.487 -3.465 3.487h-11.878" /></svg>
                    <p>Cloud Engineer</p>
                </div>
                <div class="px-4 py-6 w-[350px] border border-zprimary rounded-2xl flex gap-2 items-center justify-center">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-palette"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 21a9 9 0 0 1 0 -18c4.97 0 9 3.582 9 8c0 1.06 -.474 2.078 -1.318 2.828c-.844 .75 -1.989 1.172 -3.182 1.172h-2.5a2 2 0 0 0 -1 3.75a1.3 1.3 0 0 1 -1 2.25" /><path d="M8.5 10.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M12.5 7.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M16.5 10.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /></svg>
                    <p>Graphic Designer</p>
                </div>
                <div class="px-4 py-6 w-[350px] border border-zprimary rounded-2xl flex gap-2 items-center justify-center">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-world"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" /><path d="M3.6 9h16.8" /><path d="M3.6 15h16.8" /><path d="M11.5 3a17 17 0 0 0 0 18" /><path d="M12.5 3a17 17 0 0 1 0 18" /></svg>
                    <p>Network Engineer</p>
                </div>
                <div class="px-4 py-6 w-[350px] border border-zprimary rounded-2xl flex gap-2 items-center justify-center">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-plug-connected"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 12l5 5l-1.5 1.5a3.536 3.536 0 1 1 -5 -5l1.5 -1.5z" /><path d="M17 12l-5 -5l1.5 -1.5a3.536 3.536 0 1 1 5 5l-1.5 1.5z" /><path d="M3 21l2.5 -2.5" /><path d="M18.5 5.5l2.5 -2.5" /><path d="M10 11l-2 2" /><path d="M13 14l-2 2" /></svg>
                    <p>Fiber Optic Engineer</p>
                </div>
                <div class="px-4 py-6 w-[350px] border border-zprimary rounded-2xl flex gap-2 items-center justify-center">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-adjustments-cog"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 10a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M6 4v4" /><path d="M6 12v8" /><path d="M13.199 14.399a2 2 0 1 0 -1.199 3.601" /><path d="M12 4v10" /><path d="M12 18v2" /><path d="M16 7a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M18 4v1" /><path d="M18 9v2.5" /><path d="M19.001 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M19.001 15.5v1.5" /><path d="M19.001 21v1.5" /><path d="M22.032 17.25l-1.299 .75" /><path d="M17.27 20l-1.3 .75" /><path d="M15.97 17.25l1.3 .75" /><path d="M20.733 20l1.3 .75" /></svg>
                    <p>System Administrator</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Section  -->
    <section>

        @php
        $cards = range(1, 5);
        @endphp
        <div
            x-data="{
            scrollContainer: null,
            scrollByCard() {
                if (!this.scrollContainer) return;
                const card = this.scrollContainer.querySelector('.card');
                if (card) {
                    this.scrollContainer.scrollBy({ left: card.offsetWidth + 32, behavior: 'smooth' }); // 32px = gap-8
                }
            },
            scrollByCardLeft() {
                if (!this.scrollContainer) return;
                const card = this.scrollContainer.querySelector('.card');
                if (card) {
                    this.scrollContainer.scrollBy({ left: -(card.offsetWidth + 32), behavior: 'smooth' });
                }
            },
            init() {
                this.scrollContainer = this.$refs.cardsRow;
            }
        }"
            x-init="init"
            class="max-w-7xl mx-auto px-4 sm:pl-6 lg:pl-20 lg:py-10 flex flex-col items-start justify-center my-20">
            <div class="w-20 h-2 bg-zprimary my-4"></div>
            <div class="flex items-center justify-between w-full mb-10">
                <h1 class="text-4xl font-bold">Karya Terpopuler Minggu Ini</h1>
                <div class="flex gap-4">
                    <button
                        class="w-16 h-16 rounded bg-white place-content-center place-items-center"
                        @click="scrollByCardLeft"
                        type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                        </svg>
                    </button>
                    <button
                        class="w-16 h-16 rounded bg-white place-content-center place-items-center"
                        @click="scrollByCard"
                        type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>
                    </button>
                </div>
            </div>
            <!-- Row -->
            <div
                class="flex gap-8 overflow-x-scroll w-full h-full scrollbar-hide"
                x-ref="cardsRow"
                style="scroll-behavior: smooth;">
                @foreach ($cards as $i)
                <div class="card" style="flex: 0 0 auto;">
                    <div class="relative overflow-hidden h-[415px] w-[700px] bg-zprimary rounded-2xl place-content-center place-items-center p-6 mb-8">
                        <div class="flex items-center gap-2 z-20 absolute bottom-6 left-6">
                            <div class="w-8 h-8 bg-white my-2 rounded-full"></div>
                            <p class="text-white">Indayani Pratama</p>
                        </div>
                        <div class="absolute z-10 top-0 left-0 w-full h-full bg-gradient-to-t from-black to-transparent"></div>
                    </div>
                    <div class="flex items-center gap-2">
                        <p class="text-4xl">UI/UX Design Competition</p>
                        <p class="px-6 py-3 bg-label rounded-full text-zprimary">Hipster</p>
                    </div>
                    <div class="flex items-center gap-4 mt-4">
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
                @endforeach
            </div>
        </div>
    </section>
    <section>
        <div
            x-data="{
            scrollContainer: null,
            scrollByCard() {
                if (!this.scrollContainer) return;
                const card = this.scrollContainer.querySelector('.cardProfile');
                if (card) {
                    this.scrollContainer.scrollBy({ left: card.offsetWidth + 32, behavior: 'smooth' }); // 32px = gap-8
                }
            },
            scrollByCardLeft() {
                if (!this.scrollContainer) return;
                const card = this.scrollContainer.querySelector('.cardProfile');
                if (card) {
                    this.scrollContainer.scrollBy({ left: -(card.offsetWidth + 32), behavior: 'smooth' });
                }
            },
            init() {
                this.scrollContainer = this.$refs.cardsRow;
            }
        }"
            x-init="init"
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-20 lg:py-10 flex flex-col items-center justify-center mt-20">
            <div class="w-20 h-2 bg-zprimary my-4"></div>
            <h1 class="text-4xl font-bold mb-4">Kontributor Populer Minggu Ini</h1>
            <div class="relative w-full mt-6 flex items-center justify-between">
                <div class="absolute flex justify-between items-center w-full">
                    <button
                        class="md:-ml-10 w-16 h-16 rounded bg-white place-content-center place-items-center"
                        @click="scrollByCardLeft"
                        type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                        </svg>
                    </button>
                    <button
                        class="md:-mr-10 w-16 h-16 rounded bg-white place-content-center place-items-center"
                        @click="scrollByCard"
                        type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>
                    </button>
                </div>
                <div
                    class="flex gap-8 md:gap-12 overflow-x-scroll w-full h-full scrollbar-hide"
                    x-ref="cardsRow"
                    style="scroll-behavior: smooth;">
                    @foreach ($cards as $i)
                    <div class="cardProfile group" style="flex: 0 0 auto;">
                        <div class="h-[315px] w-[340px] border border-gray-200 shadow-md transition ease-in-out duration-500 group-hover:bg-[#a02a2d] rounded-2xl place-content-center place-items-center p-6 mb-8">
                            <div class="w-32 h-32 rounded-full bg-gray-500 transition ease-in-out duration-500 group-hover:bg-white"></div>
                            <p class="font-semibold my-4 transition ease-in-out duration-500 group-hover:text-white">Indayani Pratama</p>
                            <p class="transition ease-in-out duration-500 group-hover:text-white">XXI TJA 1</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Section -->
    <section class="relative">
        <div class="w-full absolute bottom-0">
            <img src="/images/background.png" alt="hero" class="object-cover" />
        </div>
        <div class="relative grid grid-cols-1 md:grid-cols-2 mt-10 md:mt-0 place-content-start place-items-center gap-4 mx-auto px-4 sm:px-6 lg:px-20">
            <div class="order-2 md:order-1 relative px-10">
                <img src="/images/person.png" alt="hero" class="object-contain" />
            </div>
            <div class="order-1 md:order-2 text-center">
                <h1 class="text-4xl font-bold mb-8">Take The Stage
                    <br> and <br>
                    Impress the World!
                </h1>
                <a href="" class="px-8 py-3 btn-zprimary rounded">Start Your Journey</a>
            </div>
        </div>
    </section>
</div>

@endsection
