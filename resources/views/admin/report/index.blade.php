@extends('layouts.admin')
@section('title', 'Report')
@section('content')
    <div class="font-outfit">
        <section>
            <div class="px-4 sm:px-6 lg:px-10 py-10">
                <div class="flex justify-between items-center">
                    <p class="text-2xl font-semibold">Report Data Karya Siswa</p>
                    <div class="flex gap-2">
                        <button class="btn-zprimary flex font-bold py-2 px-4 rounded gap-2" {{-- onclick="window.location.href='{{ route('admin.report.export') }}'" --}}>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-download">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                                <path d="M7 11l5 5l5 -5" />
                                <path d="M12 4l0 12" />
                            </svg>
                            Unduh
                        </button>
                        <div class="border rounded pr-2 focus:ring-2 focus:ring-blue-500">
                            <select name="month" id="month"
                                class="px-3 py-2 focus:outline-none">
                                @php
                                    $months = [
                                        1 => 'Januari',
                                        2 => 'Februari',
                                        3 => 'Maret',
                                        4 => 'April',
                                        5 => 'Mei',
                                        6 => 'Juni',
                                        7 => 'Juli',
                                        8 => 'Agustus',
                                        9 => 'September',
                                        10 => 'Oktober',
                                        11 => 'November',
                                        12 => 'Desember',
                                    ];
                                    $currentMonth = now()->month;
                                @endphp
                                @foreach ($months as $num => $name)
                                    <option value="{{ $num }}" {{ $num == $currentMonth ? 'selected' : '' }}>
                                        {{ $name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="rounded-2xl py-10 p-6 bg-white mt-10">
                    @php
                        // Dummy data for testing
                        $karyas = [
                            (object) [
                                'id' => 1,
                                'judul' => 'Poster Digital',
                                'creator' => 'Andi Wijaya',
                                'kelas' => 'XII RPL 1',
                                'created_at' => now(),
                                'kategori' => 'Desain Grafis',
                                'status' => 'approved',
                            ],
                            (object) [
                                'id' => 2,
                                'judul' => 'Video Animasi',
                                'creator' => 'Siti Rahma',
                                'kelas' => 'XII RPL 2',
                                'created_at' => now()->subDay(),
                                'kategori' => 'Animasi',
                                'status' => 'approved',
                            ],
                            (object) [
                                'id' => 3,
                                'judul' => 'Puisi Kemerdekaan',
                                'creator' => 'Budi Santoso',
                                'kelas' => 'XII Bahasa',
                                'created_at' => now()->subDays(2),
                                'kategori' => 'Sastra',
                                'status' => 'approved',
                            ],
                        ];
                    @endphp
                    <table class="min-w-full divide-y divide-gray-200 mt-6  rounded-2xl">
                        <thead class="bg-[#F1F4F9] rounded-2xl">
                            <tr>
                                <th
                                    class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                    No.</th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                    Judul Karya</th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                    Creator</th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                    Kelas</th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                    Date - Time</th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                    Kategori</th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                    Status</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($karyas as $index => $karya)
                                <tr class="h-18">
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $index + 1 }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $karya->judul }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $karya->creator }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $karya->kelas ?? '-' }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $karya->created_at->format('d-m-Y H:i') }}
                                    </td>
                                    <td class="py-4 whitespace-nowrap">{{ $karya->kategori }}</td>
                                    <td class="py-4 whitespace-nowrap capitalize ">
                                        <p class="bg-[#00B69B] text-white rounded-full px-3 py-1 w-fit">
                                            {{ $karya->status }}
                                        </p>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
@endsection
