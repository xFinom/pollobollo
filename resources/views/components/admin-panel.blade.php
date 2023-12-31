<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pollo Bollo - Panel de Administracion</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    />
    <link rel="stylesheet" href="{{asset('css/tailwind.output.css')}}" />
    <script
        src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"

    ></script>
    <script src="{{asset('js/init-alpine.js')}}"></script>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"
    />
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
        defer
    ></script>
    <script src="{{ asset('js/charts-pie.js') }}?v={{ time() }}" defer></script>
    <script src="{{ asset('js/charts-lines.js') }}?v={{ time() }}" defer></script>
</head>
<body>
<div
    class="flex h-screen bg-gray-50 dark:bg-gray-900"
    :class="{ 'overflow-hidden': isSideMenuOpen}"
>
    <x-admin-sidebar></x-admin-sidebar>

    <div class="flex flex-col flex-1">
        <x-admin-header></x-admin-header>

        <main class="h-full pb-16 overflow-y-auto">
            <div class="container px-6 mx-auto grid">
                {{ $slot }}
            </div>
        </main>
    </div>
</div>
</body>
</html>
