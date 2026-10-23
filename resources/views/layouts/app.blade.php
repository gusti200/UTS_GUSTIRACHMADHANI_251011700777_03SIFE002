<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Galeri Kuliner Daerah')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="{{ asset('Bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-md site-nav sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('dishes.index') }}">Nusa Rasa</a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#nav" aria-label="Buka menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="nav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('dishes.index') ? 'active' : '' }}" href="{{ route('dishes.index') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dishes.index') }}#daftar">Daftar kuliner</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>@yield('content')</main>

    <footer class="site-footer">
        <div class="container d-flex flex-column flex-md-row justify-content-between gap-1">
            <span>Nusa Rasa, galeri kuliner daerah Indonesia</span>
            <span>Gusti Rachmadhani Putra &middot; Universitas Pamulang</span>
        </div>
    </footer>

    <script src="{{ asset('Bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
