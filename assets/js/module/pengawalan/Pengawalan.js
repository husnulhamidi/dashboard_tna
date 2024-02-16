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
		table = '#table-verifikasi'
	}
	if(active_tab == 'selesai'){
		table = '#table-finish'
	}

	builTable(table);
	getDataDashboard();

	$('.submit-verifikasi').click(function(){
		submitVerifikasi()
	})
})

function builTable(table){
	if ($.fn.DataTable.isDataTable(table)) {
        $('#table-tna').DataTable().destroy();
    }
     oTable = $(table).DataTable({
        processing: true, 
        serverSide: true, 
        scrollX: true,
        order: [], 
        ajax: {
            url     : base_url+"tna/pengawalan/getData",
            type    : "get",
            datatype: "json",
            data    : function(d){
                // d.filter_subdit = $('#filter_subdit').val()
                // d.filter_kompetensi = $('#filter_kompetensi').val()
                // d.filter_jenis_development = $('#filter_jenis_development').val()
                // d.filter_nama_pelatihan = $('#filter_nama_pelatihan').val()
                // d.filter_justifikasi = $('#filter_justifikasi').val()
                // d.filter_metoda_pembelajaran = $('#filter_metoda_pembelajaran').val()
                // d.filter_biaya_min = $('#filter_biaya_min').val()
                // d.filter_biaya_max = $('#filter_biaya_max').val()
                // d.filter_penyelenggara = $('#filter_penyelenggara').val()
                // d.filter_karyawan = $('#filter_karyawan').val()
                // d.filter_status_karyawan = $('#filter_status_karyawan').val()

                // d.filter_waktu_awal = $('#filter_waktu_awal').val()
                // d.filter_waktu_akhir = $('#filter_waktu_akhir').val()

                console.log(d)
            }
                      
        },
        columns: [
            {
                "data": "id",
                "width": "80px",
                "orderable" : false,
                render: function (data, type, row, meta) {
                   var action = `
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Aksi
                                <span class="fa fa-caret-down"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="`+url_detail+data+'/riwayat_verifikasi'+`">Detail</a>
                                </li>
                                `;
                                if(row.urutan>1 && row.urutan<5){
                                	action += `
									<li>
                                    	<a 
                                            onclick="verifikasi('`+row.status+`',`+row.urutan+`,`+data+`,`+row.tahapan_id+`)"> Verifikasi
                                        </a>
                                	</li>
                                	`
                                }
                                if(row.urutan == 5){
                                	action += `
									<li>
                                        <a 
                                            onclick="konfirmasiJadwal()"> Konfirmasi Jadwal
                                        </a>
                                    </li>
                                	`
                                }
                                if(row.urutan == 6){
                                	action += `
									 <li>
                                        <a 
                                            onclick="paktaIntegritas()"> Pakta Integritas
                                        </a>
                                    </li>
                                	`
                                }
                                if(row.urutan == 7){
                                	action += `
									<li>
                                        <a 
                                            onclick="kelengkapanDokumen()"> Kelengkapan Dokumen
                                        </a>
                                    </li>
                                	`
                                }
                                if(row.urutan == 8){
                                	action += `
									<li>
                                        <a 
                                            onclick="notaDinasPenugasan()"> Nota Dinas Penugasan
                                        </a>
                                    </li>
                                	`
                                }
                                if(row.urutan == 9){
                                	action += `
									<li>
                                        <a 
                                            onclick="uploadSertifikat()"> Upload Sertifikat
                                        </a>
                                    </li>
                                	`
                                }
                                if(row.urutan == 10){
                                	action += `
									<li>
                                        <a 
                                           onclick="uploadMateri()"> Upload Materi
                                        </a>
                                    </li>
                                	`
                                }
                                 if(row.urutan == 11 || row.urutan == 11){
                                	action += `
                                    <li>
                                        <a 
                                            onclick="internalSharing()"> Jadwal Internal Sharing
                                        </a>
                                    </li>
                                    <li>
                                        <a 
                                           onclick="evaluasi()"> Evaluasi
                                        </a>
                                    </li>
                                	`
                                }
                                
                            `</ul>
                        </div>
                   `
                   return action
                }
            },

            {
            	"data": "status",
            	render:function(data, type, row, meta){
            		
            		var statusMapping = {
					    'Verifikasi Mgr.Lini': 'Menunggu Verifikasi Mgr.Lini',
					    'Verifikasi Manager HCPD': 'Menunggu Verifikasi Manager HCPD',
					    'Verifikasi AVP HCM': 'Menunggu Verifikasi AVP HCM',
					    'Form Pernyataan Peserta': 'Menunggu Form Pernyataan Peserta',
					    'Pembayaran' : 'Manunggu Pembayaran',
					    'Jadwal Pelaksanaan (Konfirmasi Kuota)' : 'Konfirmasi Kuota',
					    'Kelengkapan Dokumen' : 'Proses Kelengkapan Dokumen',
					    'Internal Sharing' : 'Menunggu Internal Sharing',
					    'Evaluasi' : 'Menunggu Penilaian Evaluasi Training'
					};

					var respon = statusMapping[data] || data;
					return row.tahapan_proses+'<br>'+respon
            	}
            },
            {"data": "id_tna"},
            {"data": "nama_karyawan"},
            {"data": "nama_organisasi"},
            {"data": "status_karyawan"},
            { "data": "kompetensi" },
            { "data": "jenis_development"},
            { "data": "pelatihan"},
            { "data": "justifikasi_pengajuan"},
            { "data": "metoda_pembelajaran"},
            { 
                "data": "estimasi_biaya",
                "class":"text-right",
                render:function(data,type,row, meta){
                    return formatRupiah(data,'Rp.')
                }
            },
            { "data": "nama_penyelenggara"},
            { 
                "data": "waktu_pelaksanaan",
                render:function(data, type, row, meta){
                    let date = '-'
                    if(data !== '0000-00-00'){
                        date = formatDate(data)
                    }
                    return date
                }
            },            
        ],
    });
}

function getDataDashboard(){
	$.ajax({
        type : "POST",
        url  : base_url+"tna/pengawalan/getDataDashboard",
        dataType: "JSON",
        success:function(resp){
            // console.log(resp)
            $('#verifMgrLini').text(resp.mgrLini)
            $('#verifMgrHCPD').text(resp.mgrHCPD)
            $('#verifAVPHCPD').text(resp.appHCM)
            $('#pernyataanFormPeserta').text(resp.pernyataan_peserta)
            $('#rekonfirmasiKuota').text(resp.rekomfirmasi_kuota)
            $('#kelengkapanDok').text(resp.kelengkapan_dokumen)
            // $('#verifMgrLini').text(resp.nota_dinas_penugasan)
            $('#pembayaran').text(resp.pembayaran)
            $('#sertifikat').text(resp.sertifikat)
            $('#materi').text(resp.materi)
            $('#jadwal').text(resp.internal_sharing)
            $('#evalusi').text(resp.evalusi)
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

function verifikasi(jabatan, idUrutan, id, tahapanId){
	// alert(jabatan)
	$('#labelJabatan').text(jabatan)
	$('#jabatan').val(jabatan)
	$('#urutan').val(idUrutan)
	$('#id').val(id)
	$('#tahapanId').val(tahapanId)
	$('#modalVerifikasi').modal('show')
}

function submitVerifikasi(){
	var value = $('input[name="verifikasi"]:checked').val();
	if(value == 'tidak' && $('#keterangan').val() == ''){
		$('#noteError').css('display', 'block');
	}else{
		$(".form-verifikasi").validate({
			rules: {
	            varifikasi: "required",
	        },
	        messages: {
	            varifikasi:{
	                required:"<i class='fa fa-times'></i> varifikasi wajib dipilih"
	            },            
	        },
	        highlight: function (element) {
	            $(element).parent().parent().addClass("has-error")
	            $(element).parent().addClass("has-error")
	        },
	        unhighlight: function (element) {
	            $(element).parent().removeClass("has-error")
	            $(element).parent().parent().removeClass("has-error")
	        },
	        submitHandler: function(form) {
				$.ajax({
			        url: base_url+"tna/pengawalan/verifikasi",
			        type: 'POST',
			        dataType: "JSON",
			        data: $('#form-verifikasi').serialize(),
			        success: function(response) {
			            console.log(response)
			            if(response.success){
			                setTimeout(function() {
			                    swal({
			                        title: "Notifikasi!",
			                        text: "Data berhasil diubah",
			                        imageUrl: img_icon_success
			                    }, function(d) {
			                        location.reload();
			                    });
			                }, 1000);
			            }else{
			                setTimeout(function() {
			                    swal({
			                        title: "Notifikasi!",
			                        text: "Data gagal diubah",
			                        imageUrl: img_icon_error
			                    }, function() {
			                        location.reload();
			                    });
			                }, 1000);
			            }
			            
			        }            
			    });
	        }
		});
	}
	
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