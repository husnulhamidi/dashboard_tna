$(document).ready(function(){
    getDataDashboad()
    $( ".btn-flat" ).on( "click", function() {
        getDataDashboad()
    })
})

function getDataDashboad() {
    var thn = $('#filter_year').val();
    var quartal = $('#filter_quartal').val()
    console.log(thn, quartal)
	$.ajax({
        type : "POST",
        url  : base_url+"tna/home/getCountDashboard",
        data:{
                thn:thn,
                quartal:quartal
            },
        dataType: "JSON",
        success:function(resp){
            console.log(resp)
            $('#pelatihan').text(resp.Pelatihan.pelatihan ? formatRupiah(resp.Pelatihan.pelatihan) : resp.Pelatihan.pelatihan)
            $('#peserta_pelatihan').text(resp.Pelatihan.peserta ? formatRupiah(resp.Pelatihan.peserta) : resp.Pelatihan.peserta)
            $('#peserta_pelatihan_fte').text(resp.Pelatihan.status_fte ? formatRupiah(resp.Pelatihan.status_fte) : resp.Pelatihan.status_fte)
            $('#peserta_pelatihan_non_fte').text(resp.Pelatihan.status_non_fte ? formatRupiah(resp.Pelatihan.status_non_fte) : resp.Pelatihan.status_non_fte)
            $('#peserta_pelatihan_tba').text(0)

            $('#sertifikasi').text(resp.Sertifikasi.pelatihan ? formatRupiah(resp.Sertifikasi.sertifikasi) : resp.Sertifikasi.sertifikasi)
            $('#peserta_sertifikasi').text(resp.Sertifikasi.peserta ? formatRupiah(resp.Sertifikasi.peserta) : resp.Sertifikasi.peserta)
            $('#peserta_sertifikasi_fte').text(resp.Sertifikasi.status_fte ? formatRupiah(resp.Sertifikasi.status_fte) : resp.Sertifikasi.status_fte)
            $('#peserta_sertifikasi_non_fte').text(resp.Sertifikasi.status_non_fte ? formatRupiah(resp.Sertifikasi.status_non_fte) : resp.Sertifikasi.status_non_fte)
            $('#peserta_sertifikasi_tba').text(0)

            $('#internal_sharing').text(resp.internal_sharing.rencana ? formatRupiah(resp.internal_sharing.rencana) : resp.internal_sharing.rencana)
            $('#internal_sharing_rencana').text(resp.internal_sharing.rencana ? formatRupiah(resp.internal_sharing.rencana) : resp.internal_sharing.rencana)
            $('#internal_sharing_realisasi').text(resp.internal_sharing.realisasi ? formatRupiah(resp.internal_sharing.realisasi) : resp.internal_sharing.realisasi)
            $('#internal_sharing_todo').text(resp.internal_sharing.todo ? formatRupiah(resp.internal_sharing.todo) : resp.internal_sharing.todo)
           
            
           
        },
        complete: function (data) {
            $('.count').each(function () {
			    $(this).prop('Counter', 0).animate({
			        Counter: $(this).text()
			    }, {
			        duration: 1000,
			        easing: 'swing',
			        step: function (now) {
			            $(this).text(nominalAngka(Math.ceil(now)));
			        }
			    });
			});
        }
    });
} 