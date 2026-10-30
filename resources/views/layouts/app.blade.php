<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        {{ request()->is('home') ? 'Halaman Home' : '' }}
        {{ request()->is('about') ? 'Halaman About' : '' }}
        {{ request()->is('blog') ? 'Halaman Blog' : '' }}
        {{ request()->is('contact') ? 'Halaman Contact' : '' }}
    </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex flex-col min-h-screen">
    <main class="flex-grow">
        @include('partials.navbar')

        <div class="relative isolate overflow-hidden bg-white dark:bg-neutral-900">

            <div aria-hidden="true" class="pointer-events-none absolute inset-0 -z-10 overflow-hidden">
                <div class="absolute inset-0 bg-radial-[70%_80%_at_100%_0%] from-blue-400/35 via-blue-200/15 to-transparent dark:from-blue-500/30 dark:via-blue-800/10"></div>
                <div class="absolute inset-0 bg-radial-[40%_50%_at_0%_100%] from-blue-300/30 to-transparent dark:from-blue-600/20"></div>
            </div>

            @yield('content')
        </div>
    </main>

    @include('partials.footer')

    <script>
        const toggleOpen = document.getElementById('toggleOpen');
        const toggleClose = document.getElementById('toggleClose');
        const menu = document.getElementById('collapseMenu');

        let lastFocusedElement = null;

        function openMenu() {
            lastFocusedElement = document.activeElement;
            menu.classList.remove('hidden');
            toggleOpen.setAttribute('aria-expanded', 'true');
            menu.focus();
        }

        function closeMenu() {
            menu.classList.add('hidden');
            toggleOpen.setAttribute('aria-expanded', 'false');
            lastFocusedElement?.focus();
        }

        toggleOpen.addEventListener('click', openMenu);
        toggleClose.addEventListener('click', closeMenu);

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && !menu.classList.contains('hidden')) {
                closeMenu();
            }
        });
    </script>
</body>
</html>