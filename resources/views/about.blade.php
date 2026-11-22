@extends('layouts.app')

@section('title', 'About')

@section('content')

    <div
        class="bg-white border border-slate-200 shadow-sm w-full max-w-max rounded-lg mx-auto my-10 p-4 sm:p-6 dark:bg-neutral-800 dark:border-neutral-50">
        <section class="flex flex-col h-full items-center px-4 py-10 sm:px-8 lg:min-h-[calc(100vh-84px)]">
            <div class="max-w-7xl mx-auto">
                <div class="max-w-4xl mx-auto text-center relative z-10">
                    @foreach ($abouts as $about)
                        @if ($loop->last)
                            <h1 class="text-4xl text-slate-50 font-bold !leading-tight mb-6 md:text-5xl lg:text-6xl">
                                <span>

                                    {{ $about->title }}

                                </span>
                            </h1>
                            <p class="text-lg text-slate-200 leading-relaxed">
                                {{ $about->description }}
                            </p>
                            <div class="mt-8 flex items-center justify-center flex-wrap gap-4">
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>
    </div>

@endsection
