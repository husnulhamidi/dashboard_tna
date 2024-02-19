$(document).ready(function(){
	$('.waktu_pelaksanaan').daterangepicker();
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

	$('.submit-confirm-schedule').click(function(){
		submitConfirmSchedule()
	})

	$('.submit-pakta-integritas').click(function(){
		submitPaktaIntegritas();
	})

	$('.submit-kelengkapan-dokumen').click(function(){
		submitKelengkapanDokumen();
	})

	$('.submit-nota-dinas').click(function(){
		submitNotaDinas()
	})

	$('.submit-pembayaran').click(function(){
		submitPembayaran()
	})

    $('.submit-upload_sertifikat').click(function(){
        submitUploadSerifikat();
    })

    $('.submit-upload-materi').click(function(){
         submitUploadMateri()
    })

    $('.submit-internal-sharing').click(function(){
        submitInterlSharing()
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
                    var params = `${data},${row.tahapan_id},${row.urutan},'${row.nama_karyawan}','${row.nama_penyelenggara}','${row.pelatihan}','${row.nik_tg}','${row.nama_organisasi}','${row.estimasi_biaya}'`;
                    // console.log(params)
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
                                            onclick="paktaIntegritas(`+params+`)"> Pakta Integritas
                                        </a>
                                    </li>
                                	`
                                }
                                if(row.urutan == 6){
                                	action += `
									<li>
                                        <a 
                                            onclick="konfirmasiJadwal(`+params+`)"> Konfirmasi Jadwal
                                        </a>
                                    </li>
                                	`
                                }
                                if(row.urutan == 7){
                                	action += `
									<li>
                                        <a 
                                            onclick="kelengkapanDokumen(`+params+`)"> Kelengkapan Dokumen
                                        </a>
                                    </li>
                                	`
                                }
                                if(row.urutan == 8){
                                	action += `
									<li>
                                        <a 
                                            onclick="notaDinasPenugasan(`+params+`)"> Nota Dinas Penugasan
                                        </a>
                                    </li>
                                	`
                                }
                                if(row.urutan == 9){
                                	action += `
									<li>
                                        <a 
                                            onclick="uploadPembayaran(`+params+`)"> Pembayaran
                                        </a>
                                    </li>
                                	`
                                }
                                if(row.urutan == 10){
                                	action += `
									<li>
                                        <a 
                                            onclick="uploadSertifikat(`+params+`)"> Upload Sertifikat
                                        </a>
                                    </li>
                                	`
                                }
                                if(row.urutan == 11){
                                	action += `
									<li>
                                        <a 
                                           onclick="uploadMateri(`+params+`)"> Upload Materi
                                        </a>
                                    </li>
                                	`
                                }
                                 if(row.urutan == 12 || row.urutan == 13 || row.urutan == 14){
                                	action += `
                                    <li>
                                        <a 
                                            onclick="internalSharing(`+params+`,`+row.id_karyawan+`,`+row.id_organisasi+`)"> Jadwal Internal Sharing
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
            $('#notaDinas').text(resp.nota_dinas_penugasan)
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

// ================================ VERIFIKASI ========================================
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

// ================================ PAKTA INTEGRITAS ====================================
function paktaIntegritas(id,tahapanId,urutanId,namaKaryawan, penyelenggara, pelatihan, nik,unit, estimasi_biaya){
	$('#idPaktaIntegritas').val(id)
	$('#tahapanIdPaktaIntegritas').val(tahapanId)
	$('#urutanIdPaktaIntegritas').val(urutanId)
	$('#namaKaryawanPaktaIntegritas').text(namaKaryawan)
	$('#penyelenggaraPaktaIntegritas').text(penyelenggara)
	$('#pelatihanPaktaIntegritas').text(pelatihan)
	$('#nikPaktaIntegritas').text(nik)
	$('#organisasiPaktaIntegritas').text(unit)
	$('#modalPaktaIntegrias').modal('show')
}

function submitPaktaIntegritas(){
	console.log($('#form-pakta-integritas').serialize())
	$(".form-pakta-integritas").validate({
		rules: {
            fileName: "required",
        },
        messages: {
            fileName:{
                required:"<i class='fa fa-times'></i> File Wajib diisi"
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
		        url: base_url+"tna/pengawalan/pakta_integritas",
		        type: 'POST',
		        data: new FormData($("#form-pakta-integritas")[0]),
                contentType: false,
                cache: false,
                processData:false,
		        success: function(response) {
		        	var newResponse = JSON.parse(response);
		            if(newResponse.success){
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
		                        text: newResponse.msg,
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

// ================================ KONFIRMASI JADWAL ====================================
function konfirmasiJadwal(id,tahapanId,urutanId,namaKaryawan, penyelenggara, pelatihan, nik,unit, estimasi_biaya){
	$('#idKonfirmasi').val(id)
	$('#tahapanIdKonfirmasi').val(tahapanId)
	$('#urutanId').val(urutanId)
	$('#namaKaryawan').text(namaKaryawan)
	$('#penyelenggara').text(penyelenggara)
	$('#pelatihan').text(pelatihan)
	$('#nik').text(nik)
	$('#modalConfirm').modal('show')
}

function submitConfirmSchedule(){
	$(".form-confirm-schedule").validate({
		rules: {
            waktu_pelaksanaan: "required",
        },
        messages: {
            waktu_pelaksanaan:{
                required:"<i class='fa fa-times'></i> Waktu Pelaksanaan Wajib diisi"
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
		        url: base_url+"tna/pengawalan/konfirmasi_jadwal",
		        type: 'POST',
		        dataType: "JSON",
		        data: $('#form-confirm-schedule').serialize(),
		        success: function(response) {
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

// ================================ KELENGKAPAN DOKUMEN ====================================
function kelengkapanDokumen(id,tahapanId,urutanId,namaKaryawan, penyelenggara, pelatihan, nik,unit, estimasi_biaya){
	$('#dokumenId').val(id)
	$('#tahapanIdDokumen').val(tahapanId)
	$('#urutanIdDokumen').val(urutanId)
	$('#dokumen_nik').text(nik)
	$('#dokumen_nama').text(namaKaryawan)
	$('#dokumen_penyelenggara').text(penyelenggara)
	$('#dokumen_unit').text(unit)
	$('#dokumen_pelatihan').text(pelatihan)
	$('#modalKelengkapanDokumen').modal('show')
}

function submitKelengkapanDokumen(){
	$(".form-kelengkapan-dokumen").validate({
		// rules: {
  //           waktu_pelaksanaan: "required",
  //       },
  //       messages: {
  //           waktu_pelaksanaan:{
  //               required:"<i class='fa fa-times'></i> Waktu Pelaksanaan Wajib diisi"
  //           },            
  //       },
  //       highlight: function (element) {
  //           $(element).parent().parent().addClass("has-error")
  //           $(element).parent().addClass("has-error")
  //       },
  //       unhighlight: function (element) {
  //           $(element).parent().removeClass("has-error")
  //           $(element).parent().parent().removeClass("has-error")
  //       },
        submitHandler: function(form) {
			$.ajax({
		        url: base_url+"tna/pengawalan/kelengkapan_dokumen",
		        type: 'POST',
		        data: new FormData($("#form-kelengkapan-dokumen")[0]),
                contentType: false,
                cache: false,
                processData:false,
		        success: function(response) {
		        	console.log(response)
		        	var newResponse = JSON.parse(response);
		        	console.log(newResponse)
		            if(newResponse.success){
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
		                        text: newResponse.msg,
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


// ================================ NOTA DINAS PENUGASAN ==================================
function notaDinasPenugasan(id,tahapanId,urutanId,namaKaryawan, penyelenggara, pelatihan, nik,unit, estimasi_biaya){
	$('#notaDinasId').val(id)
	$('#notaDinasTahapanId').val(tahapanId)
	$('#notaDinasUrutanId').val(urutanId)
	$('#modalNotaDinasPenugasan').modal('show')
}

function submitNotaDinas(){
	$(".form-nota-dinas").validate({
        rules: {
            no_nde: "required",
            perihal: "required",
            tgl_rilis: "required",
            disetujui_oleh: "required",
            keterangan: "required",
        },
        messages: {
            no_nde:{
                required:"<i class='fa fa-times'></i> No NDE wajib diisi"
            }, 
            perihal:{
                required:"<i class='fa fa-times'></i> Perihal wajib diisi"
            }, 
            tgl_rilis:{
                required:"<i class='fa fa-times'></i> Tanggal rilis wajib diisi"
            }, 
            disetujui_oleh:{
                required:"<i class='fa fa-times'></i> Disetujui oleh wajib diisi"
            }, 
            keterangan:{
                required:"<i class='fa fa-times'></i> keterangan wajib diisi"
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
		        url: base_url+"tna/pengawalan/nota_dinas",
		        type: 'POST',
		        data: new FormData($("#form-nota-dinas")[0]),
                contentType: false,
                cache: false,
                processData:false,
		        success: function(response) {
		        	console.log(response)
		        	var newResponse = JSON.parse(response);
		        	console.log(newResponse)
		            if(newResponse.success){
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
		                        text: newResponse.msg,
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

// ================================ FORM PEMBAYARAN ========================================
function uploadPembayaran(id,tahapanId,urutanId,namaKaryawan, penyelenggara, pelatihan, nik,unit, estimasi_biaya){
	$('#pembayaranId').val(id)
	$('#pembayaranTahapanId').val(tahapanId)
	$('#pembayaranUrutanId').val(urutanId)
	$('#pembayaran_nama').text(namaKaryawan)
	$('#pembayaran_penyelenggara').text(penyelenggara)
	$('#pembayaran_pelatihan').text(pelatihan)
	$('#pembayaran_biaya').text(formatRupiah(estimasi_biaya, 'Rp'))

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

function submitPembayaran(){
	$(".form-pembayaran").validate({
        submitHandler: function(form) {
            const formData = new FormData();
            const pembayaranFormData = new FormData($("#form-pembayaran")[0]);
            for (const [key, value] of pembayaranFormData.entries()) {
                formData.append(key, value);
            }
            const sppdpSerializedData = $('#form-sppdp').serialize();
            formData.append('sppdp', sppdpSerializedData);
			$.ajax({
		        url: base_url+"tna/pengawalan/pembayaran",
		        type: 'POST',
		        data: formData,
                contentType: false,
                cache: false,
                processData:false,
		        success: function(response) {
		        	console.log(response)
		        	var newResponse = JSON.parse(response);
		        	console.log(newResponse)
		            if(newResponse.success){
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
		                        text: newResponse.msg,
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

// ================================ UPLOAD SERTIFIKAT ========================================
function uploadSertifikat(id,tahapanId,urutanId,namaKaryawan, penyelenggara, pelatihan, nik,unit, estimasi_biaya){
	$('#sertifikat_id').val(id)
    $('#sertifikat_urutanId').val(urutanId)
    $('#sertifikat_tahapanId').val(tahapanId)
    $('#sertifikat_nik').text(nik)
    $('#sertifikat_nama').text(namaKaryawan)
    $('#sertifikat_penyelenggara').text(penyelenggara)
    $('#sertifikat_pelatihan').text(pelatihan)
    $('#sertifikat_unit').text(unit)
    $('#modalUploadSertifikat').modal('show')
}

function submitUploadSerifikat(){
    $(".form-upload_sertifikat").validate({
        rules: {
            nomor_serifikat: "required",
            masa_berlaku_awal: "required",
            masa_berlaku_akhir: "required",
        },
        messages: {
            nomor_serifikat:{
                required:"<i class='fa fa-times'></i> Nomor sertifikat wajib diisi"
            },  
            masa_berlaku_awal:{
                required:"<i class='fa fa-times'></i> Masa berlaku wajib diisi"
            },  
            masa_berlaku_akhir:{
                required:"<i class='fa fa-times'></i>  Masa berlaku wajib diisi"
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
                url: base_url+"tna/pengawalan/upload_serifikat",
                type: 'POST',
                data: new FormData($("#form-upload_sertifikat")[0]),
                contentType: false,
                cache: false,
                processData:false,
                success: function(response) {
                    console.log(response)
                    var newResponse = JSON.parse(response);
                    console.log(newResponse)
                    if(newResponse.success){
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
                                text: newResponse.msg,
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

// ================================ UPLOAD MATERI ========================================
function uploadMateri(id,tahapanId,urutanId,namaKaryawan, penyelenggara, pelatihan, nik,unit, estimasi_biaya){
	$('#materi_id').val(id)
    $('#materi_urutanId').val(urutanId)
    $('#materi_tahapanId').val(tahapanId)
    $('#materi_nik').text(nik)
    $('#materi_nama').text(namaKaryawan)
    $('#materi_penyelenggara').text(penyelenggara)
    $('#materi_pelatihan').text(pelatihan)
    $('#materi_unit').text(unit)
    $('#modalUploadMateri').modal('show')
}

function submitUploadMateri(){
    $(".form-upload-materi").validate({
        rules: {
            nama_dokumen: "required",
        },
        messages: {
            nama_dokumen:{
                required:"<i class='fa fa-times'></i> Nama dokumen wajib diisi"
            }          
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
                url: base_url+"tna/pengawalan/upload_materi",
                type: 'POST',
                data: new FormData($("#form-upload-materi")[0]),
                contentType: false,
                cache: false,
                processData:false,
                success: function(response) {
                    console.log(response)
                    var newResponse = JSON.parse(response);
                    console.log(newResponse)
                    if(newResponse.success){
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
                                text: newResponse.msg,
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

// ================================ INTERNAL SHARING ====================================
function internalSharing(id,tahapanId,urutanId,namaKaryawan, penyelenggara, pelatihan, nik,unit, estimasi_biaya,id_karyawan, id_organisasi){
    $('#internal_sharing_id').val(id)
    $('#internal_sharing_urutanId').val(urutanId)
    $('#internal_sharing_tahapanId').val(tahapanId)
    $('#internal_sharing_nik').text(nik)
    $('#internal_sharing_nama').text(namaKaryawan)
    $('#internal_sharing_penyelenggara').text(penyelenggara)
    $('#internal_sharing_pelatihan').text(pelatihan)
    $('#judul').text(pelatihan)
    $('#direktorat').text(id_organisasi)
    $('#pemateri').text(id_karyawan)
    $('#internal_sharing_unit').text(unit)
    $('#modalInternalSharing').modal('show')
}

function submitInterlSharing(){
    $(".form-internal-sharing").validate({
        rules: {
            tgl: "required",
            waktu: "required",
            tempat: "required",
            biaya: "required",
            kuota: "required",
        },
        messages: {
            tgl:{
                required:"<i class='fa fa-times'></i> Tanggal wajib dipilih"
            },
            waktu:{
                required:"<i class='fa fa-times'></i> Waktu wajib dipilih"
            },
            tempat:{
                required:"<i class='fa fa-times'></i> Tempat wajib dipilih"
            },
            biaya:{
                required:"<i class='fa fa-times'></i> Biaya wajib dipilih"
            },
            kuota:{
                required:"<i class='fa fa-times'></i> Kuota wajib dipilih"
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
                url: base_url+"tna/pengawalan/internal_sharing",
                type: 'POST',
                dataType: "JSON",
                data: $('#form-internal-sharing').serialize(),
                success: function(response) {
                    
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


function evaluasi(){
	$('#modalEvaluasi').modal('show')
}

