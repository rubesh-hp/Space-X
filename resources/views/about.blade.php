@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Home - SpaceX Falcon Launch Vehicle</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>

<body class="index-page">


    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
            <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto me-xl-0">
                <h1 class="sitename">Space X</h1>
            </a>
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/about') }}" class="active">About</a></li>
                    <li><a href="{{ url('/gallery') }}">Gallery</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
            <a class="btn-getstarted" href="{{ url('/') }}">Get Started</a>
        </div>
    </header>

    <main class="main">
        <!-- Hero Section -->

        <section id="hero" class="hero section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
                            <div class="company-badge mb-4">
                                <i class="bi bi-gear-fill me-2"></i>
                                Working for your success
                            </div>
                            <h1 class="mb-4">
                                Maecenas Vitae <br>
                                Consectetur Led <br>
                                <span class="accent-text">Vestibulum Ante</span>
                            </h1>
                            <p class="mb-4 mb-md-5">
                                Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.
                                Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.
                            </p>
                            <div class="hero-buttons">
                                <a href="{{ url('/') }}" class="btn btn-primary me-0 me-sm-2 mx-1">Get Started</a>
                                <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="btn btn-link mt-2 mt-sm-0 glightbox">
                                    <i class="bi bi-play-circle me-1"></i>
                                    Play Video
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero-image" data-aos="zoom-out" data-aos-delay="300">
                            <img src="{{ asset('assets/img/illustration-1.webp') }}" alt="Hero Image" class="img-fluid">
                            <div class="customers-badge">
                                <div class="customer-avatars">
                                    <img src="{{ asset('assets/img/avatar-1.webp') }}" alt="Customer 1" class="avatar">
                                    <img src="{{ asset('assets/img/avatar-2.webp') }}" alt="Customer 2" class="avatar">
                                    <img src="{{ asset('assets/img/avatar-3.webp') }}" alt="Customer 3" class="avatar">
                                    <img src="{{ asset('assets/img/avatar-4.webp') }}" alt="Customer 4" class="avatar">
                                    <img src="{{ asset('assets/img/avatar-5.webp') }}" alt="Customer 5" class="avatar">
                                    <span class="avatar more">12+</span>
                                </div>
                                <p class="mb-0 mt-2">12,000+ lorem ipsum dolor sit amet consectetur adipiscing elit</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SpaceX Vehicles Section -->
        <section id="vehicles" class="vehicles section">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>SpaceX Vehicles</h2>
                    <p>Discover the groundbreaking vehicles developed by SpaceX to advance space exploration.</p>
                </div>
                <div class="row gy-4">
                    <!-- Falcon 1 -->
                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="vehicle-card">
                            <img src="{{ asset('assets/img/vehicles/falcon1.jpg') }}" alt="Falcon 1" class="img-fluid">
                            <h3>Falcon 1</h3>
                            <p>The first privately developed rocket to achieve orbit.</p>
                        </div>
                    </div>
                    <!-- Falcon 9 -->
                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="vehicle-card">
                            <img src="{{ asset('assets/img/vehicles/falcon9.jpg') }}" alt="Falcon 9" class="img-fluid">
                            <h3>Falcon 9</h3>
                            <p>A reusable rocket for transporting satellites and cargo to space.</p>
                        </div>
                    </div>
                    <!-- Starship -->
                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="vehicle-card">
                            <img src="{{ asset('assets/img/vehicles/starship.jpg') }}" alt="Starship" class="img-fluid">
                            <h3>Starship</h3>
                            <p>The spacecraft for interplanetary travel, including missions to Mars.</p>
                        </div>
                    </div>
                    <!-- Falcon Heavy -->
                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                        <div class="vehicle-card">
                            <img src="{{ asset('assets/img/vehicles/falconheavy.jpg') }}" alt="Falcon Heavy" class="img-fluid">
                            <h3>Falcon Heavy</h3>
                            <p>The most powerful operational rocket capable of carrying heavy payloads.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
@endsection