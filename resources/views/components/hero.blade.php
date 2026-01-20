<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazing Grace Academy Choir</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        @keyframes pulse-slow {

            0%,
            100% {
                opacity: 0.15;
                transform: scale(1);
            }

            50% {
                opacity: 0.25;
                transform: scale(1.05);
            }
        }

        @keyframes shimmer {
            0% {
                background-position: -1000px 0;
            }

            100% {
                background-position: 1000px 0;
            }
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .animate-pulse-slow {
            animation: pulse-slow 8s ease-in-out infinite;
        }

        .animate-shimmer {
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            background-size: 1000px 100%;
            animation: shimmer 3s infinite;
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
        }

        .gradient-text {
            background: linear-gradient(135deg, #059669 0%, #0284c7 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
</head>

<body class="antialiased">

    <section x-data="{ show: false }" x-init="setTimeout(() => show = true, 100)"
        class="relative overflow-hidden min-h-screen flex items-center">

        <!-- Enhanced gradient background -->
        <div class="absolute inset-0 -z-20 bg-gradient-to-br from-slate-50 via-emerald-50/30 to-sky-50/40"></div>

        <!-- Animated orbs with improved positioning -->
        <div class="absolute inset-0 -z-10 overflow-hidden">
            <div
                class="absolute top-1/4 left-1/4 w-[500px] h-[500px] bg-emerald-300/20 rounded-full blur-3xl animate-pulse-slow">
            </div>
            <div class="absolute bottom-1/3 right-1/4 w-[600px] h-[600px] bg-sky-300/20 rounded-full blur-3xl animate-pulse-slow"
                style="animation-delay: 1s;"></div>
            <div class="absolute top-1/2 left-1/2 w-[400px] h-[400px] bg-violet-300/10 rounded-full blur-3xl animate-pulse-slow"
                style="animation-delay: 2s;"></div>
        </div>

        <!-- Floating musical notes decoration -->
        <div class="absolute top-20 right-16 -z-10 opacity-5 animate-float">
            <svg class="w-32 h-32" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 3v10.55c-.59-.34-1.27-.55-2-.55-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4V7h4V3h-6z" />
            </svg>
        </div>

        <div class="absolute bottom-32 left-20 -z-10 opacity-5 animate-float" style="animation-delay: 1s;">
            <svg class="w-24 h-24" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 3v10.55c-.59-.34-1.27-.55-2-.55-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4V7h4V3h-6z" />
            </svg>
        </div>

        <div class="mx-auto max-w-7xl px-6 sm:px-8 lg:px-12 py-16 lg:py-20">
            <div class="grid items-center gap-16 lg:gap-24 lg:grid-cols-2">

                <!-- LEFT: CONTENT -->
                <div x-show="show" x-transition:enter="transition duration-1000 ease-out"
                    x-transition:enter-start="opacity-0 -translate-x-12"
                    x-transition:enter-end="opacity-100 translate-x-0" class="text-center lg:text-left space-y-8">

                    <!-- Enhanced badge -->
                    <div
                        class="inline-flex items-center gap-2.5 rounded-full glass-effect px-5 py-3 text-sm font-semibold text-slate-700 shadow-lg ring-1 ring-white/60 transition-all hover:shadow-xl hover:scale-105">
                        <svg class="w-4 h-4 text-emerald-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                        <span>Amazing Grace Academy Choir</span>
                        <span class="inline-block w-1 h-1 rounded-full bg-slate-400"></span>
                        <span class="text-slate-500">Est. 2015</span>
                    </div>

                    <!-- Refined heading with better typography -->
                    <h1
                        class="text-5xl sm:text-6xl lg:text-7xl font-extrabold tracking-tight text-slate-900 leading-tight">
                        <span class="block">Where Voices</span>
                        <span class="block mt-3">
                            <span class="gradient-text">
                                Become Harmony
                            </span>
                        </span>
                    </h1>

                    <!-- Improved subheading -->
                    <p class="text-lg sm:text-xl leading-relaxed text-slate-600 max-w-2xl mx-auto lg:mx-0">
                        Professional vocal training meets spiritual growth. We develop disciplined, confident singers
                        prepared for ministry, performance, and leadership through excellence and purpose.
                    </p>

                    <!-- Refined stats grid -->
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 max-w-xl mx-auto lg:mx-0">
                        <div class="text-center lg:text-left group">
                            <div
                                class="text-4xl font-extrabold bg-gradient-to-br from-emerald-600 to-emerald-500 bg-clip-text text-transparent">
                                150+</div>
                            <div class="text-sm font-medium text-slate-500 mt-1">Trained Singers</div>
                        </div>
                        <div class="text-center lg:text-left group">
                            <div
                                class="text-4xl font-extrabold bg-gradient-to-br from-sky-600 to-sky-500 bg-clip-text text-transparent">
                                98%</div>
                            <div class="text-sm font-medium text-slate-500 mt-1">Performance Rate</div>
                        </div>
                        <div class="text-center lg:text-left group">
                            <div
                                class="text-4xl font-extrabold bg-gradient-to-br from-violet-600 to-violet-500 bg-clip-text text-transparent">
                                50+</div>
                            <div class="text-sm font-medium text-slate-500 mt-1">Annual Concerts</div>
                        </div>
                        <div class="text-center lg:text-left group">
                            <div
                                class="text-4xl font-extrabold bg-gradient-to-br from-amber-600 to-amber-500 bg-clip-text text-transparent">
                                24/7</div>
                            <div class="text-sm font-medium text-slate-500 mt-1">Support</div>
                        </div>
                    </div>

                    <!-- Enhanced CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 mx-auto lg:mx-0 max-w-lg">
                        <a href="#join"
                            class="group relative inline-flex items-center justify-center gap-2.5 rounded-2xl bg-gradient-to-r from-emerald-600 to-sky-600 px-8 py-4 text-base font-bold text-white shadow-lg shadow-emerald-600/30 transition-all duration-300 hover:shadow-xl hover:shadow-emerald-600/40 hover:-translate-y-1 hover:scale-105 overflow-hidden">
                            <div class="absolute inset-0 animate-shimmer"></div>
                            <span class="relative">Join the Academy</span>
                            <svg class="relative w-5 h-5 group-hover:translate-x-1 transition-transform duration-300"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </a>

                        <a href="#programs"
                            class="group inline-flex items-center justify-center gap-2.5 rounded-2xl border-2 border-slate-200 glass-effect px-8 py-4 text-base font-bold text-slate-700 shadow-md transition-all duration-300 hover:border-emerald-200 hover:bg-white hover:shadow-lg hover:-translate-y-1">
                            <svg class="w-5 h-5 text-emerald-600 group-hover:scale-110 transition-transform"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>Watch Performance</span>
                        </a>
                    </div>

                    <!-- Trust indicators -->
                    <div
                        class="flex flex-wrap items-center justify-center lg:justify-start gap-6 pt-4 text-sm text-slate-500">
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="font-medium">Accredited Program</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-sky-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                            </svg>
                            <span class="font-medium">Expert Instructors</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-violet-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="font-medium">Award Winning</span>
                        </div>
                    </div>
                </div>

                <!-- RIGHT: HERO IMAGE & CARD -->
                <div x-show="show" x-transition:enter="transition duration-1200 delay-200 ease-out"
                    x-transition:enter-start="opacity-0 translate-y-12 scale-95"
                    x-transition:enter-end="opacity-100 translate-y-0 scale-100" class="relative">

                    <!-- Main image container with enhanced styling -->
                    <div
                        class="relative rounded-[2.5rem] overflow-hidden shadow-2xl shadow-emerald-600/20 ring-1 ring-white/60 transition-all duration-500 hover:shadow-3xl hover:shadow-emerald-600/30">
                        <!-- Image placeholder with gradient -->
                        <div
                            class="aspect-[4/5] bg-gradient-to-br from-emerald-500/10 via-sky-500/10 to-violet-500/10 relative">
                            <div class="absolute inset-0 flex items-center justify-center p-12">
                                <div class="text-center space-y-6">
                                    <!-- Enhanced placeholder -->
                                    <div
                                        class="relative w-full h-80 bg-gradient-to-br from-white to-emerald-50/50 rounded-3xl flex items-center justify-center shadow-lg ring-1 ring-emerald-100">
                                        <div class="text-center space-y-4">
                                            <div class="relative inline-block">
                                                <div class="absolute inset-0 bg-emerald-500/20 blur-2xl rounded-full">
                                                </div>
                                                <svg class="relative w-40 h-40 text-emerald-400" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M18 3a1 1 0 00-1.447-.894L8.763 6H5a3 3 0 000 6h.28l1.771 5.316A1 1 0 008 18h1a1 1 0 001-1v-4.382l6.553 3.276A1 1 0 0018 15V3z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="space-y-2">
                                        <p class="text-base font-semibold text-slate-700">Replace with choir
                                            performance image</p>
                                        <p class="text-sm text-slate-500">Recommended: 800×1000px • JPG or PNG</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Enhanced overlay card -->
                        <div class="absolute -bottom-8 -right-8 w-[85%] z-10">
                            <div
                                class="glass-effect rounded-3xl p-7 shadow-2xl shadow-black/15 ring-1 ring-white/60 border border-white/40">
                                <!-- Header -->
                                <div class="flex items-start justify-between mb-6">
                                    <div class="space-y-1">
                                        <p class="text-xs font-semibold text-emerald-600 uppercase tracking-wide">
                                            Current Cohort</p>
                                        <h3 class="text-3xl font-extrabold text-slate-900">Class of 2026</h3>
                                        <p class="text-sm text-slate-600">Fall Enrollment Now Open</p>
                                    </div>
                                    <span
                                        class="inline-flex items-center gap-2 rounded-full bg-gradient-to-r from-emerald-500 to-emerald-600 px-4 py-2 text-sm font-bold text-white shadow-lg shadow-emerald-500/30">
                                        <span class="flex h-2 w-2 relative">
                                            <span
                                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-white opacity-75"></span>
                                            <span class="relative inline-flex rounded-full h-2 w-2 bg-white"></span>
                                        </span>
                                        12 Spots Left
                                    </span>
                                </div>

                                <!-- Progress bars -->
                                <div class="space-y-5">
                                    <div>
                                        <div class="flex justify-between items-baseline mb-2">
                                            <span class="text-sm font-semibold text-slate-700">Vocal Mastery</span>
                                            <span class="text-sm font-bold text-emerald-600">85%</span>
                                        </div>
                                        <div
                                            class="h-2.5 w-full rounded-full bg-slate-200/80 overflow-hidden shadow-inner">
                                            <div
                                                class="h-full w-[85%] bg-gradient-to-r from-emerald-500 to-emerald-400 rounded-full shadow-sm transition-all duration-1000">
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="flex justify-between items-baseline mb-2">
                                            <span class="text-sm font-semibold text-slate-700">Music Theory</span>
                                            <span class="text-sm font-bold text-sky-600">70%</span>
                                        </div>
                                        <div
                                            class="h-2.5 w-full rounded-full bg-slate-200/80 overflow-hidden shadow-inner">
                                            <div
                                                class="h-full w-[70%] bg-gradient-to-r from-sky-500 to-sky-400 rounded-full shadow-sm transition-all duration-1000">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Footer with CTA -->
                                <div class="mt-7 pt-6 border-t border-slate-200/60">
                                    <div class="flex items-center justify-between gap-4">
                                        <div class="flex items-center gap-3">
                                            <div
                                                class="flex items-center justify-center w-10 h-10 rounded-xl bg-gradient-to-br from-emerald-500 to-sky-500 text-white shadow-lg">
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                            <div>
                                                <p class="text-xs font-medium text-slate-500">Next Session</p>
                                                <p class="text-sm font-bold text-slate-900">Saturday, 3:00 PM</p>
                                            </div>
                                        </div>
                                        <button
                                            class="rounded-xl bg-slate-900 px-5 py-2.5 text-sm font-bold text-white hover:bg-slate-800 transition-all duration-300 shadow-lg hover:shadow-xl hover:scale-105">
                                            Register Now
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Enhanced floating music icon -->
                        <div
                            class="absolute -top-6 -left-6 w-24 h-24 glass-effect rounded-2xl shadow-xl flex items-center justify-center ring-1 ring-white/60 transition-all duration-500 hover:scale-110 hover:rotate-6">
                            <svg class="w-10 h-10 text-emerald-600" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M18 3a1 1 0 00-1.196-.98l-10 2A1 1 0 006 5v9.114A4.369 4.369 0 005 14c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V7.82l8-1.6v5.894A4.37 4.37 0 0015 12c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V3z" />
                            </svg>
                        </div>

                        <!-- Additional decorative element -->
                        <div
                            class="absolute top-1/4 -right-4 w-16 h-16 glass-effect rounded-xl shadow-lg flex items-center justify-center ring-1 ring-white/60 transition-all duration-500 hover:scale-110">
                            <svg class="w-7 h-7 text-sky-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Refined scroll indicator -->
        <div class="absolute bottom-10 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2">
            <span class="text-xs font-medium text-slate-400 uppercase tracking-wider">Scroll to explore</span>
            <div class="animate-bounce">
                <svg class="w-6 h-6 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                </svg>
            </div>
        </div>
    </section>

</body>

</html>
