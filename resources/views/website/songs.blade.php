@extends('layouts.website')

@section('title', 'Songs — Amazing Grace Academy')

@section('content')
    {{-- PAGE HEADER --}}
    <section class="mx-auto max-w-7xl px-6 pt-16 pb-12">
        <div class="max-w-3xl">
            <span class="inline-flex rounded-full bg-purple-500/10 px-4 py-2 text-xs font-semibold text-purple-700">
                Songs & Music Resources
            </span>

            <h1 class="mt-6 text-4xl font-semibold tracking-tight text-slate-900">
                Hymns, Arrangements & Teaching Resources
            </h1>

            <p class="mt-5 text-lg leading-relaxed text-slate-600">
                Explore hymns, choral arrangements, albums, and music teaching
                resources developed through Amazing Grace Academy.
            </p>
        </div>
    </section>

    {{-- SONGS CATALOG --}}
    <section class="mx-auto max-w-7xl px-6 pb-20">
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">

            {{-- SONG CARD --}}
            <x-ui.card class="p-8">
                <div class="flex items-start justify-between">
                    <div class="text-xs font-semibold text-emerald-700">Free Hymn</div>
                    <div class="text-xs text-slate-500">SATB</div>
                </div>

                <h2 class="mt-4 text-xl font-semibold text-slate-900">
                    Amazing Grace
                </h2>

                <p class="mt-2 text-sm text-slate-600">
                    Classic hymn taught using Sol-Fa and Staff notation,
                    focusing on correct harmony and expression.
                </p>

                <div class="mt-6 flex gap-2">
                    <x-ui.button variant="outline" class="w-full">
                        Preview
                    </x-ui.button>
                    <x-ui.button variant="primary" class="w-full">
                        Download
                    </x-ui.button>
                </div>
            </x-ui.card>

            {{-- SONG CARD --}}
            <x-ui.card class="p-8">
                <div class="flex items-start justify-between">
                    <div class="text-xs font-semibold text-sky-700">Arrangement</div>
                    <div class="text-xs text-slate-500">Choir</div>
                </div>

                <h2 class="mt-4 text-xl font-semibold text-slate-900">
                    How Great Thou Art
                </h2>

                <p class="mt-2 text-sm text-slate-600">
                    Choir arrangement used for teaching harmony,
                    voice leading, and musical interpretation.
                </p>

                <div class="mt-6 flex gap-2">
                    <x-ui.button variant="outline" class="w-full">
                        Preview
                    </x-ui.button>
                    <x-ui.button variant="primary" class="w-full">
                        Get Sheet
                    </x-ui.button>
                </div>
            </x-ui.card>

            {{-- SONG CARD --}}
            <x-ui.card class="p-8">
                <div class="flex items-start justify-between">
                    <div class="text-xs font-semibold text-purple-700">Teaching Resource</div>
                    <div class="text-xs text-slate-500">Program</div>
                </div>

                <h2 class="mt-4 text-xl font-semibold text-slate-900">
                    Hymns Unveiled
                </h2>

                <p class="mt-2 text-sm text-slate-600">
                    A YouTube-based teaching program explaining hymns,
                    composers, biblical lessons, and musical analysis.
                </p>

                <div class="mt-6">
                    <x-ui.button variant="glass" class="w-full">
                        Watch Program
                    </x-ui.button>
                </div>
            </x-ui.card>

        </div>
    </section>

    {{-- ALBUMS SECTION --}}
    <section class="bg-slate-900 py-20 text-white">
        <div class="mx-auto max-w-7xl px-6">
            <h2 class="text-3xl font-semibold text-center">
                Albums & Major Releases
            </h2>

            <div class="mt-12 grid gap-6 md:grid-cols-2">

                <div class="rounded-[28px] bg-white/10 p-8 backdrop-blur">
                    <span class="text-xs font-semibold text-emerald-400">
                        February 2023
                    </span>
                    <h3 class="mt-3 text-xl font-semibold">
                        I Choose the Savior!
                    </h3>
                    <p class="mt-3 text-white/70">
                        The first audio album released by Amazing Grace Academy,
                        showcasing musical growth and worship excellence.
                    </p>
                </div>

                <div class="rounded-[28px] bg-white/10 p-8 backdrop-blur">
                    <span class="text-xs font-semibold text-sky-400">
                        October 2023
                    </span>
                    <h3 class="mt-3 text-xl font-semibold">
                        Angel’s Voice: Melodies of Grace
                    </h3>
                    <p class="mt-3 text-white/70">
                        A refined album reflecting choral maturity, harmony,
                        and disciplined musical expression.
                    </p>
                </div>

            </div>
        </div>
    </section>

    {{-- FUTURE SHOP NOTE --}}
    <section class="mx-auto max-w-7xl px-6 py-20">
        <x-ui.card class="p-10 text-center">
            <h2 class="text-2xl font-semibold text-slate-900">
                Songs Shop (Coming Soon)
            </h2>

            <p class="mt-4 text-slate-600 leading-relaxed max-w-2xl mx-auto">
                A digital shop will allow supporters to purchase sheet music,
                arrangements, and recordings to support the academy’s mission
                and instrument development.
            </p>
        </x-ui.card>
    </section>
@endsection
