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
                                            <button class="text-blue-600 underline" type="button"
                                                onclick="showPreviewDialog('{{ addslashes($karya->judul) }}', '{{ addslashes($karya->preview_url) }}')">
                                                Preview
                                            </button>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <button type="button" id="toggle-revisi-and-riwayat-{{ $karya->id }}"
                                                class="w-5 h-5 border-2 rounded bg-white flex items-center justify-center border-gray-300 
                                                focus:outline-none"
                                                onclick="toggleRevisiRiwayat({{ $karya->id }})">
                                                <svg id="icon-revisi-{{ $karya->id }}" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="white"
                                                    class="w-4 h-4">
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
                                                        {{ $karya->status == 'pending' ? 'selected' : '' }}>Pending
                                                    </option>
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

                                <!-- Preview Dialog Modal -->
                                <div id="preview-dialog-backdrop" class="fixed inset-0 bg-black bg-opacity-40 z-40 hidden">
                                </div>
                                <div id="preview-dialog"
                                    class="fixed z-50 left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 bg-white rounded-lg shadow-lg p-6 w-full max-w-2xl hidden"
                                    style="max-height: 90vh; overflow-y: auto;">
                                    <div class="flex justify-end items-center mb-4">
                                        <button onclick="closePreviewDialog()" class="text-gray-500 hover:text-gray-700"
                                            type="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div id="preview-dialog-content" class="mb-4">
                                        <div class="mb-4">
                                            <label class="block text-lg font-medium">Nama<span
                                                    class="text-zprimary">*</span></label>
                                            <input id="preview-nama" type="text" readonly
                                                class="mt-1 block w-full p-3 border-gray-300 rounded-lg border bg-gray-100 sm:text-sm"
                                                placeholder="Nama User">
                                        </div>
                                        <div class="mb-4">
                                            <label class="block text-lg font-medium">Kelas<span
                                                    class="text-zprimary">*</span></label>
                                            <input id="preview-kelas" type="text" readonly
                                                class="mt-1 block w-full p-3 border-gray-300 rounded-lg border bg-gray-100 sm:text-sm"
                                                placeholder="Kelas">
                                        </div>
                                        <div class="mb-4">
                                            <label class="block text-lg font-medium">Judul Project<span
                                                    class="text-zprimary">*</span></label>
                                            <input id="preview-judul" type="text" readonly
                                                class="mt-1 block w-full p-3 border-gray-300 rounded-lg border bg-gray-100 sm:text-sm"
                                                placeholder="Judul karya">
                                        </div>
                                        <div class="mb-4">
                                            <label class="block text-lg font-medium">Kategori Project<span
                                                    class="text-zprimary">*</span></label>
                                            <input id="preview-kategori" type="text" readonly
                                                class="mt-1 block w-full p-3 border-gray-300 rounded-lg border bg-gray-100 sm:text-sm"
                                                placeholder="Kategori">
                                        </div>
                                        <div class="mb-4">
                                            <label class="block text-lg font-medium">Deskripsi<span
                                                    class="text-zprimary">*</span></label>
                                            <p id="preview-deskripsi" readonly
                                                class="mt-1 block w-full p-3 border-gray-300 rounded-lg border bg-gray-100 sm:text-sm min-h-[144px]"
                                                style="white-space: pre-line; background-color: #f3f4f6;">
                                            </p>
                                        </div>
                                        <div class="mb-4">
                                            <label class="block text-lg font-medium">Creator<span
                                                    class="text-zprimary">*</span></label>
                                            <input id="preview-creator" type="text" readonly
                                                class="mt-1 block w-full p-3 border-gray-300 rounded-lg border bg-gray-100 sm:text-sm"
                                                placeholder="Nama User">
                                        </div>
                                        <div class="mb-4">
                                            <label class="block text-lg font-medium">Teams</label>
                                            <input id="preview-teams" type="text" readonly
                                                class="mt-1 block w-full p-3 border-gray-300 rounded-lg border bg-gray-100 sm:text-sm"
                                                placeholder="Nama User">
                                        </div>
                                        <div class="mb-4">
                                            <label class="block text-lg font-medium">Project Tools<span
                                                    class="text-zprimary">*</span></label>
                                            <input id="preview-tools" type="text" readonly
                                                class="mt-1 block w-full p-3 border-gray-300 rounded-lg border bg-gray-100 sm:text-sm"
                                                placeholder="Project Tools">
                                        </div>
                                        <div class="mb-4">
                                            <label class="block text-lg font-medium">Link Project<span
                                                    class="text-zprimary">*</span></label>
                                            <input id="preview-link" type="url" readonly
                                                class="mt-1 block w-full p-3 border-gray-300 rounded-lg border bg-gray-100 sm:text-sm"
                                                placeholder="Link Project">
                                        </div>
                                        <div class="mb-4">
                                            <label class="block text-lg font-medium">Foto Project<span
                                                    class="text-zprimary">*</span></label>
                                            <div class="flex items-center space-x-4">
                                                <img id="preview-image"
                                                    src="https://via.placeholder.com/320x240?text=Preview+Image"
                                                    alt="Preview Project Image"
                                                    class="w-full h-60 object-cover rounded-lg border border-gray-300" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                <span
                                    class="text-gray-500 text-xs md:text-sm">{{ now()->subDays(1)->format('d-m-Y H:i') }}
                                    WIB</span>
                            </li>
                            <li class="flex justify-between py-4">
                                <span class="text-gray-500">Tambahkan logo di pojok kanan</span>
                                <span
                                    class="text-gray-500 text-xs md:text-sm">{{ now()->subDays(2)->format('d-m-Y H:i') }}
                                    WIB</span>
                            </li>
                            <li class="flex justify-between py-4">
                                <span class="text-gray-500">Perbaiki typo pada judul</span>
                                <span
                                    class="text-gray-500 text-xs md:text-sm">{{ now()->subDays(3)->format('d-m-Y H:i') }}
                                    WIB</span>
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
    <script>
        // Dummy data for preview dialog
        const karyaDetails = {
            1: {
                nama: "Andi Wijaya",
                kelas: "XII RPL 1",
                judul: "Poster Digital",
                kategori: "Desain Grafis",
                deskripsi: "Poster digital bertema lingkungan hidup. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin euismod, urna eu tincidunt consectetur, nisi nisl aliquam erat, nec dictum. Mauris facilisis, velit nec laoreet dictum, enim erat dictum erat, at cursus enim erat nec erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Etiam euismod, urna eu tincidunt consectetur, nisi nisl aliquam erat, nec dictum.",
                creator: "Andi Wijaya",
                teams: "Andi Wijaya, Rina Putri",
                tools: "Adobe Photoshop",
                link: "https://example.com/poster-digital",
                image: "https://via.placeholder.com/320x240?text=Poster+Digital"
            },
            2: {
                nama: "Siti Rahma",
                kelas: "XI MM 2",
                judul: "Video Animasi",
                kategori: "Animasi",
                deskripsi: "Video animasi edukasi tentang kesehatan.",
                creator: "Siti Rahma",
                teams: "Siti Rahma, Dedi Kurniawan",
                tools: "Blender, After Effects",
                link: "https://example.com/video-animasi",
                image: "https://via.placeholder.com/320x240?text=Video+Animasi"
            },
            3: {
                nama: "Budi Santoso",
                kelas: "X TKJ 3",
                judul: "Puisi Kemerdekaan",
                kategori: "Sastra",
                deskripsi: "Puisi bertema kemerdekaan Indonesia.",
                creator: "Budi Santoso",
                teams: "Budi Santoso",
                tools: "Microsoft Word",
                link: "https://example.com/puisi-kemerdekaan",
                image: "https://via.placeholder.com/320x240?text=Puisi+Kemerdekaan"
            }
        };

        function showPreviewDialog(title, url, id = null) {
            // If id is provided, fill dialog with dummy data
            if (id && karyaDetails[id]) {
                const data = karyaDetails[id];
                document.getElementById('preview-nama').value = data.nama;
                document.getElementById('preview-kelas').value = data.kelas;
                document.getElementById('preview-judul').value = data.judul;
                document.getElementById('preview-kategori').value = data.kategori;
                document.getElementById('preview-deskripsi').innerHTML = data.deskripsi;
                document.getElementById('preview-creator').value = data.creator;
                document.getElementById('preview-teams').value = data.teams;
                document.getElementById('preview-tools').value = data.tools;
                document.getElementById('preview-link').value = data.link;
                document.getElementById('preview-image').src = data.image;
            } else {
                document.getElementById('preview-dialog-title').textContent = title;
            }
            document.getElementById('preview-dialog').classList.remove('hidden');
            document.getElementById('preview-dialog-backdrop').classList.remove('hidden');
        }

        function closePreviewDialog() {
            document.getElementById('preview-dialog').classList.add('hidden');
            document.getElementById('preview-dialog-backdrop').classList.add('hidden');
        }

        // Close dialog when clicking outside
        document.getElementById('preview-dialog-backdrop').addEventListener('click', closePreviewDialog);

        // Patch all preview buttons to pass id
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('button[onclick^="showPreviewDialog"]').forEach(function(btn) {
                const tr = btn.closest('tr');
                if (tr) {
                    const id = tr.querySelector('button[id^="toggle-revisi-and-riwayat-"]')?.id?.split('-')
                        .pop();
                    if (id) {
                        btn.onclick = function() {
                            showPreviewDialog('', '', id);
                        };
                    }
                }
            });
        });
    </script>

@endsection
