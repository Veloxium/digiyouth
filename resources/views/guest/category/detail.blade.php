@extends('layouts.index')

@section('title', 'Detail Category')

@section('content')

    <div class="font-outfit">
        <section>
            <div class="my-10 md:my-20 place-content-start place-items-center gap-4 mx-auto sm:px-6 lg:px-20">
                <div class="relative w-full h-[400px] bg-zprimary rounded-2xl flex items-center justify-center">
                    <img src="{{ asset('storage/public/user/projects/' . $project->project_picture) }}" alt="detail-blog"
                        class="w-full h-full object-cover rounded-2xl absolute inset-0 z-0" />
                    <div class="absolute inset-0 bg-black opacity-35 rounded-2xl z-10"></div>
                    <div
                        class="max-w-5xl mx-auto w-full text-center relative z-20 place-items-center place-content-start h-full">
                        <a href="{{ url()->previous() }}"
                            class="w-10 h-10 flex justify-center items-center bg-white rounded pag text-gray-500 hover:bg-zprimary hover:text-white transition-colors absolute top-6 md:top-20 left-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-arrow-left-icon lucide-arrow-left">
                                <path d="m12 19-7-7 7-7" />
                                <path d="M19 12H5" />
                            </svg>
                        </a>
                        <div class="mt-16 md:mt-28 place-items-center">
                            <div class="w-20 h-2 bg-zprimary my-4"></div>
                            <h1 class="text-white text-4xl md:text-5xl font-bold ">{{ $project->project_title }}</h1>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-8 md:mt-16">
                            <div class="flex flex-col items-start text-sm text-white">
                                <p>Creator: {{ $project->user->name }}</p>
                                <p>Team: {{ $project->team }}</p>
                            </div>
                            <div class="flex gap-2 items-center justify-start md:justify-center text-sm text-white">
                                <p class="px-6 py-2 bg-label rounded-full text-zprimary">
                                    {{ $project->category->category_name }}</p>
                                <p>{{ $project->created_at->translatedFormat('d F Y') }}</p>

                            </div>
                            <div class="flex items-center justify-start md:justify-end gap-4">
                                <div class="flex items-center gap-2">
                                    <img src="/images/thumb-w.svg" alt="like" class="w-6 h-6" />
                                    <p class="text-sm text-white font-semibold">{{ $project->likes_count }}</p>
                                </div>
                                <div class="flex items-center gap-2">
                                    <img src="/images/view-w.svg" alt="view" class="w-6 h-6" />
                                    <p class="text-sm text-white font-semibold">{{ $totalViews }}</p>
                                </div>
                                <div class="flex items-center gap-2">
                                    <img src="/images/share-w.svg" alt="share" class="w-6 h-6" />
                                    <p class="text-sm text-white font-semibold">Share</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="relative max-w-5xl mx-auto w-full bg-[#F0F0F0F3] -mt-10 md:-mt-20 z-20 rounded-2xl py-14 px-4 md:px-16 shadow-md">
                    <div class="w-full h-[280px]">
                        <img src="{{ asset('storage/public/user/projects/' . $project->project_picture) }}"
                            alt="detail-image" class="w-full h-full object-cover rounded-2xl" />
                    </div>
                    <div class="mt-10 space-y-6">
                        <p class="text-4xl">{{ $project->project_title }}</p>
                        <div class="text-justify text-lg mt-4 w-full space-y-4">
                            {!! $project->description !!}
                            <!-- <p class="text-xl font-semibold">Exciting UD Business Case Competition at Jakarta Expo</p> -->
                            <!-- <p> -->
                            <!--     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mauris libero, -->
                            <!--     tincidunt id -->
                            <!--     iaculis et, porttitor in magna. Morbi vitae ipsum egestas, molestie ligula nec, elementum -->
                            <!--     velit. -->
                            <!--     Pellentesque ut eros eu erat fringilla maximus luctus eget ex. In eget risus faucibus, -->
                            <!--     fringilla -->
                            <!--     tellus nec, mollis augue. Aenean lobortis interdum nisl eget ultrices. -->
                            <!-- </p> -->
                            <!-- <p class="text-xl font-semibold">About Competition</p> -->
                            <!-- <p> -->
                            <!--     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mauris libero, -->
                            <!--     tincidunt id -->
                            <!--     iaculis et, porttitor in magna. Morbi vitae ipsum egestas, molestie ligula nec, elementum -->
                            <!--     velit. -->
                            <!--     Pellentesque ut eros eu erat fringilla maximus luctus eget ex. In eget risus faucibus, -->
                            <!--     fringilla -->
                            <!--     tellus nec, mollis augue. Aenean lobortis interdum nisl eget ultrices. Pellentesque quis -->
                            <!--     venenatis purus, non suscipit massa. Proin at lobortis mi. Vestibulum eu ultrices nulla. -->
                            <!--     Duis -->
                            <!--     congue est sed tortor ultrices finibus. Quisque feugiat nunc sit amet mi pharetra -->
                            <!--     ullamcorper. -->
                            <!--     Curabitur nec elit ac magna ornare imperdiet sit amet vitae neque. Donec luctus metus vel -->
                            <!--     facilisis malesuada. Aliquam erat volutpat. Etiam vestibulum leo blandit felis porta, in -->
                            <!--     pretium -->
                            <!--     erat vulputate. Vestibulum et risus sed lorem feugiat vulputate vel ut risus. -->
                            <!-- </p> -->
                            <!-- <p class="text-xl font-semibold">Successful Business Case Competition</p> -->
                            <!-- <p> -->
                            <!--     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mauris libero, -->
                            <!--     tincidunt id -->
                            <!--     iaculis et, porttitor in magna. Morbi vitae ipsum egestas, molestie ligula nec, elementum -->
                            <!--     velit. -->
                            <!--     Pellentesque ut eros eu erat fringilla maximus luctus eget ex. In eget risus faucibus, -->
                            <!--     fringilla -->
                            <!--     tellus nec, mollis augue. Aenean lobortis interdum nisl eget ultrices. -->
                            <!-- </p> -->
                        </div>
                        <p class="font-semibold">See full project here: <a href=""
                                class="underline ">{{ $project->project_link }}</a></p>
                        <p class="font-semibold">Project Tools</p>
                        <div class="flex items-center gap-2">
                            <div class="w-12 h-12 border border-[#D9D9D9] rounded p-2">
                                <img src="/images/tools-1.svg" alt="tool-1" class="w-full h-full object-cover rounded" />
                            </div>
                            <div class="w-12 h-12 border border-[#D9D9D9] rounded p-2">
                                <img src="/images/tools-2.svg" alt="tool-2" class="w-full h-full object-cover rounded" />
                            </div>
                            <div class="w-12 h-12 border border-[#D9D9D9] rounded p-2">
                                <img src="/images/tools-3.svg" alt="tool-3" class="w-full h-full object-cover rounded" />
                            </div>
                            <div class="w-12 h-12 border border-[#D9D9D9] rounded p-2">
                                <img src="/images/tools-4.svg" alt="tool-4" class="w-full h-full object-cover rounded" />
                            </div>
                        </div>
                        @php
                            $isLiked = Auth::check() && $project->likes->contains(Auth::id());
                        @endphp
                        <p class="font-semibold">Suka dengan project ini?</p>
                        @auth
                            <div class="flex items-center gap-4">
                                <form action="{{ url('/project/' . $project->id . '/like') }}" method="POST">
                                    @csrf
                                    <button type="submit"
                                        class="{{ $isLiked ? 'text-red-500' : 'text-gray-500' }} flex gap-2">
                                        <img src="/images/thumb.svg" alt="like" class="w-6 h-6" />
                                        {{ $project->likes_count }}

                                    </button>
                                </form>

                                <div class="flex items-center gap-2">
                                    <img src="/images/share.svg" alt="share" class="w-6 h-6" />
                                    <p class="text-sm text-gray-400 font-semibold">Share</p>
                                </div>
                            </div>
                        @else
                            <div class="flex items-center gap-4">
                                <a href="{{ url('/authentication/login') }}" class="text-gray-500 flex gap-2">
                                    <img src="/images/thumb.svg" alt="like" class="w-6 h-6" />
                                    {{ $project->likes_count }}
                                </a>

                                <div class="flex items-center gap-2">
                                    <img src="/images/share.svg" alt="share" class="w-6 h-6" />
                                    <p class="text-sm text-gray-400 font-semibold">Share</p>
                                </div>
                            </div>

                        @endauth
                        <p class="font-semibold">Preview</p>
                        @auth
                            <div class="flex items-start gap-2">
                                <img src="{{ asset('storage/public/user/profile/' . $user->profile_picture) }}"
                                    class="w-12 h-12 rounded-full bg-zprimary" />
                                <div class="flex flex-col items-start gap-2 mt-2 flex-1">
                                    <p>{{ $user->name }}</p>
                                    <div class="w-full rounded-lg shadow p-4 border border-gray-200">
                                        <form action="{{ url('/project/' . $project->id . '/comment') }}" method="POST"
                                            class="flex flex-col items-end gap-2 w-full">
                                            @csrf
                                            <textarea id="comment" name="content" placeholder="Add a comment..."
                                                class="w-full px-4 py-2 focus:outline-none focus:border-zprimary resize-y h-auto min-h-[80px]" rows="1"
                                                style="overflow:hidden">{{ old('content') }}</textarea>
                                            <button type="submit"
                                                class="px-10 py-3 bg-zprimary text-white rounded-md hover:bg-zprimary-dark transition-colors">Kirim</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="flex items-start gap-2">
                                <div class="flex flex-col items-start gap-2 mt-2 flex-1">
                                    <p>Login Untuk Berkomentar</p>
                                    <div class="w-full rounded-lg shadow p-4 border border-gray-200">
                                        <form class="flex flex-col items-end gap-2 w-full">
                                            @csrf
                                            <textarea disabled id="comment" name="content" placeholder="Silahkan Login"
                                                class="w-full px-4 py-2 focus:outline-none focus:border-zprimary resize-y h-auto min-h-[80px]" rows="1"
                                                style="overflow:hidden">{{ old('content') }}</textarea>
                                            <a href="{{ url('/authentication/login') }}"
                                                class="px-10 py-3 bg-zprimary text-white rounded-md hover:bg-zprimary-dark transition-colors">Login</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endauth
                        <div class="flex items-start justify-between gap-2 mt-20">
                            <div class="space-y-4">
                                <p class="font-semibold">Komentar Lainnya</p>
                                <p class="text-sm">3 Komentar</p>
                            </div>
                            <button class="flex items-center gap-2 py-2 px-4 rounded-md transition-colors"
                                style="transition: background-color 0.2s, color 0.2s; cursor: pointer;"
                                onmouseover="this.style.backgroundColor='#a02a2d';this.style.color='#fff';"
                                onmouseout="this.style.backgroundColor='';this.style.color='';">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-list-filter-icon lucide-list-filter">
                                    <path d="M3 6h18" />
                                    <path d="M7 12h10" />
                                    <path d="M10 18h4" />
                                </svg>
                                <span class="text-sm">Filter</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-chevron-down-icon lucide-chevron-down">
                                    <path d="m6 9 6 6 6-6" />
                                </svg>
                            </button>
                        </div>

                        @foreach ($project->comments->where('parent_id', null) as $comment)
                            <div class="space-y-6 mt-8" x-data="{ openReply: null }">
                                <!-- KOMENTAR UTAMA -->
                                <div class="flex flex-col gap-2">
                                    <div class="flex items-start gap-4">
                                        <img src="{{ asset('storage/public/user/profile/' . $comment->user->profile_picture) }}"
                                            class="w-12 h-12 rounded-full bg-gray-300" />
                                        <div class="flex-1">
                                            <div class="flex items-center gap-2">
                                                <p class="font-semibold">{{ $comment->user->name }}</p>
                                                <span>- {{ $comment->created_at->diffForHumans() }}</span>
                                            </div>
                                            <p class="text-gray-400">{{ $comment->user->class }}</p>
                                            <p class="text-gray-700 mt-2">{{ $comment->content }}</p>
                                            <!-- Like & Reply Button -->
                                            @php
                                                $isCommentLiked =
                                                    Auth::check() && $comment->likes->contains(Auth::id());
                                            @endphp

                                            @auth
                                                <div class="flex items-center gap-4 mt-2">
                                                    <form action="{{ url('/project/comment/' . $comment->id . '/like') }}"
                                                        method="POST">
                                                        @csrf
                                                        <button type="submit"
                                                            class="{{ $isCommentLiked ? 'text-red-500' : 'text-gray-500' }} flex gap-2">
                                                            <img src="/images/thumb.svg" alt="like" class="w-6 h-6" />
                                                            {{ $comment->likes()->count() }}
                                                        </button>
                                                    </form>
                                                    <button
                                                        @click="openReply === {{ $comment->id }} ? openReply = null : openReply = {{ $comment->id }}"
                                                        class="flex items-center gap-2 focus:outline-none">
                                                        <img src="/images/chat.svg" alt="reply" class="w-6 h-6" />
                                                        <p class="text-sm text-gray-400 font-semibold">Reply</p>
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="w-5 h-5 text-gray-400 mt-1 transform transition-transform duration-200"
                                                            :class="{ 'rotate-180': openReply === {{ $comment->id }} }"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                            stroke-width="2">
                                                            <path d="M6 9l6 6 6-6" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            @else
                                                <div class="flex items-center gap-4 mt-2">
                                                    <a href="{{ url('/authentication/login') }}"
                                                        class="text-gray-500 flex gap-2">
                                                        <img src="/images/thumb.svg" alt="like" class="w-6 h-6" />
                                                        {{ $comment->likes()->count() }} </a>
                                                    <button
                                                        @click="openReply === {{ $comment->id }} ? openReply = null : openReply = {{ $comment->id }}"
                                                        class="flex items-center gap-2 focus:outline-none">
                                                        <img src="/images/chat.svg" alt="reply" class="w-6 h-6" />
                                                        <p class="text-sm text-gray-400 font-semibold">Reply</p>
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="w-5 h-5 text-gray-400 mt-1 transform transition-transform duration-200"
                                                            :class="{ 'rotate-180': openReply === {{ $comment->id }} }"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                            stroke-width="2">
                                                            <path d="M6 9l6 6 6-6" />
                                                        </svg>
                                                    </button>
                                                </div>

                                            @endauth

                                            <!-- REPLIES DAN FORM BALASAN -->
                                            <div x-show="openReply === {{ $comment->id }}" x-transition
                                                class="mt-4 space-y-4">
                                                <!-- REPLIES -->
                                                @foreach ($comment->replies as $reply)
                                                    <div class="flex items-start gap-3">
                                                        <img src="{{ asset('storage/public/user/profile/' . $reply->user->profile_picture) }}"
                                                            class="w-12 h-12 rounded-full bg-gray-200 flex items-center justify-center text-gray-500 font-bold" />
                                                        <div>
                                                            <div class="flex items-center gap-2">
                                                                <p class="font-semibold">{{ $reply->user->name }}</p>
                                                                <span>ke</span>
                                                                <span
                                                                    class="font-semibold text-zprimary">{{ $comment->user->name }}</span>
                                                                <span class="text-gray-400">-
                                                                    {{ $reply->created_at->diffForHumans() }}</span>
                                                            </div>
                                                            <p class="text-gray-400">{{ $reply->user->class }}</p>
                                                            <p class="text-gray-700 mt-2">{{ $reply->content }}</p>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                <!-- FORM BALASAN -->
                                                @auth
                                                    <form action="{{ url('/project/' . $project->id . '/comment') }}"
                                                        method="POST" class="flex items-start gap-3">
                                                        @csrf
                                                        <input type="hidden" name="parent_id" value="{{ $comment->id }}">

                                                        <div class="w-full flex items-start gap-2">
                                                            <img src="{{ asset('storage/public/user/profile/' . $user->profile_picture) }}"
                                                                class="w-12 h-12 rounded-full bg-zprimary text-white flex items-center justify-center font-bold" />

                                                            <div class="flex flex-col items-start flex-1">
                                                                <div class="flex items-center gap-2">
                                                                    <p class="font-semibold">{{ $user->name }}</p>
                                                                </div>
                                                                <p class="text-gray-400">{{ $user->class }}</p>

                                                                <div
                                                                    class="w-full mt-2 flex flex-col items-end rounded-lg shadow p-4 border border-gray-200">
                                                                    <textarea name="content" placeholder="Add a reply..."
                                                                        class="w-full px-4 py-2 focus:outline-none resize-y min-h-[80px] rounded-md " rows="2">{{ old('comment') }}</textarea>
                                                                    <button type="submit"
                                                                        class="px-6 py-2 bg-zprimary text-white rounded-md hover:bg-zprimary-dark transition-colors mt-2">
                                                                        Balas
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                @else
                                                    <form class="flex items-start gap-3">
                                                        @csrf

                                                        <div class="w-full flex items-start gap-2">

                                                            <div class="flex flex-col items-start flex-1">
                                                                <div class="flex items-center gap-2">
                                                                    <p class="font-semibold">Login Untuk Membalas Komentar</p>
                                                                </div>

                                                                <div
                                                                    class="w-full mt-2 flex flex-col items-end rounded-lg shadow p-4 border border-gray-200">
                                                                    <textarea disabled name="content" placeholder="Silahkan Login"
                                                                        class="w-full px-4 py-2 focus:outline-none  resize-y min-h-[80px] rounded-md" rows="2">{{ old('comment') }}</textarea>
                                                                    <a href="{{ url('/authentication/login') }}"
                                                                        class="px-6 py-2 bg-zprimary text-white rounded-md hover:bg-zprimary-dark transition-colors mt-2">
                                                                        Login
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                @endauth
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const textarea = document.getElementById('comment');

            function autoResize() {
                this.style.height = 'auto';
                this.style.height = (this.scrollHeight) + 'px';
            }
            textarea.addEventListener('input', autoResize, false);
            // Trigger resize on page load if there's old content
            if (textarea.value) {
                textarea.style.height = 'auto';
                textarea.style.height = (textarea.scrollHeight) + 'px';
            }
        });
    </script>
@endsection
