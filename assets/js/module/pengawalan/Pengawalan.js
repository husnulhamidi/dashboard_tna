$(document).ready(function(){
	$('.waktu_pelaksanaan').daterangepicker();
	$('#tgl').datepicker();
	$('.tgl').datepicker();

	const active_tab = $('#active_tab').val()
	var table;
    var tabs;
	if(active_tab == 'all'){
        tabs = 'all';
		table = '#table-pengawalan'
	}
	if(active_tab == 'verifikasi'){
        tabs = 'varifikasi';
		table = '#table-verifikasi'
	}
	if(active_tab == 'selesai'){
        tabs = 'finish';
		table = '#table-finish'
	}
    if(active_tab == 'evaluasi'){
        tabs = 'evaluasi';
		table = '#table-evaluasi'
	}

	builTable(table,tabs);
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

    $('.submit-evaluasi').click(function(){
        submitEvaluasi()
    })

    $('.btn-filter').click(function(){
        $('#modalFilter').modal('hide')
        builTable(table,tabs)
    })

    $('.btn-reset').click(function(){
        // location.reload();
        $("#form-filter").get(0).reset() 
        $("#form-filter .select2").trigger('change')
        builTable(table,tabs)
    })

    $('#btnExport').click(function(){
        exportData()
    }) 
    
    $('#btnEvaluasi').click(function(){
        evaluasiData()
    })
})

function builTable(table, tabs) {
    if ($.fn.DataTable.isDataTable(table)) {
        $(table).DataTable().destroy();
    }
    
    var columns = [
        {
            "data": "id",
            "width": "80px",
            "orderable" : false,
            render: function (data, type, row, meta) {
                var params = `${data},${row.tahapan_id},${row.urutan},'${row.nama_karyawan}','${row.nama_penyelenggara}','${row.pelatihan}','${row.nik_tg}','${row.nama_organisasi}','${row.estimasi_biaya}'`;
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
                            if(row.urutan > 1 && row.urutan < 5){
                                action += `
                                <li>
                                    <a 
                                        onclick="verifikasi('`+row.status+`',`+row.urutan+`,`+data+`,`+row.tahapan_id+`)"> Verifikasi
                                    </a>
                                </li>
                                `;
                            }
                            if(row.urutan == 5){
                                action += `
                                 <li>
                                    <a 
                                        onclick="paktaIntegritas(`+params+`)"> Pakta Integritas
                                    </a>
                                </li>
                                `;
                            }
                            if(row.urutan == 6){
                                action += `
                                <li>
                                    <a 
                                        onclick="konfirmasiJadwal(`+params+`)"> Konfirmasi Jadwal
                                    </a>
                                </li>
                                `;
                            }
                            if(row.urutan == 7){
                                action += `
                                <li>
                                    <a 
                                        onclick="kelengkapanDokumen(`+params+`)"> Kelengkapan Dokumen
                                    </a>
                                </li>
                                `;
                            }
                            if(row.urutan == 8){
                                action += `
                                <li>
                                    <a 
                                        onclick="notaDinasPenugasan(`+params+`)"> Nota Dinas Penugasan
                                    </a>
                                </li>
                                `;
                            }
                            if(row.urutan == 9){
                                action += `
                                <li>
                                    <a 
                                        onclick="uploadPembayaran(`+params+`)"> Pembayaran
                                    </a>
                                </li>
                                `;
                            }
                            if(row.urutan == 10){
                                action += `
                                <li>
                                    <a 
                                        onclick="uploadSertifikat(`+params+`)"> Upload Sertifikat
                                    </a>
                                </li>
                                `;
                            }
                            if(row.urutan == 11){
                                action += `
                                <li>
                                    <a 
                                       onclick="uploadMateri(`+params+`)"> Upload Materi
                                    </a>
                                </li>
                                `;
                            }
                            if(row.urutan == 12 || row.urutan == 13 || row.urutan == 14){
                                if(row.internal_sharing == null){
                                    action += `
                                        <li>
                                            <a 
                                                onclick="internalSharing(`+params+`,`+row.id_karyawan+`,`+row.id_organisasi+`)"> Jadwal Internal Sharing
                                            </a>
                                        </li>`;
                                }
                                
                                if(row.is_evaluasi == 0){
                                    if(tabs != 'evaluasi'){
                                        action += `<li>
                                            <a 
                                            onclick="evaluasi(`+params+`,`+row.is_complete+`,'`+row.waktu_pelaksanaan+`')"> Evaluasi
                                            </a>
                                        </li>` ;
                                    }
                                   
                                }
                            }

                            // if (tabs == 'evaluasi') {
                            //     if(row.is_submit_evaluasi == 1){
                            //         action += `-`;
                            //     }else{
                            //         action += `<input type="checkbox" value=`+data+` name="checkbox-evalusi[]" id="checkbox">`;
                            //     }

                            // }

                            
                            action += `
                        </ul>
                    </div>
               `;
                if (tabs == 'evaluasi') {
                    if(row.is_submit_evaluasi == 1){
                        action += `-`;
                    }else{
                        action += `<input style="margin-top:20px;margin-left:20px" type="checkbox" value=`+data+` name="checkbox-evalusi[]" id="checkbox">`;
                    }

                }

               return action;
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
                return row.tahapan_proses+'<br>'+respon;
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
                return formatRupiah(data,'Rp.');
            }
        },
        { "data": "nama_penyelenggara"},
        { 
            "data": "waktu_pelaksanaan_mulai",
            render:function(data, type, row, meta){
                let date = '-';
                if(data !== '0000-00-00'){
                    date = formatDate(data);
                }
                return date + ' s/d ' + formatDate(row.waktu_pelaksanaan_selesai);
            }
        },            
    ];
    
    // if (tabs == 'evaluasi') {
    //     columns.splice(1, 0, {
    //         "data": "id",
    //         "class":'text-center',
    //         "orderable" : false,
    //         render:function(data, type, row, meta){
    //             let checkbox = `<input type="checkbox" value=`+data+` name="checkbox-evalusi[]" id="checkbox">`
    //             if(row.is_submit_evaluasi == 1){
    //                 checkbox = `-`
    //             }
    //             return checkbox
    //         }
    //     });
    // }
    
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
                d.tabs = tabs;
                d.filter_peserta = $('#filter_peserta').val();
                d.filter_unit = $('#filter_unit').val();
                d.filter_pelatihan = $('#filter_pelatihan').val();
                d.filter_penyelenggara = $('#filter_penyelenggara').val();
                d.filter_kompetensi = $('#filter_kompetensi').val();
                d.filter_development = $('#filter_development').val();
                d.filter_pembelajaran = $('#filter_pembelajaran').val();
                d.filter_biaya_min = $('#filter_biaya_min').val();
                d.filter_biaya_max = $('#filter_biaya_max').val();
                d.filter_tgl_mulai = $('#filter_tgl_mulai').val();
                d.filter_tgl_selesai = $('#filter_tgl_selesai').val();
                d.filter_tahapan = $('#filter_tahapan').val();
                console.log(d);
            }
        },
        columns: columns
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
            $('#selesai').text(resp.selesai)
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
            waktu_pelaksanaan_awal: "required",
            waktu_pelaksanaan_akhir: "required",
        },
        messages: {
            waktu_pelaksanaan_awal:{
                required:"<i class='fa fa-times'></i> Waktu Pelaksanaan Wajib diisi"
            },  
            waktu_pelaksanaan_akhir:{
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
        rules: {
            nilai: "required",
            tgl: "required",
            mata_anggaran: "required",
            unit: "required",
            biayasppdp: "required",
        },
        messages: {
            nilai:{
                required:"<i class='fa fa-times'></i> Nilai pembayaran wajib diisi"
            }, 
            tgl:{
                required:"<i class='fa fa-times'></i> Tanggal pembayaran wajib diisi"
            }, 
            mata_anggaran:{
                required:"<i class='fa fa-times'></i> Mata anggaran rilis wajib diisi"
            }, 
            
            unit:{
                required:"<i class='fa fa-times'></i> Unit wajib diisi"
            },
            biayasppdp:{
                required:"<i class='fa fa-times'></i> Pilihan biaya sppdp wajib diisi"
            },            
        },
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
        // rules: {
        //     nama_dokumen: "required",
        // },
        // messages: {
        //     nama_dokumen:{
        //         required:"<i class='fa fa-times'></i> Nama dokumen wajib diisi"
        //     }          
        // },
        // highlight: function (element) {
        //     $(element).parent().parent().addClass("has-error")
        //     $(element).parent().addClass("has-error")
        // },
        // unhighlight: function (element) {
        //     $(element).parent().removeClass("has-error")
        //     $(element).parent().parent().removeClass("has-error")
        // },
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
    $('#judul').val(pelatihan)
    $('#direktorat').val(id_organisasi)
    $('#pemateri').val(id_karyawan)
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


function evaluasi(id,tahapanId,urutanId,namaKaryawan, penyelenggara, pelatihan, nik,unit, estimasi_biaya,is_complete,waktu_pelaksanaan){
    getDataEvaluasi()
    $('#evaluasi_id').val(id)
    $('#evaluasi_urutanId').val(urutanId)
    $('#evaluasi_tahapanId').val(tahapanId)
    $('#evaluasi_isComplete').val(is_complete)
    $('#evaluasi_nik').text(nik)
    $('#evaluasi_nama').text(namaKaryawan)
    $('#evaluasi_penyelenggara').text(penyelenggara)
    $('#evaluasi_pelatihan').text(pelatihan)
    $('#evaluasi_unit').text(unit)
    $('#evaluasi_tanggal').text(formatDate(waktu_pelaksanaan))
    $('#evaluasi_materi').text('-')
	$('#modalEvaluasi').modal('show')
}

function getDataEvaluasi(){
    $('#body-tbl-evaluasi').empty()
    $.ajax({
        type : "POST",
        url  : base_url+"tna/pengawalan/getDataEvaluasi",
        dataType: "JSON",
        success:function(resp){
            if(resp.length > 0){
                $('#jumlah_pertanyaan').val(resp.length)
                var tmpGroup = '';
                var number = 0;
                resp.forEach((element, index) => {
                    var group = element.group;
                    if(tmpGroup != group){
                        number++;
                        var htmlGroup = `
                            <tr>
                                <td rowspan="2" class="text-center" style="vertical-align: middle">${number}</td>
                                <td><b>${group}</b></td>
                                <td rowspan="2" class="text-center" style="vertical-align: middle"> <input type="radio" name="radio_${element.id}" value="${element.nilai_skor1}">
                                </td>
                                <td rowspan="2" class="text-center" style="vertical-align: middle"><input type="radio" name="radio_${element.id}" value="${element.nilai_skor2}"></td>
                                <td rowspan="2" class="text-center" style="vertical-align: middle"><input type="radio" name="radio_${element.id}" value="${element.nilai_skor3}"></td>
                                <td rowspan="2" class="text-center" style="vertical-align: middle"><input type="radio" name="radio_${element.id}" value="${element.nilai_skor4}"></td>
                                <td rowspan="2" class="text-center" style="vertical-align: middle"><input type="radio" name="radio_${element.id}" value="${element.nilai_skor5}"></td>
                            </tr>
                            <tr>
                                <td>
                                    - ${element.pertanyaan}
                                    <input type="hidden" value="${element.pertanyaan}" name="pertanyaan[]">
                                </td>
                            </tr>
                        `;
                        tmpGroup = group;
                        $('#body-tbl-evaluasi').append(htmlGroup);
                    } else {
                        var htmlSubGroup = `
                            <tr>
                                <td></td>
                                <td>
                                    - ${element.pertanyaan}
                                    <input type="hidden" value="${element.pertanyaan}" name="pertanyaan[]">
                                </td>
                                <td class="text-center" style="vertical-align: middle"><input type="radio" name="radio_${element.id}" value="${element.nilai_skor1}"></td>
                                <td class="text-center" style="vertical-align: middle"><input type="radio" name="radio_${element.id}" value="${element.nilai_skor2}"></td>
                                <td class="text-center" style="vertical-align: middle"><input type="radio" name="radio_${element.id}" value="${element.nilai_skor3}"></td>
                                <td class="text-center" style="vertical-align: middle"><input type="radio" name="radio_${element.id}" value="${element.nilai_skor4}"></td>
                                <td class="text-center" style="vertical-align: middle"><input type="radio" name="radio_${element.id}" value="${element.nilai_skor5}"></td>
                                
                            </tr>
                        `;
                        $('#body-tbl-evaluasi').append(htmlSubGroup);
                    }
                });
                
                var footer = `
                    <b>
                        Catatan :
                                ${resp[0].nilai_skor1} = Sangat Baik; 
                                ${resp[0].nilai_skor2} = Baik; 
                                ${resp[0].nilai_skor3} = Cukup; 
                                ${resp[0].nilai_skor4} = Kurang; 
                                ${resp[0].nilai_skor5} = Kurang Sekali;
                    </b>
                `
                $('#catatan').append(footer)
                $('input[type=radio]').change(function () {
                    hitungHasilSementara();
                });
            }
        },
    });
}

function hitungHasilSementara() {
    var totalNilai = 0;
    $('input[type=radio]:checked').each(function () {
        totalNilai += parseInt($(this).val());
    });
    let grade = getGrade(totalNilai)
    console.log(grade)
    $('#hasilSementara').text(totalNilai + ' Point (' + grade + ')');
}

function getGrade(nilai){
    var grade = 'Kurang';
    if(nilai >= 16 && nilai <= 25) grade = 'Baik';
    if(nilai >= 10 && nilai <= 15) grade = 'Cukup';

    return grade;
}

function submitEvaluasi(){
    $.ajax({
        url: base_url+"tna/pengawalan/evaluasi",
        type: 'POST',
        dataType: "JSON",
        data: $('#form-evaluasi').serialize(),
        success: function(response) {
            console.log(response);
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

function exportData(){
    var formData = $('#form-filter').serialize();
    $.ajax({
        url     : base_url+"tna/pengawalan/exportExcel",
        method: 'post',
        data: formData, 
        success: function(response){
            console.log(response)
            var url = window.URL.createObjectURL(new Blob([response]));
    
            // Membuat elemen a untuk tautan unduhan
            var a = document.createElement('a');
            a.href = url;
            a.download = 'daftar_list_pengawalan.xls'; // Atur nama file yang diinginkan
            document.body.appendChild(a);
            a.click();

            // Menghapus URL objek setelah tautan unduhan diklik
            window.URL.revokeObjectURL(url);
        },
        error: function(xhr, status, error) {
            console.log(error)
            console.error(xhr.responseText); // Tampilkan pesan kesalahan dalam konsol
        }
    });
}

function evaluasiData(){
    var checkboxes = $('input[name="checkbox-evalusi[]"]:checked');
    var selectedIds = checkboxes.map(function(){
        return this.value;
    }).get();

   
    if(selectedIds.length === 0){
        swal("Peringatan", "Pilih setidaknya satu data untuk dievaluasi.", "warning");
        return;
    }

    swal({
        title: "Yakin mau kirim pengawalan ini ke atasan yang bersangkutan?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Ya, kirim!",
        closeOnConfirm: false
    }, function () {
        $.ajax({
            type : "POST",
            url  : base_url + "tna/pengawalan/submit_evaluasi",
            dataType: "JSON",
            data : {selectedIds: selectedIds}, // Mengirim data sebagai array
            success:function(resp){
                if(resp.success){
                    setTimeout(function() {
                        swal({
                            title: "Notifikasi!",
                            text: "Data berhasil diubah",
                            imageUrl: img_icon_success
                        }, function(d) {
                            sendEmail(selectedIds)
                            // location.reload();
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
    });
}

function sendEmail(selectedIds){
    $.ajax({
        type : "POST",
        url  : base_url + "tna/pengawalan/send_email",
        dataType: "JSON",
        data : {selectedIds: selectedIds},
        success:function(resp){
            console.log(resp)
        }
    });
}

