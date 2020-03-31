$(document).ready(function() {
    $('#example').dataTable();
    $('.tombol-edit').click(function() {
        var id = $(this).data('kode');
        var nama = $(this).data('nama');
        var bentuk = $(this).data('bentuk');
        var website = $(this).data('website');
        $('#nama_halaman').val(nama);
        $('#id_halaman').val(id);
        $('#bentuk').val(bentuk);
        $('#website').val(website);
        $('#edit').modal('show');
    });
});