@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')
    <div class="font-outfit">
        <section>
            <div class="px-4 sm:px-6 lg:px-10 py-10">
                <p class="text-2xl font-semibold">Dashboard</p>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mt-6">
                    <div class="h-[180px] bg-white rounded-lg shadow-md p-6 flex flex-col justify-between">
                        <div class="flex items-center">
                            <div>
                                <p class="text-gray-500">Total Users</p>
                                <p class="text-2xl font-bold mt-2">1,234</p>
                            </div>
                            <div
                                class="bg-[#FFEBEB] text-zprimary w-14 h-14 rounded-3xl flex items-center justify-center ml-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-users-icon lucide-users">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                    <path d="M16 3.128a4 4 0 0 1 0 7.744" />
                                    <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                    <circle cx="9" cy="7" r="4" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex items-center mt-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="text-green-500 icon icon-tabler icons-tabler-outline icon-tabler-chart-line">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 19l16 0" />
                                <path d="M4 15l4 -6l4 2l4 -5l4 4" />
                            </svg>
                            <p><span class="text-green-500">8.5%</span> Up from yesterday</p>
                        </div>
                    </div>
                    <div class="h-[180px] bg-white rounded-lg shadow-md p-6 flex flex-col justify-between">
                        <div class="flex items-center">
                            <div>
                                <p class="text-gray-500">Total Approve Karya</p>
                                <p class="text-2xl font-bold mt-2">234</p>
                            </div>
                            <div
                                class="bg-[#FFEBEB] text-zprimary w-14 h-14 rounded-3xl flex items-center justify-center ml-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-cube">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M21 16.008v-8.018a1.98 1.98 0 0 0 -1 -1.717l-7 -4.008a2.016 2.016 0 0 0 -2 0l-7 4.008c-.619 .355 -1 1.01 -1 1.718v8.018c0 .709 .381 1.363 1 1.717l7 4.008a2.016 2.016 0 0 0 2 0l7 -4.008c.619 -.355 1 -1.01 1 -1.718z" />
                                    <path d="M12 22v-10" />
                                    <path d="M12 12l8.73 -5.04" />
                                    <path d="M3.27 6.96l8.73 5.04" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex items-center mt-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="text-green-500 icon icon-tabler icons-tabler-outline icon-tabler-chart-line">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 19l16 0" />
                                <path d="M4 15l4 -6l4 2l4 -5l4 4" />
                            </svg>
                            <p><span class="text-green-500">1.5%</span> Up from past week</p>
                        </div>
                    </div>
                    <div class="h-[180px] bg-white rounded-lg shadow-md p-6 flex flex-col justify-between">
                        <div class="flex items-center">
                            <div>
                                <p class="text-gray-500">Total Karya Pending</p>
                                <p class="text-2xl font-bold mt-2">6</p>
                            </div>
                            <div
                                class="bg-[#FFEBEB] text-zprimary w-14 h-14 rounded-3xl flex items-center justify-center ml-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-clock-pause">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M20.942 13.018a9 9 0 1 0 -7.909 7.922" />
                                    <path d="M12 7v5l2 2" />
                                    <path d="M17 17v5" />
                                    <path d="M21 17v5" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex items-center mt-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="text-green-500 icon icon-tabler icons-tabler-outline icon-tabler-chart-line">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 19l16 0" />
                                <path d="M4 15l4 -6l4 2l4 -5l4 4" />
                            </svg>
                            <p><span class="text-green-500">8.5%</span> Up from yesterday</p>
                        </div>
                    </div>
                    <div class="h-[180px] bg-white rounded-lg shadow-md p-6 flex flex-col justify-between">
                        <div class="flex items-center">
                            <div>
                                <p class="text-gray-500">Total Reject Karya</p>
                                <p class="text-2xl font-bold mt-2">1,234</p>
                            </div>
                            <div
                                class="bg-[#FFEBEB] text-zprimary w-14 h-14 rounded-3xl flex items-center justify-center ml-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-x">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M18 6l-12 12" />
                                    <path d="M6 6l12 12" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex items-center mt-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="text-green-500 icon icon-tabler icons-tabler-outline icon-tabler-chart-line">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 19l16 0" />
                                <path d="M4 15l4 -6l4 2l4 -5l4 4" />
                            </svg>
                            <p><span class="text-green-500">8.5%</span> Up from yesterday</p>
                        </div>
                    </div>
                </div>
                <div class="w-full mt-10">
                    <div class="relative flex flex-col bg-white rounded-xl border border-gray-300 bg-clip-border shadow-md py-6 px-4">
                        <div
                            class="relative mx-4 mt-4 flex justify-start gap-4 overflow-hidden rounded-none bg-transparent bg-clip-border shadow-none md:flex-row md:items-center">
                            <p class="font-semibold px-3 text-2xl">Statistik Karya</p>
                        </div>
                        <div class="pt-6 px-2 pb-0">
                            <div id="chart"></div>
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
