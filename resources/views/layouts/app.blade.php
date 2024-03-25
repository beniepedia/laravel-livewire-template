<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        @isset($title)
        {{ $title . ' | ' . config('app.name') }}
        @else
        {{ config('app.name') }}
        @endisset
    </title>

    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body>
    <main id="main-wrapper" class="main-wrapper">
        <x-topbar></x-topbar>
        <!-- navbar vertical -->
        <!-- Sidebar -->
        <x-sidebar></x-sidebar>

        <!-- page content -->
        <div id="app-content">

            <div class="app-content-area">
                <div class="container-fluid">


                    {{ $slot }}
                </div>
            </div>
        </div>
        </div>
    </main>

    @vite('resources/js/app.js')
    @livewireScripts

</body>

</html>