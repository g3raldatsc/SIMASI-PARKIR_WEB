@extends('layouts.panel')

@section('title', 'Uji Layout')
@section('heading', 'Uji Layout Panel')

@section('actions')
    <button id="tesJquery" class="btn btn-primary btn-sm">Tes jQuery</button>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <p>Jika halaman ini tampil rapi dengan sidebar, layout panel bekerja.</p>
            <p>Hasil tes: <span id="hasilTes" class="fw-semibold text-body-secondary">belum diklik</span></p>
            <a href="{{ url('/uji/flash') }}" class="btn btn-outline-secondary btn-sm">Tes pesan notifikasi</a>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    $('#tesJquery').on('click', function () {
        $('#hasilTes').text('jQuery aktif').removeClass('text-body-secondary').addClass('text-success');
    });
</script>
@endpush
