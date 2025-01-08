<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SpaceX Falcon Launch Vehicle">
    <meta property="og:title" content="SpaceX Falcon" />
    <meta property="og:description" content="SpaceX Falcon Launch Vehicle" />
    <meta property="og:image" content="{{ asset('assets/images/favicon.png') }}" />
    <title>SpaceX Falcon</title>
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
</head>

<body>
    <header>
        <!-- Include your navbar here -->
        <nav id="navmenu" class="navmenu">

            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
    </header>

    <main>
        @yield('content')

    </main>

    <footer>
        <p>&copy; 2025 SpaceX Falcon Launch Vehicle. All rights reserved.</p>
    </footer>

    <script src="{{ asset('assets/js/app.js') }}"></script>

    <script>
        document.querySelector('.mobile-nav-toggle').addEventListener('click', function() {
            document.querySelector('#navmenu').classList.toggle('active');
        });
    </script>
</body>

</html>