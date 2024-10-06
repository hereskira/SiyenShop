<!-- resources/views/livewire/navigation.blade.php -->
<nav class="d-flex nav flex-column p-4 border-end min-vh-100 gap-2" style="width: 240px">
    <a class="nav-link d-flex gap-4 fs-5 fw-medium mb-5 justify-content-center" href="/home" wire:click.prevent="navigateTo('home')">
        <img class="logo-img" src="{{ asset('images/logo.png') }}" alt="">
    </a>

    <a class="sidenav-link ps-4 d-flex gap-4 fs-5 fw-medium {{ Route::currentRouteName() == 'shop.dashboard' ? 'active' : '' }}" 
       href="{{ route('shop.dashboard') }}" wire:click.prevent="navigateTo('shop.dashboard')">
        <img src="{{ asset('images/dashboard.svg') }}" alt="">
        Dashboard
    </a>

    <a class="sidenav-link ps-4 d-flex gap-4 fs-5 fw-medium {{ Route::currentRouteName() == 'shop.products' ? 'active' : '' }}" 
       href="{{ route('shop.products') }}" wire:click.prevent="navigateTo('shop.products')">
        <img src="{{ asset('images/products.svg') }}" alt="">
        Products
    </a>

    <a class="sidenav-link ps-4 d-flex gap-4 fs-5 fw-medium {{ Route::currentRouteName() == 'shop.orders' ? 'active' : '' }}" 
       href="{{ route('shop.orders') }}" wire:click.prevent="navigateTo('shop.orders')">
        <img src="{{ asset('images/orders.svg') }}" alt="">
        Orders
    </a>

    <a class="sidenav-link ps-4 d-flex gap-4 fs-5 fw-medium {{ Route::currentRouteName() == 'shop.chat' ? 'active' : '' }}" 
       href="{{ route('shop.chat') }}" wire:click.prevent="navigateTo('shop.chat')">
        <img src="{{ asset('images/chat.svg') }}" alt="">
        Chat
    </a>

    <div class="mt-auto">
        <a class="sidenav-link ps-4 d-flex gap-4 fs-5 fw-medium {{ Route::currentRouteName() == 'shop.logout' ? 'active' : '' }}" 
           href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <img src="{{ asset('images/logout.svg') }}" alt="">
            Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</nav>