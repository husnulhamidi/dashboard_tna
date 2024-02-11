$(document).ready(function(){
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