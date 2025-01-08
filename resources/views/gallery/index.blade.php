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
    <link href="{{ asset('assets/images/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/images/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

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
                    <li><a href="{{ url('/about') }}">About</a></li>
                    <li><a href="{{ url('/gallery') }}" class="active">Gallery</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="btn-getstarted" href="{{ url('/') }}">Get Started</a>

        </div>
    </header>

    @extends('layouts.app')

    @section('content')
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
                            <a href="{{ url('/about') }}" class="btn btn-primary me-0 me-sm-2 mx-1">Get Started</a>
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

    <!-- Gallery Section -->
    <section id="gallery" class="gallery section">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <h2>Gallery</h2>
                <p>Explore our stunning SpaceX Falcon Launch Vehicle moments</p>
            </header>

            <div class="row gy-4">
                @php
                $galleryImages = [
                'assets/images/image1.jpg',
                'assets/images/image2.jpg',
                'assets/images/image3.jpg',
                'assets/images/image4.jpg',
                'assets/images/image5.jpg',
                'assets/images/image6.jpg'
                ];
                @endphp

                @foreach ($galleryImages as $image)
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item" data-aos="zoom-in">
                        <a href="{{ asset($image) }}" class="glightbox">
                            <img src="{{ asset($image) }}" alt="Gallery Image" class="img-fluid">
                        </a>
                    </div>
                </div>
                <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf <!-- Cross-site request forgery protection -->

                    <div class="form-group">
                        <label for="image">Upload Image</label>
                        <input type="file" name="image" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

                @endforeach
            </div>
        </div>
    </section>
    @endsection

    @section('scripts')
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const lightbox = GLightbox({
                selector: '.glightbox'
            });
        });
    </script>
    @endsection




    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>