@extends('layouts.index')

@section('title', 'Statistik')

@section('content')

    <div class="font-outfit">
        <section>
            <div class="max-w-7xl mt-10 md:mt-20 place-content-start place-items-center gap-4 mx-auto px-4 sm:px-6 lg:px-20">
                <div class="flex justify-between items-center w-full">
                    <a href="{{ url('/portofolio') }}"
                        class="w-10 h-10 flex justify-center items-center bg-white rounded pag text-gray-500 hover:bg-zprimary hover:text-white transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-arrow-left-icon lucide-arrow-left">
                            <path d="m12 19-7-7 7-7" />
                            <path d="M19 12H5" />
                        </svg>
                    </a>
                    <h1 class="text-4xl font-bold">Statistik Karya</h1>
                    <div></div>
                </div>
                <div class="flex flex-col md:flex-row max-w-5xl mx-auto mt-10 gap-8">
                    <div class="w-full md:w-2/3">
                        <div>
                            <div class="card" style="flex: 0 0 auto;">
                                <div
                                    class="relative overflow-hidden h-[200px] md:h-[312px] w-full bg-zprimary rounded-2xl place-content-center place-items-center">
                                    <img src="{{ asset('storage/public/user/projects/' . $project->project_picture) }}"
                                        alt="portofolio" class="w-full h-full object-cover" />
                                    <div class="flex items-center gap-2 z-20 absolute bottom-6 left-6">
                                        <div class="flex flex-col items-start gap-4 text-white">
                                            <p class="text-lg font-semibold">{{ $project->project_title }}</p>
                                            <p class="px-6 py-2 bg-label rounded-full text-zprimary">
                                                {{ $project->category->category_name }}</p>
                                        </div>
                                    </div>
                                    <div
                                        class="absolute z-10 top-0 left-0 w-full h-full bg-gradient-to-t from-black to-transparent">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-1/3">
                        <div class="grid grid-cols-2 gap-4 h-full">
                            <div class="flex flex-col justify-center shadow-md border border-gray-300 p-6 rounded-lg ">
                                <p class="font-semibold">Total Views</p>
                                <p class="text-zprimary text-4xl font-semibold mt-2">{{ $totalViews }}</p>
                            </div>
                            <div class="flex flex-col justify-center shadow-md border border-gray-300 p-6 rounded-lg ">
                                <p class="font-semibold">Likes</p>
                                <p class="text-zprimary text-4xl font-semibold mt-2">{{ $totalLikes }}</p>
                            </div>
                            <div class="flex flex-col justify-center shadow-md border border-gray-300 p-6 rounded-lg ">
                                <p class="font-semibold">Comments</p>
                                <p class="text-zprimary text-4xl font-semibold mt-2">{{ $totalComments }}</p>
                            </div>
                            <div class="flex flex-col justify-center shadow-md border border-gray-300 p-6 rounded-lg ">
                                <p class="font-semibold">Shares</p>
                                <p class="text-zprimary text-4xl font-semibold mt-2">26</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full mt-10 mb-20 max-w-5xl">
                    <div class="relative flex flex-col rounded-xl border border-gray-300 bg-clip-border shadow-md">
                        <div
                            class="relative mx-4 mt-4 flex justify-center gap-4 overflow-hidden rounded-none bg-transparent bg-clip-border shadow-none md:flex-row md:items-center">
                            <p class="font-semibold">Views Insight</p>
                        </div>
                        <div class="pt-6 px-2 pb-0">
                            <div id="chart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        const chartConfig = {
            series: [{
                name: "Views",
                data: @json($viewsData),
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

@endsection
