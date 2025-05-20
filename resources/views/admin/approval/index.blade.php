@extends('layouts.admin')
@section('title', 'Approval')
@section('content')
    <div class="font-outfit">
        <section>
            <div class="px-4 sm:px-6 lg:px-10 py-10">
                <div class="bg-white shadow-md rounded-lg p-6">
                    <p class="text-2xl font-semibold pb-4">Approval Karya</p>
                    @php
                        // Dummy data for testing
                        $karyas = [
                            (object) [
                                'id' => 1,
                                'judul' => 'Poster Digital',
                                'creator' => 'Andi Wijaya',
                                'created_at' => now(),
                                'kategori' => 'Desain Grafis',
                                'preview_url' => '#',
                                'status' => 'pending',
                            ],
                            (object) [
                                'id' => 2,
                                'judul' => 'Video Animasi',
                                'creator' => 'Siti Rahma',
                                'created_at' => now()->subDay(),
                                'kategori' => 'Animasi',
                                'preview_url' => '#',
                                'status' => 'approved',
                            ],
                            (object) [
                                'id' => 3,
                                'judul' => 'Puisi Kemerdekaan',
                                'creator' => 'Budi Santoso',
                                'created_at' => now()->subDays(2),
                                'kategori' => 'Sastra',
                                'preview_url' => '#',
                                'status' => 'rejected',
                            ],
                        ];
                    @endphp
                    <div style="max-height: 300px; overflow-y: auto;">
                        <table class="min-w-full divide-y divide-gray-200 mt-6">
                            <thead class="bg-[#F1F4F9] rounded-2xl">
                                <tr>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                        Judul Karya</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                        Creator</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                        Date - Time</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                        Kategori</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                        Preview</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                        Revisi</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                        Status</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                        Notes Rejected</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($karyas as $karya)
                                    <tr class="h-18">
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $karya->judul }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $karya->creator }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $karya->created_at->format('d-m-Y H:i') }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $karya->kategori }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="{{ $karya->preview_url }}" target="_blank"
                                                class="text-blue-600 underline">Preview</a>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <button type="button" id="toggle-revisi-and-riwayat-{{ $karya->id }}"
                                                class="w-5 h-5 border-2 rounded bg-white flex items-center justify-center border-gray-300 
                                                focus:outline-none"
                                                onclick="toggleRevisiRiwayat({{ $karya->id }})">
                                                <svg id="icon-revisi-{{ $karya->id }}"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="2" stroke="white" class="w-4 h-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </td>
                                        <td class="py-4 whitespace-nowrap">
                                            <form {{-- method="POST" action="{{ route('admin.approval.status', $karya->id) }}" --}} method="POST"
                                                class="inline status-select-form py-1 rounded pr-2">
                                                @csrf
                                                <select name="status"
                                                    class="w-full rounded px-2 text-sm text-white py-1 status-select"
                                                    onchange="this.form.submit()" data-status="{{ $karya->status }}">
                                                    <option class="text-black" value="pending"
                                                        {{ $karya->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                                    <option class="text-black" value="approved"
                                                        {{ $karya->status == 'approved' ? 'selected' : '' }}>Approved
                                                    </option>
                                                    <option class="text-black" value="rejected"
                                                        {{ $karya->status == 'rejected' ? 'selected' : '' }}>Rejected
                                                    </option>
                                                </select>
                                            </form>
                                        </td>
                                        @if ($karya->status == 'rejected')
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <form {{-- action="{{ route('', $karya->id) }}" --}} method="POST" class="auto-save-form">
                                                    @csrf
                                                    <select name="note_rejected" class="w-full border rounded px-2 py-1"
                                                        onchange="this.form.submit()">
                                                        <option value="">Pilih alasan</option>
                                                        <option value="Kurang sesuai tema">Kurang sesuai tema</option>
                                                        <option value="Kualitas kurang baik">Kualitas kurang baik</option>
                                                        <option value="Konten tidak layak">Konten tidak layak</option>
                                                        <option value="Lainnya">Lainnya</option>
                                                    </select>
                                                </form>
                                            </td>
                                        @else
                                            <td class="px-6 py-4 whitespace-nowrap"></td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="revisi-riwayat-section" class="mt-4 hidden">
                    <div class="bg-white shadow-md rounded-lg p-6">
                        <p class="text-2xl font-semibold pb-4">Komentar Revisi</p>
                        <div class="w-full rounded-lg shadow p-4 border border-gray-200">
                            <form action="#" method="POST" class="flex flex-col items-end gap-2 w-full">
                                @csrf
                                <textarea id="reivisi" name="revisi" placeholder="Berikan alasan mengapa karya perlu revisi"
                                    class="w-full px-4 py-2 focus:outline-none focus:border-zprimary resize-y h-auto min-h-[80px]" rows="1"
                                    style="overflow:hidden">{{ old('comment') }}</textarea>
                                <button type="submit"
                                    class="px-10 py-3 bg-zprimary text-white rounded-md hover:bg-zprimary-dark transition-colors">Kirim</button>
                            </form>
                        </div>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-6 mt-4">
                        <p class="text-2xl font-semibold pb-4 mt-6">Riwayat Revisi</p>
                        <ul class="divide-y divide-gray-200">
                            <li class="flex justify-between py-4">
                                <span class="text-gray-500">Perbaiki warna background</span>
                                <span class="text-gray-500 text-xs md:text-sm">{{ now()->subDays(1)->format('d-m-Y H:i') }} WIB</span>
                            </li>
                            <li class="flex justify-between py-4">
                                <span class="text-gray-500">Tambahkan logo di pojok kanan</span>
                                <span class="text-gray-500 text-xs md:text-sm">{{ now()->subDays(2)->format('d-m-Y H:i') }} WIB</span>
                            </li>
                            <li class="flex justify-between py-4">
                                <span class="text-gray-500">Perbaiki typo pada judul</span>
                                <span class="text-gray-500 text-xs md:text-sm">{{ now()->subDays(3)->format('d-m-Y H:i') }} WIB</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.status-select-form').forEach(function(form) {
                const select = form.querySelector('.status-select');

                function setBg() {
                    form.style.backgroundColor =
                        select.value === 'approved' ? '#00B69B' : // green-100
                        select.value === 'rejected' ? '#FD5454E2' : // red-100
                        '#FCBE2DE2'; // yellow-100 for pending
                }
                setBg();
                select.addEventListener('change', setBg);
            });
        });

        let lastOpenedId = null;

        function toggleRevisiRiwayat(id) {
            const revisiRiwayatSection = document.getElementById('revisi-riwayat-section');
            const iconRevisi = document.getElementById('icon-revisi-' + id);

            // If another button was previously opened, reset its icon
            if (lastOpenedId !== null && lastOpenedId !== id) {
            const prevIcon = document.getElementById('icon-revisi-' + lastOpenedId);
            if (prevIcon) {
                prevIcon.setAttribute('stroke', 'white');
                prevIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />';
            }
            }

            // Toggle section visibility
            if (revisiRiwayatSection.classList.contains('hidden') || lastOpenedId !== id) {
            revisiRiwayatSection.classList.remove('hidden');
            iconRevisi.setAttribute('stroke', 'currentColor');
            iconRevisi.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />';
            lastOpenedId = id;
            } else {
            revisiRiwayatSection.classList.add('hidden');
            iconRevisi.setAttribute('stroke', 'white');
            iconRevisi.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />';
            lastOpenedId = null;
            }
        }
    </script>
@endsection
