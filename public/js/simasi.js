$(function () {
    // buat Kirim token CSRF otomatis pada setiap permintaan AJAX jQuery
    $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    });

    // buat Konfirmasi sebelum submit. Pemakaian: <form data-confirm="Yakin menghapus?">
    $(document).on('submit', 'form[data-confirm]', function (e) {
        if (!window.confirm($(this).data('confirm'))) {
            e.preventDefault();
        }
    });

    // buat Pesan sukses hilang otomatis setelah 5 detik
    $('.alert-auto').each(function () {
        var el = this;
        setTimeout(function () {
            bootstrap.Alert.getOrCreateInstance(el).close();
        }, 5000);
    });
});
