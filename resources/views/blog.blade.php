@extends('layouts.app')

@section('title', 'Blog')

@section('content')
    <article class="relative z-20 mt-6 px-4 pb-16 md:px-8">
        <div class="max-w-2xl mx-auto lg:max-w-6xl">
            <div class="mb-12 max-w-3xl md:mb-16">
                <h2 class="text-3xl font-bold mb-6 text-slate-900 md:text-4xl dark:text-slate-50">My Journey
                </h2>
                <p class="text-base text-neutral-50 leading-relaxed dark:text-neutral-200">Explore our latest articles,
                    insights,
                    and practical tips designed to help you stay updated, improve your workflow, and build better
                    products
                    with
                    confidence.</p>
            </div>

            <div class="grid gap-x-6 gap-y-8 lg:grid-cols-2">
                @foreach ($blogs as $blog)
                    <a href="#"
                        class="flex items-center flex-col sm:flex-row bg-white border border-slate-200 rounded-md overflow-hidden shadow-sm hover:scale-[1.01] transition-all dark:bg-neutral-800 dark:border-neutral-700">
                        <div class="min-h-60 h-full sm:max-w-[250px] w-full">
                            <img src="https://readymadeui.com/Imagination.webp" alt="imagination"
                                class="w-full h-full object-cover" />
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-slate-50">{{ $blog->title }}
                            </h3>
                            <span class="text-sm block text-slate-500 font-medium mt-2">{{ $blog->subdescription }}</span>
                            <p class="text-base text-slate-600 mt-4 leading-relaxed line-clamp-3 dark:text-slate-400">
                                {{ $blog->content }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </article>
@endsection
