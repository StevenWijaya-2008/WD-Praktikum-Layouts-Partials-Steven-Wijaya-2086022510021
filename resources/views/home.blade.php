@extends('layouts.app')

@section('content')
<div class="*:bg-none! *:bg-transparent!">
   <section
      class="py-12 px-4 bg-gradient-to-r from-white via-indigo-100 to-white lg:py-16 md:px-8 dark:bg-gradient-to-r dark:from-neutral-900 dark:via-slate-900 dark:to-neutral-900">
      <div class="max-w-7xl mx-auto">
            <div class="max-w-3xl">
               <h1 class="text-slate-900 text-4xl font-bold !leading-tight md:text-5xl lg:text-6xl dark:text-slate-50">
               Hi! I'm Steven Wijaya</h1>
               <h1 class="text-slate-900 text-4xl font-bold !leading-tight md:text-5xl lg:text-6xl dark:text-slate-50">
               A Web Developer</h1>
         </div>

         <div class="grid lg:grid-cols-2 gap-16 lg:gap-12 mt-6">
            <div>
               <p class="text-slate-600 text-lg leading-relaxed dark:text-slate-400">Laravel developer focused on building robust backend systems, efficient APIs, and scalable web solutions.</p>

               <div class="mt-8 flex gap-6 items-center flex-wrap">
                  <a href="/about"
                     class="py-2.5 px-4 text-sm rounded-md font-semibold cursor-pointer text-white border border-blue-600 bg-blue-600 hover:bg-blue-700 transition-all focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500">
                     My Projects
                  </a>
                  <a href="/contact"
                     class="text-slate-900 text-sm font-semibold underline whitespace-nowrap focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 dark:text-slate-400">Contact Me</a>
               </div>

               <div class="mt-16 flex flex-wrap gap-x-8 gap-y-6">
                  <img src="https://readymadeui.com/images/brand-logo1.webp"
                     class="w-28 shrink-0 dark:invert dark:brightness-200" alt="brand-logo1" />
                  <img src="https://readymadeui.com/images/brand-logo2.webp"
                     class="w-28 shrink-0 dark:invert dark:brightness-200" alt="brand-logo2" />
                  <img src="https://readymadeui.com/images/brand-logo3.webp"
                     class="w-28 shrink-0 dark:invert dark:brightness-200" alt="brand-logo3" />
                  <img src="https://readymadeui.com/images/brand-logo4.webp"
                     class="w-28 shrink-0 dark:invert dark:brightness-200" alt="brand-logo4" />
               </div>
            </div>

            <div class="aspect-[7/4]">
               <img src='https://readymadeui.com/images/kpis-dashboard-img.webp'
                  class="shrink-0 w-full h-full rounded-md object-contain" alt="kpi dashboard image" />
            </div>
         </div>
      </div>
   </section>
</div>
@endsection