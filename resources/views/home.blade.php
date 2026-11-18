@extends('layouts.public')

@section('title', 'Beranda')

@section('content')
    <div class="text-center py-5">
        <h1 class="display-6 fw-bold">SIMASI-PARKIR</h1>
        <p class="lead">Sistem Informasi Manajemen dan Navigasi Parkir Terpadu Fasilkom Universitas Jember</p>
        <p class="text-body-secondary">Halaman sementara. Sofyan bakal menggantinya dengan beranda pencarian plat.</p>
        <a href="{{ url('/uji/panel') }}" class="btn btn-outline-primary">Lihat contoh panel</a>
    </div>
@endsection
