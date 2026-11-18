<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Panel') | SIMASI-PARKIR</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="{{ asset('css/simasi.css') }}" rel="stylesheet">
    @stack('styles')
</head>
<body class="bg-body-tertiary">

    <nav class="navbar bg-primary sticky-top" data-bs-theme="dark">
        <div class="container-fluid">
            <button class="navbar-toggler d-lg-none me-2" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-label="Buka menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand fw-semibold me-auto" href="{{ url('/') }}">
                <i class="bi bi-p-square-fill me-1"></i>SIMASI-PARKIR
            </a>

            @auth
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle me-1"></i>{{ auth()->user()->name }}
                        <span class="badge text-bg-light ms-1">{{ ucfirst(auth()->user()->role) }}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <form method="POST" action="{{ url('/logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item">
                                    <i class="bi bi-box-arrow-right me-2"></i>Keluar
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            @else
                <a class="btn btn-light btn-sm" href="{{ url('/login') }}">Login</a>
            @endauth
        </div>
    </nav>

    <div class="d-lg-flex">
        <aside class="sidebar" data-bs-theme="dark">
            <div class="offcanvas-lg offcanvas-start" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarLabel">
                <div class="offcanvas-header border-bottom">
                    <h5 class="offcanvas-title" id="sidebarLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                            data-bs-target="#sidebarMenu" aria-label="Tutup"></button>
                </div>
                <div class="offcanvas-body d-block p-0">
                    @include('partials.sidebar')
                </div>
            </div>
        </aside>

        <main class="flex-grow-1 p-3 p-lg-4 overflow-x-hidden">
            @hasSection('heading')
                <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-3">
                    <h1 class="h4 mb-0">@yield('heading')</h1>
                    <div>@yield('actions')</div>
                </div>
            @endif

            @include('partials.alerts')
            @yield('content')
        </main>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/simasi.js') }}"></script>
    @stack('scripts')
</body>
</html>
