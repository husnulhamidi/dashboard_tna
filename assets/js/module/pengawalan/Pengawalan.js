$(document).ready(function(){
	$('#waktu_pelaksanaan').daterangepicker();
	$('#tgl').datepicker();
	$('.tgl').datepicker();
	const active_tab = $('#active_tab').val()
	var table;
	if(active_tab == 'all'){
		table = '#table-pengawalan'
	}
	if(active_tab == 'verifikasi'){
		table = '#table-cerifikasi'
	}
	if(active_tab == 'selesai'){
		table = '#table-finish'
	}
	
	
	$(table).dataTable({
		"scrollX":true
	})

	$('#rekonfirmasiPeserta').attr('checked', true)
	$('#verifikasiMgrLini').attr('checked', true)
	$('#verifikasiMgrHCPD').attr('checked', true)
})

function verifikasi(jabatan){
	// alert(jabatan)
	$('#labelJabatan').text(jabatan)
	$('#jabatan').val(jabatan)
	$('#modalVerifikasi').modal('show')
}

function konfirmasiJadwal(){
	$('#modalConfirm').modal('show')
}

function kelengkapanDokumen(){
	$('#modalKelengkapanDokumen').modal('show')
}

function paktaIntegritas(){
	$('#modalPaktaIntegrias').modal('show')
}

function notaDinasPenugasan(){
	$('#modalNotaDinasPenugasan').modal('show')
}

function uploadPembayaran(){
	$('#modalUploadPembayaran').modal('show')
}

function showFormSPDP(ket){
	if(ket == 'ya'){
		if(!$('#modalFormSPPDP').is(':visible')){
			$('#modalFormSPPDP').modal('show')
		}
		
	}else{
		$('#modalFormSPPDP').modal('hide')
	}
}

function uploadSertifikat(){
	$('#modalUploadSertifikat').modal('show')
}

function uploadMateri(){
	$('#modalUploadMateri').modal('show')
}

function evaluasi(){
	$('#modalEvaluasi').modal('show')
}

function internalSharing(){
	$('#modalInternalSharing').modal('show')
}