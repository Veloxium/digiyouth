@extends('layouts.auth')
@section('title', 'Login')
@section('content')

    <div class="font-outfit">
        <section>
            <div class="min-h-screen place-content-center place-items-center gap-4 mx-auto px-4 sm:px-6 lg:px-20">
                <h1 class="text-4xl font-bold mb-4">Masuk</h1>
                <h1 class="mb-4 text-gray-500">Masuk ke akun kamu</h1>
                <div class="w-full max-w-sm mx-auto">
                    <form>
                        @csrf
                        <div class="mb-4">
                            <label for="email" class="block text-lg font-medium text-gray-700">NIS</label>
                            <input type="text" name="nis" id="nis" required
                                class="mt-1 block w-full px-3 py-4 border-gray-300 rounded-lg border focus:outline-none focus:ring focus:ring-zprimary focus:border-zprimary sm:text-sm"
                                placeholder="NIS Siswa">
                        </div>
                        <label for="password" class="block text-lg font-medium text-gray-700">Password</label>
                        <div class="mb-4 relative">
                            <input type="password" name="password" id="password" required
                                class="mt-1 block w-full px-3 py-4 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-zprimary focus:border-zprimary sm:text-sm pr-12"
                                placeholder="Password">
                            <button type="button" onclick="togglePassword()" tabindex="-1"
                                class="absolute inset-y-0 right-3 flex items-center px-2 focus:outline-none">
                                <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path id="eyeOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path id="eyeOpen2" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    <g id="eyeClosed" >
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.94 17.94A10.97 10.97 0 0112 19c-4.478 0-8.268-2.943-9.542-7a10.97 10.97 0 012.293-3.95M6.1 6.1A10.97 10.97 0 0112 5c4.478 0 8.268 2.943 9.542 7a10.97 10.97 0 01-1.357 2.572M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 3l18 18" />
                                    </g>
                                </svg>
                            </button>
                        </div>
                        <button type="submit"
                            class="mt-8 w-full flex py-4 px-4 gap-2 btn-zprimary font-semibold rounded-lg justify-center">
                            <p>Masuk</p>
                        </button>
                        <button type="submit"
                            class="mt-4 w-full flex py-4 px-4 gap-2 border-zprimary border font-semibold rounded-lg justify-center">
                            <p>Masuk Sebagain Admin</p>
                        </button>
                    </form>
                </div>
            </div>
        </section>
    </div>
    <script>
        function togglePassword() {
            const input = document.getElementById('password');
            const eyeOpen = document.getElementById('eyeOpen');
            const eyeOpen2 = document.getElementById('eyeOpen2');
            const eyeClosed = document.getElementById('eyeClosed');
            if (input.type === 'password') {
                input.type = 'text';
                eyeOpen.style.display = '';
                eyeOpen2.style.display = '';
                eyeClosed.style.display = 'none';
            } else {
                input.type = 'password';

                eyeOpen.style.display = 'none';
                eyeOpen2.style.display = 'none';
                eyeClosed.style.display = '';
            }
        }
    </script>

@endsection
