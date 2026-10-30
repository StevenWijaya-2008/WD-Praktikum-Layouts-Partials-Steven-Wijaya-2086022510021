@extends('layouts.app')

@section('content')
<section class="py-12 px-4 bg-gradient-to-r from-white via-indigo-100 to-white dark:bg-gradient-to-r dark:from-neutral-900 dark:via-slate-900 dark:to-neutral-900">
    <section class="mt-6 px-4 md:px-8">
        <div class="max-w-4xl mx-auto lg:max-w-6xl">
            <div class="mb-12 max-w-3xl mx-auto text-center md:mb-16">
                <h2 class="text-3xl font-bold mb-6 text-slate-900 md:text-4xl dark:text-slate-50">Articles & Insights</h2>
                <p class="text-base text-slate-600 leading-relaxed dark:text-slate-400">A collection of technical articles, practical tutorials, and personal insights on web development, Laravel, and modern web design.</p>
            </div>

            <div class="grid md:grid-cols-2 gap-6 max-w-lg mx-auto md:max-w-full">

                <a href="#"
                    class="bg-gray-50 rounded-xl overflow-hidden group relative before:absolute before:inset-0 before:z-10 before:bg-black before:opacity-30">
                    <img src="https://readymadeui.com/Imagination.webp" alt="RESTful API with Laravel"
                    class="w-full aspect-[283/160] object-cover group-hover:scale-110 transition-all duration-300" />
                    <div
                    class="bg-gradient-to-t from-black/70 via-black/70 to-transparent p-6 absolute bottom-0 left-0 right-0 z-20">
                    <span class="text-sm block mb-2 text-slate-300 font-semibold">15 JAN 2024 | LARAVEL</span>
                    <h3 class="text-lg lg:text-xl font-semibold text-white">Building a Scalable RESTful API with Laravel & Sanctum</h3>
                    </div>
                </a>

                <a href="#"
                    class="bg-gray-50 rounded-xl overflow-hidden group relative before:absolute before:inset-0 before:z-10 before:bg-black before:opacity-30">
                    <img src="https://readymadeui.com/hacks-watch.webp" alt="Dark Mode in Tailwind"
                    class="w-full aspect-[283/160] object-cover group-hover:scale-110 transition-all duration-300" />
                    <div
                    class="bg-gradient-to-t from-black/70 via-black/70 to-transparent p-6 absolute bottom-0 left-0 right-0 z-20">
                    <span class="text-sm block mb-2 text-slate-300 font-semibold">28 FEB 2024 | TAILWIND CSS</span>
                    <h3 class="text-lg lg:text-xl font-semibold text-white">Mastering Dark Mode & Accessibility in Tailwind CSS</h3>
                    </div>
                </a>

                <a href="#"
                    class="bg-gray-50 rounded-xl overflow-hidden group relative before:absolute before:inset-0 before:z-10 before:bg-black before:opacity-30">
                    <img src="https://readymadeui.com/prediction.webp" alt="Optimizing Web Performance"
                    class="w-full aspect-[283/160] object-cover group-hover:scale-110 transition-all duration-300" />
                    <div
                    class="bg-gradient-to-t from-black/70 via-black/70 to-transparent p-6 absolute bottom-0 left-0 right-0 z-20">
                    <span class="text-sm block mb-2 text-slate-300 font-semibold">10 MAR 2024 | PERFORMANCE</span>
                    <h3 class="text-lg lg:text-xl font-semibold text-white">Optimizing Web Performance: From Vite to Production</h3>
                    </div>
                </a>

                <a href="#"
                    class="bg-gray-50 rounded-xl overflow-hidden group relative before:absolute before:inset-0 before:z-10 before:bg-black before:opacity-30">
                    <img src="https://readymadeui.com/images/food.webp" alt="Modular Layouts in Blade"
                    class="w-full aspect-[283/160] object-cover group-hover:scale-110 transition-all duration-300" />
                    <div
                    class="bg-gradient-to-t from-black/70 via-black/70 to-transparent p-6 absolute bottom-0 left-0 right-0 z-20">
                    <span class="text-sm block mb-2 text-slate-300 font-semibold">22 APR 2024 | LARAVEL BLADE</span>
                    <h3 class="text-lg lg:text-xl font-semibold text-white">Architecting Modular Layouts in Laravel Blade</h3>
                    </div>
                </a>
            </div>
        </div>
    </section>
</section>
@endsection

    