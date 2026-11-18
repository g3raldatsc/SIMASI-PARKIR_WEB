@php
    $pengguna = auth()->user();
    $admin = $pengguna && $pengguna->role === 'admin';

    $menu = [
        ['heading' => 'Umum'],
        ['label' => 'Dashboard', 'icon' => 'bi-speedometer2', 'url' => 'dashboard', 'match' => 'dashboard'],

        ['heading' => 'Operasional'],
        ['label' => 'Kendaraan Masuk', 'icon' => 'bi-box-arrow-in-right', 'url' => 'parkir/masuk',  'match' => 'parkir/masuk*'],
        ['label' => 'Kendaraan Keluar', 'icon' => 'bi-box-arrow-right', 'url' => 'parkir/keluar', 'match' => 'parkir/keluar*'],
        ['label' => 'Daftar Terparkir', 'icon' => 'bi-list-check', 'url' => 'parkir', 'match' => 'parkir'],
        ['label' => 'Data Kendaraan', 'icon' => 'bi-bicycle', 'url' => 'kendaraan', 'match' => 'kendaraan*'],

        ['heading' => 'Laporan'],
        ['label' => 'Riwayat Parkir', 'icon' => 'bi-clock-history', 'url' => 'laporan/riwayat',  'match' => 'laporan/riwayat*'],
        ['label' => 'Okupansi per Blok','icon' => 'bi-bar-chart', 'url' => 'laporan/okupansi', 'match' => 'laporan/okupansi*', 'admin' => true],

        ['heading' => 'Administrasi', 'admin' => true],
        ['label' => 'Pengguna', 'icon' => 'bi-people', 'url' => 'users', 'match' => 'users*', 'admin' => true],
        ['label' => 'Blok', 'icon' => 'bi-grid', 'url' => 'blocks', 'match' => 'blocks*', 'admin' => true],
        ['label' => 'Slot', 'icon' => 'bi-p-square', 'url' => 'slots', 'match' => 'slots*', 'admin' => true],

        ['heading' => 'Publik'],
        ['label' => 'Peta Parkir', 'icon' => 'bi-map', 'url' => 'peta', 'match' => 'peta'],
    ];
@endphp

<ul class="nav nav-pills flex-column gap-1 p-3 w-100">
    @foreach ($menu as $item)
        @continue(($item['admin'] ?? false) && ! $admin)

        @if (isset($item['heading']))
            <li class="sidebar-heading mt-3 mb-1 px-2">{{ $item['heading'] }}</li>
        @else
            <li class="nav-item">
                <a href="{{ url($item['url']) }}"
                   class="nav-link {{ request()->is($item['match']) ? 'active' : '' }}">
                    <i class="bi {{ $item['icon'] }} me-2"></i>{{ $item['label'] }}
                </a>
            </li>
        @endif
    @endforeach
</ul>
