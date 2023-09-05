$(function() {
    $('.tombolTambahData').on('click', function() {
        $('#formModalLabel').html('Tambah Data Guru');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#nama').val('');
        $('#kode_guru').val('');
        $('#mapel').val('');
        $('#prod_nonprod').val('');
        $('#id').val('');
    });

    $('.tampilModalUbah').on('click', function() {

        $('#formModalLabel').html('Ubah Data Guru');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/guru/ubah');

    const id = $(this).data('id');

    $.ajax({
            url: 'http://localhost/phpmvc/public/guru/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
            $('#nama').val(data.nama);
            $('#kode_guru').val(data.kode_guru);
            $('#mapel').val(data.mapel);
            $('#prod_nonprod').val(data.prod_nonprod);
            $('#id').val(data.id);
        }
      });
    });
});