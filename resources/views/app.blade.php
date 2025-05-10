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
                <div class="px-24 py-8 border border-zprimary rounded-2xl">
                    <p>Hacker</p>
                </div>
                <div class="px-24 py-8 border border-zprimary rounded-2xl">
                    <p>Hacker</p>
                </div>
                <div class="px-24 py-8 border border-zprimary rounded-2xl">
                    <p>Hacker</p>
                </div>
                <div class="px-24 py-8 border border-zprimary rounded-2xl">
                    <p>Hacker</p>
                </div>
                <div class="px-24 py-8 border border-zprimary rounded-2xl">
                    <p>Hacker</p>
                </div>
                <div class="px-24 py-8 border border-zprimary rounded-2xl">
                    <p>Hacker</p>
                </div>
                <div class="px-24 py-8 border border-zprimary rounded-2xl">
                    <p>Hacker</p>
                </div>
                <div class="px-24 py-8 border border-zprimary rounded-2xl">
                    <p>Hacker</p>
                </div>
                <div class="px-24 py-8 border border-zprimary rounded-2xl">
                    <p>Hacker</p>
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