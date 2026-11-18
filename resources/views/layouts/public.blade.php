<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Beranda') | SIMASI-PARKIR Fasilkom Unej</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="{{ asset('css/simasi.css') }}" rel="stylesheet">
    @stack('styles')
</head>
<body class="d-flex flex-column min-vh-100">

    <nav class="navbar navbar-expand-md bg-primary" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand fw-semibold" href="{{ url('/') }}">
                <i class="bi bi-p-square-fill me-1"></i>SIMASI-PARKIR
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#menuPublik" aria-controls="menuPublik"
                    aria-expanded="false" aria-label="Buka menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menuPublik">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Cari Motor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('peta') ? 'active' : '' }}" href="{{ url('/peta') }}">Peta Parkir</a>
                    </li>
                </ul>
                <div>
                    @auth
                        <a class="btn btn-light btn-sm" href="{{ url('/dashboard') }}">
                            <i class="bi bi-speedometer2 me-1"></i>Dashboard
                        </a>
                    @else
                        <a class="btn btn-light btn-sm" href="{{ url('/login') }}">
                            <i class="bi bi-box-arrow-in-right me-1"></i>Login Petugas
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <main class="flex-grow-1 py-4">
        <div class="container">
            @include('partials.alerts')
            @yield('content')
        </div>
    </main>

    <footer class="border-top py-3 text-center text-body-secondary small">
        &copy; {{ date('Y') }} SIMASI-PARKIR &middot; Fasilkom Universitas Jember
    </footer>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/simasi.js') }}"></script>
    @stack('scripts')
</body>
</html>
