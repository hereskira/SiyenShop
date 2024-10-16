<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('images/logo.png') }}">

    <title>{{ config('app.name') }}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin-createshop-page.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin-shops-page.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet"> <!--for icons-->

</head>

<body class="antialiased">
    {{-- @include('components.navbar')

    {{-- delete if landing page is ready
    @include('styleguide') --}}

    <div class="d-flex">
            {{-- @livewire('shop-sidenav') --}}
            @livewire('admin.admin-sidenav')
        <main class="min-vh-100 d-flex flex-grow-1 ">
            @yield('content')
            {{-- CONTENT WILL SHOW HERE --}}
        {{-- @livewire('shop-dashboard') --}}
        </main>
    </div>
    @livewireScripts
    <script src="{{ asset('livewire/livewire.js') }}" defer></script>

</body>

</html>
