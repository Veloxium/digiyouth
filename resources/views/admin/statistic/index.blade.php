@extends('layouts.admin')
@section('title', 'Statistic')
@section('content')
    <div class="font-outfit">
        <section>
            <div class="px-4 sm:px-6 lg:px-10 py-10">
                <div class="w-full">
                    <div
                        class="relative flex flex-col bg-white rounded-xl border border-gray-300 bg-clip-border shadow-md py-6 px-4">
                        <div
                            class="relative mx-4 mt-4 flex justify-start gap-4 overflow-hidden rounded-none bg-transparent bg-clip-border shadow-none md:flex-row md:items-center">
                            <p class="font-semibold px-3 text-2xl">Statistik Unggahan Karya</p>
                        </div>
                        <div class="pt-6 px-2 pb-0">
                            <div id="chart"></div>
                        </div>
                    </div>
                </div>
                <div class="mt-10">
                    <p class="text-2xl font-semibold">Kontributor Populer Mingguan</p>
                    <div class="rounded-2xl py-10 p-6 bg-white mt-4">
                        @php
                            // Dummy data for testing
                            $contributors = [
                                (object) [
                                    'id' => 1,
                                    'creator' => 'Andi Wijaya',
                                    'kelas' => 'XII RPL 1',
                                    'likes' => 120,
                                    'views' => 350,
                                    'shares' => 45,
                                ],
                                (object) [
                                    'id' => 2,
                                    'creator' => 'Siti Rahma',
                                    'kelas' => 'XII RPL 2',
                                    'likes' => 98,
                                    'views' => 290,
                                    'shares' => 30,
                                ],
                                (object) [
                                    'id' => 3,
                                    'creator' => 'Budi Santoso',
                                    'kelas' => 'XII Bahasa',
                                    'likes' => 85,
                                    'views' => 210,
                                    'shares' => 22,
                                ],
                            ];
                        @endphp
                        <div class="overflow-x-auto hide-scrollbar">

                            <table class="min-w-full divide-y divide-gray-200 mt-6 rounded-2xl">
                                <thead class="bg-[#F1F4F9] rounded-2xl">
                                    <tr>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                            No.</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                            Creator</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                            Kelas</th>
                                        <th
                                            class="px-6 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider text-center">
                                            Jumlah Likes</th>
                                        <th
                                            class="px-6 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider text-center">
                                            Jumlah Views</th>
                                        <th
                                            class="px-6 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider text-center">
                                            Jumlah Share</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($contributors as $index => $contributor)
                                        <tr class="h-18">
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $index + 1 }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $contributor->creator }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $contributor->kelas }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center">{{ $contributor->likes }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center">{{ $contributor->views }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center">{{ $contributor->shares }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="mt-10">
                    <p class="text-2xl font-semibold">Karya Populer Mingguan</p>
                    <div class="rounded-2xl py-10 p-6 bg-white mt-4">
                        @php
                            // Dummy data for testing
                            $karyaPopuler = [
                                (object) [
                                    'id' => 1,
                                    'judul' => 'Inovasi Teknologi Ramah Lingkungan',
                                    'creator' => 'Andi Wijaya',
                                    'kelas' => 'XII RPL 1',
                                    'kategori' => 'Teknologi',
                                    'likes' => 150,
                                    'views' => 400,
                                    'shares' => 60,
                                ],
                                (object) [
                                    'id' => 2,
                                    'judul' => 'Puisi: Senja di Ujung Kota',
                                    'creator' => 'Siti Rahma',
                                    'kelas' => 'XII RPL 2',
                                    'kategori' => 'Sastra',
                                    'likes' => 110,
                                    'views' => 320,
                                    'shares' => 40,
                                ],
                                (object) [
                                    'id' => 3,
                                    'judul' => 'Poster: Cinta Lingkungan',
                                    'creator' => 'Budi Santoso',
                                    'kelas' => 'XII Bahasa',
                                    'kategori' => 'Desain',
                                    'likes' => 95,
                                    'views' => 250,
                                    'shares' => 28,
                                ],
                            ];
                        @endphp
                        <div class="overflow-x-auto hide-scrollbar">
                            <table class="min-w-full divide-y divide-gray-200 mt-6 rounded-2xl">
                                <thead class="bg-[#F1F4F9] rounded-2xl">
                                    <tr>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                            No.</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                            ID</th>
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
                                            Kategori</th>
                                        <th
                                            class="px-6 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider text-center">
                                            Jumlah Likes</th>
                                        <th
                                            class="px-6 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider text-center">
                                            Jumlah Views</th>
                                        <th
                                            class="px-6 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider text-center">
                                            Jumlah Share</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($karyaPopuler as $index => $karya)
                                        <tr class="h-18">
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $index + 1 }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $karya->id }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $karya->judul }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $karya->creator }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $karya->kelas }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $karya->kategori }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center">{{ $karya->likes }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center">{{ $karya->views }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center">{{ $karya->shares }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="mt-10">
                    <p class="text-2xl font-semibold">Daftar Tukar Reward</p>
                    <div class="rounded-2xl py-10 p-6 bg-white mt-4">
                        @php
                            // Dummy data for testing
                            $rewardList = [
                                (object) [
                                    'no' => 1,
                                    'nama' => 'Andi Wijaya',
                                    'kelas' => 'XII RPL 1',
                                    'reward' => 'Voucher Belanja',
                                    'tanggal' => '2024-06-01',
                                    'status' => 'Sudah Diambil',
                                ],
                                (object) [
                                    'no' => 2,
                                    'nama' => 'Siti Rahma',
                                    'kelas' => 'XII RPL 2',
                                    'reward' => 'Merchandise',
                                    'tanggal' => '2024-06-03',
                                    'status' => 'Belum Diambil',
                                ],
                                (object) [
                                    'no' => 3,
                                    'nama' => 'Budi Santoso',
                                    'kelas' => 'XII Bahasa',
                                    'reward' => 'Pulsa',
                                    'tanggal' => '2024-06-05',
                                    'status' => 'Sudah Diambil',
                                ],
                            ];
                        @endphp
                        <div class="overflow-x-auto hide-scrollbar">
                            <table class="min-w-full divide-y divide-gray-200 mt-6 rounded-2xl">
                                <thead class="bg-[#F1F4F9] rounded-2xl">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">No.</th>
                                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Nama</th>
                                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Kelas</th>
                                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Reward</th>
                                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Tanggal Tukar</th>
                                        <th class="px-6 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider text-center">Status</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($rewardList as $reward)
                                        <tr class="h-18">
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $reward->no }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $reward->nama }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $reward->kelas }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $reward->reward }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $reward->tanggal }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                                @if ($reward->status == 'Belum Diambil')
                                                    <form method="POST" 
                                                    {{-- action="{{ route('admin.reward.taken', $reward->no) }}" --}}
                                                    >
                                                        @csrf
                                                        <button type="submit"
                                                            class="px-3 py-2 rounded-md text-xs font-semibold btn-zprimary transition">
                                                            Tandai Sudah Diambil
                                                        </button>
                                                    </form>
                                                @else
                                                    <button type="button"
                                                        class="px-3 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-700 cursor-not-allowed"
                                                        disabled>
                                                        Sudah Diambil
                                                    </button>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        const chartConfig = {
            series: [{
                name: "Karya",
                data: [24, 14, 36, 32, 50, 35, 20, 23, 70, 50, 62, 81],
            }, ],
            chart: {
                type: "line",
                height: 320,
                toolbar: {
                    show: false,
                },
                zoom: {
                    enabled: false,
                },
            },
            title: {
                show: "",
            },
            dataLabels: {
                enabled: false,
            },
            colors: ["#b03335"],
            stroke: {
                lineCap: "round",
                curve: "smooth",
            },
            markers: {
                size: 0,
            },
            xaxis: {
                axisTicks: {
                    show: false,
                },
                axisBorder: {
                    show: false,
                },
                labels: {
                    style: {
                        colors: "#616161",
                        fontSize: "12px",
                        fontFamily: "inherit",
                        fontWeight: 400,
                    },
                },
                categories: [
                    "Jan",
                    "Feb",
                    "Mar",
                    "Apr",
                    "May",
                    "Jun",
                    "Jul",
                    "Aug",
                    "Sep",
                    "Oct",
                    "Nov",
                    "Dec",
                ],
            },
            yaxis: {
                labels: {
                    style: {
                        colors: "#616161",
                        fontSize: "12px",
                        fontFamily: "inherit",
                        fontWeight: 400,
                    },
                },
            },
            grid: {
                show: true,
                borderColor: "#dddddd",
                strokeDashArray: 5,
                xaxis: {
                    lines: {
                        show: true,
                    },
                },
                padding: {
                    top: 5,
                    right: 20,
                },
            },
            fill: {
                opacity: 0.8,
            },
            tooltip: {
                theme: "dark",
            },
        };

        const chart = new ApexCharts(document.querySelector("#chart"), chartConfig);

        chart.render();
    </script>
@endsection
