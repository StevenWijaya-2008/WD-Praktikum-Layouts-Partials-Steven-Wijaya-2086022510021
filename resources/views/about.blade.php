@extends('layouts.app')

@section('content')
<section class="py-12 px-4 bg-gradient-to-r from-white via-indigo-100 to-white dark:bg-gradient-to-r dark:from-neutral-900 dark:via-slate-900 dark:to-neutral-900">
    <div class="py-12 px-4 md:px-8 max-w-6xl mx-auto">

        <section class="grid md:grid-cols-12 gap-8 lg:gap-12 items-center mb-16">
            <div class="md:col-span-5 lg:col-span-4 flex justify-center">
                <div class="relative w-full max-w-sm aspect-square rounded-2xl overflow-hidden shadow-xl border border-slate-200 dark:border-neutral-800">
                    <img src="img/bestie.jpeg" 
                        alt="Steven Wijaya" 
                        class="w-full h-full object-cover">
                </div>
            </div>

            <div class="md:col-span-7 lg:col-span-8">
                <span class="text-blue-600 dark:text-blue-400 text-sm font-semibold tracking-wider uppercase">About Me</span>
                <h1 class="text-3xl font-bold text-slate-900 dark:text-slate-50 md:text-4xl lg:text-5xl mt-2 leading-tight">
                    Crafting dependable web apps with clean architecture.
                </h1>
                <p class="mt-4 text-slate-600 dark:text-slate-400 text-base lg:text-lg leading-relaxed">
                    I'm Steven Wijaya, a web developer based in Indonesia. My work centers on building reliable backend systems using Laravel and pairing them with clean, responsive frontends built with Tailwind CSS.
                </p>
                <p class="mt-3 text-slate-600 dark:text-slate-400 text-base leading-relaxed">
                    Rather than chasing every trend, I focus on pragmatic problem-solving: writing maintainable code, designing predictable database structures, and shipping applications that scale smoothly.
                </p>
            </div>
        </section>

        <section class="mb-16">
            <h2 class="text-2xl font-bold text-slate-900 dark:text-slate-50 mb-6">Tech Stack & Tools</h2>
            
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

                <div class="p-6 bg-slate-50 dark:bg-neutral-800/60 rounded-xl border border-slate-200 dark:border-neutral-800">
                    <h3 class="font-semibold text-slate-900 dark:text-slate-100 text-lg mb-4">Backend</h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 text-xs font-medium rounded-md bg-blue-100 text-blue-800 dark:bg-blue-950 dark:text-blue-300">Laravel</span>
                        <span class="px-3 py-1 text-xs font-medium rounded-md bg-slate-200 text-slate-800 dark:bg-neutral-700 dark:text-slate-200">PHP 8.x</span>
                        <span class="px-3 py-1 text-xs font-medium rounded-md bg-slate-200 text-slate-800 dark:bg-neutral-700 dark:text-slate-200">MySQL</span>
                        <span class="px-3 py-1 text-xs font-medium rounded-md bg-slate-200 text-slate-800 dark:bg-neutral-700 dark:text-slate-200">RESTful APIs</span>
                        <span class="px-3 py-1 text-xs font-medium rounded-md bg-slate-200 text-slate-800 dark:bg-neutral-700 dark:text-slate-200">Java</span>
                    </div>
                </div>

                <div class="p-6 bg-slate-50 dark:bg-neutral-800/60 rounded-xl border border-slate-200 dark:border-neutral-800">
                    <h3 class="font-semibold text-slate-900 dark:text-slate-100 text-lg mb-4">Frontend</h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 text-xs font-medium rounded-md bg-cyan-100 text-cyan-800 dark:bg-cyan-950 dark:text-cyan-300">Tailwind CSS</span>
                        <span class="px-3 py-1 text-xs font-medium rounded-md bg-slate-200 text-slate-800 dark:bg-neutral-700 dark:text-slate-200">JavaScript</span>
                        <span class="px-3 py-1 text-xs font-medium rounded-md bg-slate-200 text-slate-800 dark:bg-neutral-700 dark:text-slate-200">Blade Templating</span>
                        <span class="px-3 py-1 text-xs font-medium rounded-md bg-slate-200 text-slate-800 dark:bg-neutral-700 dark:text-slate-200">HTML5 / CSS3</span>
                    </div>
                </div>

                <div class="p-6 bg-slate-50 dark:bg-neutral-800/60 rounded-xl border border-slate-200 dark:border-neutral-800 sm:col-span-2 lg:col-span-1">
                    <h3 class="font-semibold text-slate-900 dark:text-slate-100 text-lg mb-4">Workflow & Tools</h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 text-xs font-medium rounded-md bg-slate-200 text-slate-800 dark:bg-neutral-700 dark:text-slate-200">Git & GitHub</span>
                        <span class="px-3 py-1 text-xs font-medium rounded-md bg-slate-200 text-slate-800 dark:bg-neutral-700 dark:text-slate-200">Vite</span>
                        <span class="px-3 py-1 text-xs font-medium rounded-md bg-slate-200 text-slate-800 dark:bg-neutral-700 dark:text-slate-200">VS Code</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-6 px-4 md:px-8 mb-16">
            <div class="max-w-7xl mx-auto">
                <div class="max-w-3xl lg:mx-auto mb-12 lg:text-center md:mb-16">
                    <h2 class="text-3xl font-bold mb-6 text-slate-900 md:text-4xl dark:text-slate-50">What I Do</h2>
                    <p class="text-base text-slate-600 leading-relaxed dark:text-slate-400">I build reliable web applications from database architecture to frontend interfaces. Focused on clean code, maintainability, and seamless user experiences.</p>
                </div>

                <div
                    class="grid gap-y-8 gap-x-8 lg:gap-x-0 md:grid-cols-2 lg:grid-cols-3 lg:divide-x lg:divide-slate-300 dark:lg:divide-neutral-700">
                    <div class="lg:px-8">
                        <h3 class="text-slate-900 text-lg font-semibold mb-3 dark:text-slate-50">Web Application Development</h3>
                        <p class="text-base text-slate-600 leading-relaxed dark:text-slate-400">Building custom, dynamic web applications with Laravel. I handle backend routing, database design, business logic, and authentication with security and scalability in mind.</p>
                    </div>
                    <div class="lg:px-8">
                        <h3 class="text-slate-900 text-lg font-semibold mb-3 dark:text-slate-50">REST API & Integration</h3>
                        <p class="text-base text-slate-600 leading-relaxed dark:text-slate-400">Architecting secure, well-structured RESTful APIs using Laravel Sanctum. I design predictable data endpoints for frontend consumption or third-party service integration.</p>
                    </div>
                    <div class="lg:px-8">
                        <h3 class="text-slate-900 text-lg font-semibold mb-3 dark:text-slate-50">Responsive Frontend & UI</h3>
                        <p class="text-base text-slate-600 leading-relaxed dark:text-slate-400">Translating designs into clean, semantic Blade templates powered by Tailwind CSS. Optimized for mobile, desktop, and full dark/light mode compatibility.</p>
                    </div>
                </div>
            </div>
        </section>


        <section class="mt-6 px-4 md:px-8">
            <div class="max-w-4xl mx-auto">
                <div class="bg-gradient-to-br from-black via-black to-purple-600 px-6 py-12 w-full rounded-3xl md:px-16">
                    <div class="max-w-xl">
                        <h2 class="text-3xl font-bold text-white mb-6 md:text-4xl">Interested in working together?</h2>
                        <p class="text-base text-slate-400 leading-relaxed">Whether you have a project in mind, need a backend developer, or just want to discuss web engineering, let's connect.
                        </p>
                        <a href="/contact"
                        class="py-2.5 px-4 mt-8 text-slate-900 text-sm font-semibold rounded-md bg-white inline-block border border-white transition-colors hover:bg-slate-50 focus:outline-none focus-visible:ring-2 focus-visible:ring-white">
                        Get in Touch</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

@endsection