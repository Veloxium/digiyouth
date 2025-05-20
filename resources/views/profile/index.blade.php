@extends('layouts.index')

@section('title', 'Profile')

@section('content')

    <div class="font-outfit">
        <section>
            <div class="my-10 md:my-20 place-content-start place-items-center max-w-7xl mx-auto px-4 sm:px-6 lg:px-20">
                <div class="w-full bg-white rounded-2xl pt-16 pb-10 px-6">
                    <div class="flex items-center justify-center gap-4 mb-4">
                        <div>
                            <img src="/images/profile.png" alt="img-profile" class="w-36 h-36 rounded-full mx-auto">
                        </div>
                        <div>
                            <p class="text-xl font-semibold mb-4">Sanji Zuckerberg</p>
                            <label for="image"
                                class="gap-2 border border-zprimary text-sm text-gray-500 hover:text-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-300 font-medium rounded-lg px-4 py-2.5 text-center inline-flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-pen-line-icon lucide-pen-line">
                                    <path d="M12 20h9" />
                                    <path
                                        d="M16.376 3.622a1 1 0 0 1 3.002 3.002L7.368 18.635a2 2 0 0 1-.855.506l-2.872.838a.5.5 0 0 1-.62-.62l.838-2.872a2 2 0 0 1 .506-.854z" />
                                </svg>
                                Edit Foto Profile
                            </label>
                        </div>
                    </div>
                    <form action="" class="w-full mx-auto max-w-4xl mb-20 md:mb-0 md:my-20">
                        <input type="file" hidden name="image" id="image">
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
                            <label for="name" class="block text-lg font-medium">Bio<span
                                    class="text-zprimary">*</span></label>
                            <textarea name="description" id="description" required rows="6"
                                class="mt-1 block w-full p-3 border-gray-300 rounded-lg border focus:outline-none focus:ring focus:ring-zprimary focus:border-zprimary sm:text-sm"
                                placeholder="Deskripsi project max 100 karakter"></textarea>
                        </div>
                        <button
                            class="w-full flex justify-center mt-8 items-center text-center py-3 px-4 gap-2 btn-zprimary rounded">
                            <p>Simpan</p>
                        </button>
                    </form>
                </div>
            </div>

        </section>
    </div>

@endsection
