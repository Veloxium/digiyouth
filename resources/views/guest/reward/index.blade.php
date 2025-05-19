@extends('layouts.index')

@section('title', 'Reward')

@section('content')

    <div class="font-outfit">
        <section class="relative">
            <div class="w-full absolute bottom-0">
                <img src="/images/background-2.png" alt="hero" class="object-cover" />
            </div>
            <div
                class="relative grid grid-cols-1 md:grid-cols-2 mt-10 md:mt-0 place-content-start place-items-center gap-4 mx-auto px-4 sm:px-6 lg:px-20">
                <div class="order-1 md:order-1 text-left max-w-md md:-mt-28  mt-0">
                    <h1 class="text-4xl font-bold">Tukar Poinmu Yuk!
                    </h1>
                    <p class="text-lg mb-8 text-left">Kumpulkan poin dari setiap karya yang kamu unggah dan dapatkan beragam
                        hadiah menarik sebagai bentuk apresiasi atas kontribusimu</p>
                    <a href="" class="flex w-fit px-8 py-3 border border-zprimary rounded gap-2 items-center">
                        <span class="font-semibold">Pointmu:</span>
                        <img src="/images/poin-icon.png" alt="poin" class="w-5 h-5 object-contain" />
                        <span>100 Poin</span>
                    </a>
                </div>
                <div class="order-2 md:order-2 relative px-10">
                    <img src="/images/person.png" alt="hero" class="object-contain" />
                </div>
            </div>
        </section>
        <section>
            <div class="mt-10 md:mt-20 place-content-start place-items-center gap-4  mx-auto px-4 sm:px-6 lg:px-20">
                <div class="w-20 h-2 bg-zprimary my-4"></div>
                <h1 class="text-2xl font-bold mb-4">Mau Dapat Reward Menarik?</h1>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 mt-10 gap-y-8 gap-x-4 my-20 w-full">
                    @php
                        $icons = [
                            [
                                'title' => 'Upload Karya',
                                'desc' => 'Upload karyamu di Digiyouth Showcase',
                                'src' => '/images/upload.png',
                                'alt' => 'icon',
                            ],
                            [
                                'title' => 'Dapatkan Poin',
                                'desc' =>
                                    'Dapatkan 10 poin untuk setiap karya yang berhasil diuplad dan telah disetujui',
                                'src' => '/images/poin.png',
                                'alt' => 'icon',
                            ],
                            [
                                'title' => 'Raih Likes',
                                'desc' => 'Raih likes sebanyak-banyaknya dan dapatkan poin tambahan',
                                'src' => '/images/like.png',
                                'alt' => 'icon',
                            ],
                            [
                                'title' => 'Tukar Poin',
                                'desc' => 'Tukar poinnya dengan berbagai reward eksklusif dari Digiyouth Showcase',
                                'src' => '/images/tukar.png',
                                'alt' => 'icon',
                            ],
                        ];
                    @endphp
                    @foreach ($icons as $icon)
                        <div
                            class="aspect-square text-center flex flex-col justify-center items-center border border-zprimary rounded-md">
                            <img src="{{ $icon['src'] }}" alt="{{ $icon['alt'] }}">
                            <p class="font-semibold text-3xl">{{ $icon['title'] }}</p>
                            <p>{{ $icon['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="place-content-start place-items-center gap-4 mx-auto px-4 sm:px-6 lg:px-20">
                <div class="w-20 h-2 bg-zprimary my-4"></div>
                <h1 class="text-2xl font-bold mb-8">Pilihan Rewardmu</h1>
                @php
                    $rewards = json_decode(
                        '[
                        {
                            "title": "Sertifikat Kontributor Aktif",
                            "poin": "100",
                            "src": "/images/reward-1.png",
                            "alt": "icon"
                        },
                        {
                            "title": "Trial Canva Pro 1 Bulan",
                            "poin": "120",
                            "src": "/images/reward-2.png",
                            "alt": "icon"
                        },
                        {
                            "title": "Capcut Pro 1 Bulan",
                            "poin": "120",
                            "src": "/images/reward-3.png",
                            "alt": "icon"
                        },
                        {
                            "title": "Sertifikat Kontributor Aktif",
                            "poin": "100",
                            "src": "/images/reward-1.png",
                            "alt": "icon"
                        }
                    ]',
                        true,
                    );
                @endphp
                <div class="flex overflow-x-auto gap-4 w-full scrollbar-hide">
                    @foreach ($rewards as $reward)
                        <div
                            class="relative h-[374px] w-[550px] text-center flex-shrink-0 flex flex-col justify-center items-center shadow rounded-md overflow-hidden">
                            <img src="{{ $reward['src'] }}" alt="{{ $reward['alt'] }}"
                                class="w-full h-full object-cover absolute top-0 left-0 z-0">
                            <div
                                class="w-full h-full bg-gradient-to-t from-black/40 to-transparent absolute top-0 left-0 z-10">
                            </div>
                            <div class="flex flex-col z-20 absolute bottom-6 left-0 w-full items-start px-6">
                                <p class="font-semibold text-xl text-white">{{ $reward['title'] }}</p>
                                <p class="text-white">{{ $reward['poin'] }} Poin</p>
                                <div class="w-full flex justify-end">
                                    <form action="">
                                        <button class="px-6 py-2 btn-zprimary rounded text-zprimary font-semibold">Tukar
                                            Poin</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="my-20 px-4 sm:px-6 lg:px-20">
                <p class="text-2xl font-semibold">Total Poin</p>
                <p>Poin yang kamu dapatkan dari unggah karya, akumulasi likes, dan kontributor populer</p>
                <div
                    class="flex justify-center items-center min-h-[160px] gap-4 border border-gray-300 shadow rounded-md my-8">
                    <img src="/images/poin-icon-2.png" alt="poin" class="w-20 h-20 object-contain" />
                    <p class="text-4xl font-semibold">100 Poin</p>
                </div>
                @php
                    $history = json_decode(
                        '[
                    {
                        "title": "Dapat Poin",
                        "desc": "Poin dari karya yang diunggah",
                        "poin": "+10 Poin",
                        "date": "10 September 2024"
                    },
                    {
                        "title": "Dapat Poin",
                        "desc": "Poin dari karya yang diunggah",
                        "poin": "+10 Poin",
                        "date": "10 September 2024"
                    },
                    {
                        "title": "Tukar Poin",
                        "desc": "Tukar poin untuk reward",
                        "poin": "-100 Poin",
                        "date": "10 September 2024"
                    }
                ]',
                        true,
                    );
                @endphp
                <div x-data="{ tab: 'semua' }">
                    <div class="flex gap-4 mb-6 border-b-2 border-gray-300">
                        <button
                            :class="tab === 'semua' ? 'border-b-4 -mb-0.5  border-zprimary-tab text-zprimary' :
                                'text-gray-500'"
                            class="px-4 py-2 focus:outline-none font-semibold" @click="tab = 'semua'">
                            Semua Aktivitas
                        </button>
                        <button
                            :class="tab === 'dapat' ? 'border-b-4 -mb-0.5  border-zprimary-tab text-zprimary' :
                                'text-gray-500'"
                            class="px-4 py-2 focus:outline-none font-semibold" @click="tab = 'dapat'">
                            Dapat Poin
                        </button>
                        <button
                            :class="tab === 'tukar' ? 'border-b-4 -mb-0.5  border-zprimary-tab text-zprimary' :
                                'text-gray-500'"
                            class="px-4 py-2 focus:outline-none font-semibold" @click="tab = 'tukar'">
                            Tukar Poin
                        </button>
                    </div>
                    <div x-show="tab === 'semua'">
                        @foreach ($history as $item)
                            <div class="flex justify-between items-center py-2">
                                <div class="flex items-center gap-4">
                                    <div class="h-10 aspect-square flex justify-center items-center rounded"
                                        style="background-color: {{ $item['title'] === 'Tukar Poin' ? '#EDE3E3' : ($item['title'] === 'Dapat Poin' ? '#DCEDE2' : '#EDE3E3') }}">
                                        <img src="/images/poin-icon.png" alt="icon" class="w-6 h-6 object-contain" />
                                    </div>
                                    <div>
                                        <p class="font-semibold">{{ $item['title'] }}</p>
                                        <p class="text-sm text-gray-500">{{ $item['desc'] }}</p>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <p
                                        class="font-semibold {{ Str::startsWith($item['poin'], '+') ? 'text-green-600' : 'text-red-600' }}">
                                        {{ $item['poin'] }}</p>
                                    <p class="text-xs text-gray-400">{{ $item['date'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div x-show="tab === 'dapat'">
                        @foreach ($history as $item)
                            @if ($item['title'] === 'Dapat Poin')
                                <div class="flex justify-between items-center py-2">
                                    <div class="flex items-center gap-4">
                                        <div class="h-10 aspect-square flex justify-center items-center rounded"
                                            style="background-color: {{ $item['title'] === 'Tukar Poin' ? '#EDE3E3' : ($item['title'] === 'Dapat Poin' ? '#DCEDE2' : '#EDE3E3') }}">
                                            <img src="/images/poin-icon.png" alt="icon"
                                                class="w-6 h-6 object-contain" />
                                        </div>
                                        <div>
                                            <p class="font-semibold">{{ $item['title'] }}</p>
                                            <p class="text-sm text-gray-500">{{ $item['desc'] }}</p>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <p
                                            class="font-semibold {{ Str::startsWith($item['poin'], '+') ? 'text-green-600' : 'text-red-600' }}">
                                            {{ $item['poin'] }}</p>
                                        <p class="text-xs text-gray-400">{{ $item['date'] }}</p>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        @if (!collect($history)->where('title', 'Dapat Poin')->count())
                            <p>Daftar aktivitas dapat poin akan ditampilkan di sini.</p>
                        @endif
                    </div>
                    <div x-show="tab === 'tukar'">
                        @php
                            $tukarPoin = collect($history)->where('title', 'Tukar Poin');
                        @endphp
                        @if ($tukarPoin->count())
                            @foreach ($tukarPoin as $item)
                                <div class="flex justify-between items-center py-2">
                                    <div class="flex items-center gap-4">
                                        <div class="h-10 aspect-square flex justify-center items-center rounded"
                                            style="background-color: {{ $item['title'] === 'Tukar Poin' ? '#EDE3E3' : ($item['title'] === 'Dapat Poin' ? '#DCEDE2' : '#EDE3E3') }}">
                                            <img src="/images/poin-icon.png" alt="icon"
                                                class="w-6 h-6 object-contain" />
                                        </div>
                                        <div>
                                            <p class="font-semibold">{{ $item['title'] }}</p>
                                            <p class="text-sm text-gray-500">{{ $item['desc'] }}</p>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <p
                                            class="font-semibold {{ Str::startsWith($item['poin'], '+') ? 'text-green-600' : 'text-red-600' }}">
                                            {{ $item['poin'] }}</p>
                                        <p class="text-xs text-gray-400">{{ $item['date'] }}</p>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p>Daftar aktivitas tukar poin akan ditampilkan di sini.</p>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
