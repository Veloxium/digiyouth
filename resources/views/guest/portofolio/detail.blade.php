@extends('layouts.index')

@section('title', 'Detail Tracking')

@section('content')

    <div class="font-outfit">
        <section>
            <div class="max-w-7xl place-content-start place-items-center gap-4 mx-auto">
                <div
                    class="relative overflow-hidden h-[340px] md:h-[460px] flex flex-col justify-start items-center pt-8 md:pt-20 w-full rounded-b-4xl px-2 sm:px-4 lg:px-20">
                    <img src="/images/tracking-2.png" alt="image-project"
                        class="absolute inset-0 m-auto w-auto h-full max-w-full max-h-full object-cover z-10" />
                    <div class="absolute z-20 top-0 left-0 w-full h-full bg-gradient-to-t from-black/90 to-transparent">
                    </div>
                    <div
                        class="flex flex-col md:flex-row justify-between items-start gap-4 md:gap-8 md:items-center w-full z-20 text-white">
                        <a href="{{ url('portofolio/tracking') }}"
                            class="w-8 h-8 md:w-10 md:h-10 flex justify-center items-center bg-white rounded pag text-gray-500 hover:bg-zprimary hover:text-white transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" md:width="24" md:height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-arrow-left-icon lucide-arrow-left">
                                <path d="m12 19-7-7 7-7" />
                                <path d="M19 12H5" />
                            </svg>
                        </a>
                        <div class="mt-6 md:mt-20 place-items-center text-center md:text-left w-full md:w-auto">
                            <div class="w-16 md:w-20 h-2 bg-zprimary my-3 md:my-4 mx-auto md:mx-0"></div>
                            <h1 class="text-white text-2xl sm:text-3xl md:text-5xl font-bold">NFT Website Design</h1>
                        </div>
                        <div class="hidden md:block"></div>
                    </div>
                    <div
                        class="mt-6 md:mt-20 flex flex-wrap gap-4 items-center justify-start md:justify-center text-white z-20">
                        <p class="px-4 md:px-6 py-1.5 md:py-2 bg-label rounded-full text-zprimary">Hipster</p>
                        <p>10 September 2024</p>
                    </div>
                </div>
                <div class="max-w-5xl w-full flex flex-col my-20 gap-8 px-4 sm:px-6 lg:px-20">
                    <!-- Stepper Progress -->
                    <div class="flex flex-col md:flex-row items-center justify-between mb-10 w-full relative">
                        <!-- Stepper -->
                        @php
                            $steps = ['Project Diupload', 'Dalam Review', 'Telah Disetujui', 'Project Dipublikasikan'];
                            $currentStep = 2;
                        @endphp
                        <div class="flex w-full items-center justify-between relative">
                            @foreach ($steps as $i => $step)
                                <div class="flex flex-col items-center flex-1 relative">
                                    <!-- Circle -->
                                    <div
                                        class="w-8 h-8 md:w-10 md:h-10 flex items-center justify-center rounded-full font-bold z-10
                                            @if ($i + 1 > $currentStep)
                                                bg-white border-2 border-zprimary 
                                            @else
                                                bg-zprimary 
                                            @endif">
                                    </div>
                                    <!-- Text -->
                                    <span
                                        class="mt-2 md:mt-3 text-xs md:text-base font-medium text-center w-20 md:w-auto">{{ $step }}</span>
                                    <!-- Line (except last step) -->
                                    @if ($i < count($steps))
                                        <div
                                            class="hidden md:block absolute top-1/2 w-full h-2 bg-zprimary -translate-y-5 z-0
                                            @if ($i == 0) rounded-l-full @endif
                                            @if ($i == count($steps) -1) rounded-r-full @endif">
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                        <!-- Mobile lines -->
                        <div class="flex md:hidden w-full absolute top-4 left-0 right-0 h-1 z-0">
                            <div class="w-full h-1 bg-zprimary"></div>
                        </div>
                    </div>
                    <!-- Responsive Table/List -->
                    <div class="w-full">
                        <div class="overflow-x-auto">
                            <table class="min-w-full border shadow overflow-hidden">
                                <thead class="bg-zprimary text-white">
                                    <tr>
                                        <th class="px-4 md:px-6 py-3 text-center font-medium tracking-wider border border-black w-16 md:w-20">No</th>
                                        <th class="px-4 md:px-6 py-3 text-left font-medium tracking-wider border border-black">Last Update</th>
                                        <th class="px-4 md:px-6 py-3 text-center font-medium tracking-wider border border-black">Status Update</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="px-4 md:px-6 py-4 whitespace-nowrap border text-center">1</td>
                                        <td class="px-4 md:px-6 py-4 whitespace-nowrap border">02/02/2025 09:00</td>
                                        <td class="px-4 md:px-6 py-4 whitespace-nowrap border">Project telah disetujui admin, cek project di halaman portfolio</td>
                                    </tr>
                                    <tr class="bg-gray-50">
                                        <td class="px-4 md:px-6 py-4 whitespace-nowrap border text-center">2</td>
                                        <td class="px-4 md:px-6 py-4 whitespace-nowrap border">02/02/2025 08:00</td>
                                        <td class="px-4 md:px-6 py-4 whitespace-nowrap border">Admin: Revisi pada bagian deskripsi, buat deskripsi lebih detail</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
