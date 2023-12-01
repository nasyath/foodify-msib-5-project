$(document).ready(function() {
    $('#createDonasiIndividu').on('submit', (function(e) {
        e.preventDefault();

        var url = $('#url').val();
		
		$('#createDonasiIndividu .modal-footer button').html('Tunggu ...');
		$('#createDonasiIndividu .modal-footer button').attr('disabled', 'disabled');
        
        $.ajax({
            method: 'POST',
            url: url,
            data: new FormData(this),
            processData: false,
            contentType: false,
            success: function(res) {
				if(res == '1') {
                    alert('Formulir Anda berhasil dikirim. Tim Garda Pangan akan menghubungi Anda melalui telepon atau email.');
                    document.location.href = '';
                } else if(res == '2') {
                    alert('Formulir Anda gagal dikirim.');
                }
				
				$('#createDonasiIndividu .modal-footer button').html('Kirim');
				$('#createDonasiIndividu .modal-footer button').removeAtrr('disabled');
            }
        })
    }))

    $('#createDonasiRestoran').on('submit', (function(e) {
        e.preventDefault();

        var url = $('#url').val();
		
		$('#createDonasiRestoran .modal-footer button').html('Tunggu ...');
		$('#createDonasiRestoran .modal-footer button').attr('disabled', 'disabled');
        
        $.ajax({
            method: 'POST',
            url: url,
            data: new FormData(this),
            processData: false,
            contentType: false,
            success: function(res) {
                if(res == '1') {
                    alert('Formulir Anda berhasil dikirim. Tim Garda Pangan akan menghubungi Anda melalui telepon atau email.');
                    document.location.href = '';
                } else if(res == '2') {
                    alert('Formulir Anda gagal dikirim.');
                }
				
				$('#createDonasiRestoran .modal-footer button').html('Kirim');
				$('#createDonasiRestoran .modal-footer button').removeAtrr('disabled');
            }
        })
    }))

    $('#createDonasiEvent').on('submit', (function(e) {
        e.preventDefault();

        var url = $('#url').val();
		
		$('#createDonasiEvent .modal-footer button').html('Tunggu ...');
		$('#createDonasiEvent .modal-footer button').attr('disabled', 'disabled');
        
        $.ajax({
            method: 'POST',
            url: url,
            data: new FormData(this),
            processData: false,
            contentType: false,
            success: function(res) {
                if(res == '1') {
                    alert('Formulir Anda berhasil dikirim. Tim Garda Pangan akan menghubungi Anda melalui telepon atau email.');
                    document.location.href = '';
                } else if(res == '2') {
                    alert('Formulir Anda gagal dikirim.');
                }
				
				$('#createDonasiEvent .modal-footer button').html('Kirim');
				$('#createDonasiEvent .modal-footer button').removeAtrr('disabled');
            }
        })
    }))

    $('#createDonasiPenerima').on('submit', (function(e) {
        e.preventDefault();

        var url = $('#url').val();
		
		$('#createDonasiPenerima .modal-footer button').html('Tunggu ...');
		$('#createDonasiPenerima .modal-footer button').attr('disabled', 'disabled');
        
        $.ajax({
            method: 'POST',
            url: url,
            data: new FormData(this),
            processData: false,
            contentType: false,
            success: function(res) {
                if(res == '1') {
                    alert('Formulir Anda berhasil dikirim. Tim Garda Pangan akan menghubungi Anda melalui telepon atau email.');
                    document.location.href = '';
                } else if(res == '2') {
                    alert('Formulir Anda gagal dikirim.');
                }
				
				$('#createDonasiPenerima .modal-footer button').html('Kirim');
				$('#createDonasiPenerima .modal-footer button').removeAttr('disabled');
            }
        })
    }))

    registerVolunteer = function(_this) {
        var id_jadwal = $(_this).data('id'),
            tanggal_daftar = $(_this).data('tanggal'),
            title = $(_this).data('title'),
            daftar_koordinator = $(_this).data('koordinator'),
            daftar_relawan = $(_this).data('relawan');
        
        $('#idJadwal').val(id_jadwal);   
        $('#tanggalDaftar').val(tanggal_daftar);   

        $('#modalVolunteerTitle').html('Pendaftaran Tanggal ' + title);
        $('#listCoordinator').html(daftar_koordinator);
        $('#listVolunteer').html(daftar_relawan);

        $('#modalVolunteer').modal('show');
    }

    $('#statusRelawan').on('change', (function() {
        var nilai = $(this).val();

        var form_relawan = '<div class="form-group"><label for="nama-relawan">Nama Lengkap (*)</label><input type="text" class="form-control fmkb-input" name="nama-relawan" val="" required="required"></div><div class="form-group"><label for="umur-relawan">Umur (*)</label><input type="number" class="form-control fmkb-input" name="umur-relawan" val="" required="required" min="9" step="1"></div><div class="form-group"><label for="kontak-relawan">Kontak (*)</label><input type="text" class="form-control fmkb-input" name="kontak-relawan" val="" required="required"></div><div class="form-group"><label for="email-relawan">Email (*)</label><input type="email" class="form-control fmkb-input" name="email-relawan" val="" required="required"></div>';

        var form_koordinator = '<div class="form-group"><label for="kode-koordinator">Kode Koordinator (*)</label><input type="text" class="form-control fmkb-input" name="kode-koordinator" val="" required="required"></div>';

        if(nilai == 'relawan') {
            $('#formRelawan').html('');
            $('#formRelawan').html(form_relawan);
        } else {
            $('#formRelawan').html('');
            $('#formRelawan').html(form_koordinator);
        }
    }))

    $('#registerVolunteer').on('submit', (function(e) {
        e.preventDefault();

        var url = $('#url').val();
		
		$('#registerVolunteer .modal-footer button').html('Tunggu ...');
		$('#registerVolunteer .modal-footer button').attr('disabled', 'disabled');
        
        $.ajax({
            method: 'POST',
            url: url,
            data: new FormData(this),
            processData: false,
            contentType: false,
            success: function(res) {
                if(res == '1') {
                    alert('Maaf, Anda tidak terdaftar sebagai koordinator.');
                } else if(res == '2') {
                    alert('Maaf, slot koordinator pada tanggal ini sudah penuh.');
                } else if(res == '3') {
                    alert('Maaf, slot relawan pada tanggal ini sudah penuh.');
                } else if(res == '4') {
                    alert('Maaf, setiap relawan hanya dapat mendaftar 2 kali per sesi.');
                } else if(res == '5') {
                    alert('Selamat, pendaftaran Anda berhasil. Tim Garda Pangan akan menghubungi Anda melalui telepon atau email.');
                    document.location.href = '';
                } else if(res == '6') {
                    alert('Anda sudah terdaftar pada tanggal ini.');
                } else if(res == '7') {
                    alert('Maaf, pendaftaran Anda gagal.');
                }
				
				$('#registerVolunteer .modal-footer button').html('Kirim');
				$('#registerVolunteer .modal-footer button').removeAttr('disabled');
            }
        })
    }))

    buyMerchandise = function(_this) {
        var paket = $(_this).data('paket'),
            catatan = $(_this).data('catatan'),
            kaos = $(_this).data('kaos');
        
        var ukuran = '<label for="ukuran-kaos">Pilih Ukuran (*)</label><select name="ukuran-kaos" class="form-control fmkb-input" autocomplete="off"><option value="S">S (P: 65 cm, L: 40 cm)</option><option value="M">M (P: 68 cm, L: 45 cm)</option><option value="L">L (P: 70 cm, L: 50 cm)</option><option value="XL">XL (P: 73 cm, L: 55 cm)</option><option value="XXL">XXL (P: 75 cm, L: 60 cm)</option></select>';
        
        $('#modalMerchandiseTitle').html('Beli ' + paket);
        $('#paket').val(paket);   
        $('#catatan').html(catatan);

        if(kaos == 'ya') {
            $('#ukuran').html(ukuran);
        } else {
            $('#ukuran').html('');
        }

        $('#modalMerchandise').modal('show');
    }

    $('#buyMerchandise').on('submit', (function(e) {
        e.preventDefault();

        var url = $('#url').val();
		
        $('#buyMerchandise .modal-footer button').html('Tunggu ...');
        $('#buyMerchandise .modal-footer button').attr('disabled', 'disabled');
        
        $.ajax({
            method: 'POST',
            url: url,
            data: new FormData(this),
            processData: false,
            contentType: false,
            success: function(res) {
                if(res == '1') {
                    alert('Pembelian merchandise Anda berhasil. Tim Garda Pangan akan menghubungi Anda melalui telepon atau email.');
                    document.location.href = '';
                } else if(res == '2') {
                    alert('Pembelian merchandise Anda gagal.');
                }
				
                $('#buyMerchandise .modal-footer button').html('Kirim');
                $('#buyMerchandise .modal-footer button').removeAttr('disabled');
            }
        })
    }))
})