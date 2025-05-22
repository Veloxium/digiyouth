@extends('layouts.admin')
@section('title', 'Reward')
@section('content')
    <div class="font-outfit">
        <section>
            <div class="px-4 sm:px-6 lg:px-10 py-10">
                <p class="text-2xl font-semibold">Reward Aktif</p>
                <div class="place-content-start place-items-center gap-4 mx-auto mt-4">
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
                                class="relative h-[230px] w-[350px] text-center  flex-shrink-0 flex flex-col justify-center items-center shadow rounded-2xl overflow-hidden">
                                <img src="{{ $reward['src'] }}" alt="{{ $reward['alt'] }}"
                                    class="w-full h-full object-cover absolute top-0 left-0 z-0 rounded-2xl">
                                <div
                                    class="w-full h-full bg-gradient-to-t from-black/40 to-transparent absolute top-0 left-0 z-10">
                                </div>
                                <div class="flex flex-col z-20 absolute bottom-2 left-0 w-full items-start px-6">
                                    <p class="font-semibold text-xl text-white">{{ $reward['title'] }}</p>
                                    <p class="text-white">{{ $reward['poin'] }} Poin</p>
                                    <div class="w-full flex justify-end">
                                        <form action="">
                                            <button class="p-2 text-zprimary font-semibold"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-trash2-icon lucide-trash-2">
                                                    <path d="M3 6h18" />
                                                    <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" />
                                                    <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
                                                    <line x1="10" x2="10" y1="11" y2="17" />
                                                    <line x1="14" x2="14" y1="11" y2="17" />
                                                </svg></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <p class="text-2xl font-semibold mb-4 mt-10">Tambah Reward</p>
                <div class="w-full bg-white shadow-md rounded-lg p-6">
                    <form action="#" method="POST" class="flex flex-col gap-2 w-full mx-auto">
                        <div class="mb-4">
                            <label for="name" class="block text-lg font-medium">Nama Reward<span
                                    class="text-zprimary">*</span></label>
                            <input type="text" name="name" id="name" required
                                class="mt-2 block w-full p-3 border-gray-300 rounded-lg border focus:outline-none focus:ring focus:ring-zprimary focus:border-zprimary"
                                placeholder="Nama Reward" value="Youtube Premium 1 Bulan">
                        </div>
                        <div class="mb-4">
                            <label for="class" class="block text-lg font-medium">Poin yang Dibutuhkan<span
                                    class="text-zprimary">*</span></label>
                            <input type="text" name="poin" id="poin" required
                                class="mt-2 block w-full p-3 border-gray-300 rounded-lg border focus:outline-none focus:ring focus:ring-zprimary focus:border-zprimary"
                                placeholder="Jumlah Poin" value="200">
                        </div>
                        <div class="mb-4">
                            <label for="class" class="block text-lg font-medium">Preview Reward</label>
                            <label for="image-upload" class="block w-full cursor-pointer mt-2">
                                <div
                                    class="flex flex-col items-center justify-center border-2 border-dotted border-gray-400 rounded-lg h-48 relative">
                                    <img src="/images/gallery-icon.png" alt="icon" class="w-16 h-16">
                                    <span class="text-gray-500 text-sm">Select Your File</span>
                                    <span class="text-gray-500 text-sm">
                                        (PNG, JPG, JPEG)</span>
                                    <input id="image-upload" name="image" type="file" accept="image/*" class="hidden">
                                </div>
                            </label>
                        </div>
                        <div class="flex items-center justify-end">
                            <button
                                class="w-fit flex justify-center items-center text-center py-3 px-8 btn-zprimary rounded">
                                Tambah
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </section>
    </div>
@endsection
