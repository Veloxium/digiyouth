@extends('layouts.index')

@section('title', 'Portofolio')

@section('content')

    <div class="font-outfit">
        <section>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-20 lg:py-10 flex flex-col items-center justify-center mt-20">
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
                    <div class="place-items-center">
                        <div class="w-20 h-2 bg-zprimary my-4"></div>
                        <h1 class="text-4xl font-bold mb-4">Upload Projectmu</h1>
                    </div>
                    <div></div>
                </div>
                <form action="" class="w-full mx-auto max-w-4xl my-20">
                    <div class="mb-4">
                        <label for="name" class="block text-lg font-medium">Nama<span
                                class="text-zprimary">*</span></label>
                        <input type="text" name="name" id="name" required
                            class="mt-1 block w-full p-3 border-gray-300 rounded-lg border focus:outline-none focus:ring focus:ring-zprimary focus:border-zprimary sm:text-sm"
                            placeholder="Nama User" value="Sanji Zuckerberg">
                    </div>
                    <div class="mb-4">
                        <label for="class" class="block text-lg font-medium">Kelas<span
                                class="text-zprimary">*</span></label>
                        <input type="text" name="class" id="class" required
                            class="mt-1 block w-full p-3 border-gray-300 rounded-lg border focus:outline-none focus:ring focus:ring-zprimary focus:border-zprimary sm:text-sm"
                            placeholder="Kelas" value="XII TJA 1">
                    </div>
                    <div class="mb-4">
                        <label for="title" class="block text-lg font-medium">Judul Project<span
                                class="text-zprimary">*</span></label>
                        <input type="text" name="title" id="title" required
                            class="mt-1 block w-full p-3 border-gray-300 rounded-lg border focus:outline-none focus:ring focus:ring-zprimary focus:border-zprimary sm:text-sm"
                            placeholder="Judul karya">
                    </div>
                    <div class="mb-4">
                        <label for="category" class="block text-lg font-medium">Kategori Project<span
                                class="text-zprimary">*</span></label>
                        <div class="relative">

                            <select name="category" id="category" required
                                class="mt-1 block w-full p-3 border-gray-300 rounded-lg border focus:outline-none focus:ring focus:ring-zprimary focus:border-zprimary sm:text-sm appearance-none pr-10">
                                <option value="" disabled selected>Pilih Kategori</option>
                                <option value="Hipster">Hipster</option>
                                <option value="Teknologi">Teknologi</option>
                                <option value="Seni">Seni</option>
                                <option value="Desain">Desain</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                            <!-- Hidden default arrow -->
                            <span class="pointer-events-none absolute inset-y-0 right-3 flex items-center text-gray-400">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="name" class="block text-lg font-medium">Deskripsi<span
                                class="text-zprimary">*</span></label>
                        <textarea name="description" id="description" required rows="16"
                            class="mt-1 block w-full p-3 border-gray-300 rounded-lg border focus:outline-none focus:ring focus:ring-zprimary focus:border-zprimary sm:text-sm"
                            placeholder="Deskripsi project max 2.000 kata"></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="name" class="block text-lg font-medium">Creator<span
                                class="text-zprimary">*</span></label>
                        <input type="text" name="name" id="name" required
                            class="mt-1 block w-full p-3 border-gray-300 rounded-lg border focus:outline-none focus:ring focus:ring-zprimary focus:border-zprimary sm:text-sm"
                            placeholder="Nama User" value="Sanji Zuckerberg">
                    </div>
                    <div class="mb-4">
                        <label for="name" class="block text-lg font-medium">Teams</label>
                        <input type="text" name="name" id="name" required
                            class="mt-1 block w-full p-3 border-gray-300 rounded-lg border focus:outline-none focus:ring focus:ring-zprimary focus:border-zprimary sm:text-sm"
                            placeholder="Nama User" value="Sanji Zuckerberg">
                    </div>
                    <div class="mb-4">
                        <label for="name" class="block text-lg font-medium">Project Tools<span
                                class="text-zprimary">*</span></label>
                        <input type="text" name="name" id="name" required
                            class="mt-1 block w-full p-3 border-gray-300 rounded-lg border focus:outline-none focus:ring focus:ring-zprimary focus:border-zprimary sm:text-sm"
                            placeholder="Nama User" value="Sanji Zuckerberg">
                    </div>
                    <div class="mb-4">
                        <label for="name" class="block text-lg font-medium">Link Project<span
                                class="text-zprimary">*</span></label>
                        <input type="text" name="name" id="name" required
                            class="mt-1 block w-full p-3 border-gray-300 rounded-lg border focus:outline-none focus:ring focus:ring-zprimary focus:border-zprimary sm:text-sm"
                            placeholder="Nama User" value="Sanji Zuckerberg">
                    </div>
                    <div class="mb-4">
                        <label for="image" class="block text-lg font-medium">Foto Project<span
                                class="text-zprimary">*</span></label>
                        <div class="flex items-center space-x-4">
                            <label for="image-upload"
                                class="cursor-pointer flex flex-col items-center justify-center w-full h-60 mt-2 border-2 border-dashed border-gray-300 rounded-lg hover:bg-gray-100 transition">
                                <svg class="w-10 h-10 text-zprimary mb-2" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 16v-8m0 0l-4 4m4-4l4 4M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2" />
                                </svg>
                                <span class="text-gray-500">Klik untuk upload gambar</span>
                                <span class="text-xs text-gray-400 mt-1">PNG, JPG, JPEG (max 2MB)</span>
                                <input id="image-upload" name="image" type="file" accept="image/*" required
                                    class="hidden">
                            </label>
                        </div>
                    </div>
                    <button
                        class="w-full flex justify-center mt-8 items-center text-center py-3 px-4 gap-2 btn-zprimary rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-upload-icon lucide-upload">
                            <path d="M12 3v12" />
                            <path d="m17 8-5-5-5 5" />
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                        </svg>
                        <p>Upload Project</p>
                    </button>
                </form>
            </div>
        </section>
    </div>

@endsection
