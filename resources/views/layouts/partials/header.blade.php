{{-- This file, will be called in the layouts/app.blade.php --}}

<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto me-xl-0">
            {{-- <h1 class="sitename">Space X</h1> --}}
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/96/SpaceX_Logo_Black.png/1594px-SpaceX_Logo_Black.png" alt="" srcset="" style="width: 150px; height: auto;">
        </a>

        <title>Home - SpaceX Falcon Launch Vehicle</title>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ url('/') }}" class="active">Home</a></li>
                <li><a href="{{ url('/about') }}">About</a></li>
                <li><a href="{{ url('/gallery') }}">Gallery</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="btn-getstarted" href="{{ url('/') }}">Get Started</a>

    </div>
</header>