jQuery(document).ready(function() {
	const id = $('#id').val();
	getMateriSharing(id)
	getDokumentasiSharing(id)
	getCountDocument(id);
    getPeserta(id);
	$('#btnAddMateri').click(function(){
		$('#label').text('Form Tambah Materi')
		$('#modalTambahMateri').modal('show')
	})

	$('.submit-tambah-materi').click(function(){
		submitAddMateri()
	})

    $('.submit-upload-dokumentasi').click(function(){
        submitUploadDokumentasi()
    })

	$('#uploadDokumentasi').click(function(){
		$('#labelUpload').text('Form Upload Dokumentasi')
		$('#modalUplaodDokumentasi').modal('show')
	})

    $('#btnAddPeserta').click(function(){
        $('#labelPeserta').text('Form Tambah Peserta')
        $('#modalTambahPeserta').modal('show')
    })

    $('.submit-tambah-peserta').click(function(){
        submitTambahPeserta()
    })
})

// ==================== MATERI
function getMateriSharing(id){
	$('#table-materi').DataTable({
		processing: true, 
        serverSide: true, 
        order: [], 
        ajax: {
            url     : base_url+"tna/internalSharing/getDataMateri/"+id,
            type    : "get",
            datatype: "json",
            data    : function(d){
                console.log(d)
            }
                      
        },
        columns: [
            { "data": "nama_materi" },
            { 
            	"data": "file_materi",
            	render:function(data, type, row, meta){
            		const url = `<a href="`+url_file+`/`+data+`" target="_blank">`+data+`</a>`
            		return url

            	} 
            },
            { 
                "data": "id",
                render:function(data, type, row, meta){
                    let html = `<button onclick="showModalEdit(`+data+`,'`+row.nama_materi+`')" class="btn-warning btn-xs">
									<i class="fa fa-edit"></i>
								</button>
								<button onclick="deleteData(`+data+`,'materi')" class="btn-danger btn-xs">
									<i class="fa fa-trash"></i>
								</button>`
                    return html
                }
            },
        ]
	})
}

function submitAddMateri(){
    $("#form-tambah-materi").validate({
        rules: {
            judul_materi: "required",
        },
        messages: {
            judul_materi:{
                required:"<i class='fa fa-times'></i> Judul Materi harus diisi"
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
                url: base_url+"tna/internalSharing/createOrUpdateMateri",
                type: 'POST',
                data: new FormData($("#form-tambah-materi")[0]),
                contentType: false,
                cache: false,
                processData:false,
                success: function(response) {
                    var newResponse = JSON.parse(response);
                   console.log(newResponse)
                    if(newResponse.success){
                        setTimeout(function() {
                            swal({
                                title: "Notifikasi!",
                                text: "Data berhasil disimpan",
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

function showModalEdit(id, materi){
    $('#label').text('Form Edit Materi')
    $('#reqFile').css('display','none')
    $('#idMateri').val(id)
    $('#judul_materi').val(materi)
    $('#modalTambahMateri').modal('show')
}


// =================== DOKUMENTASI
function getDokumentasiSharing(id){
    var html = '';
	$.ajax({
        url:base_url+'tna/internalSharing/getDataDokumentasi/'+id,
        method: 'get',
        dataType: 'json',
        success: function(response){
            
            for (var i = 0; i < response.length; i++) {
                html = `
                        <div class="col-md-4">
                            <div class="card">
                                <div id="containerImage">
                                    <img src="`+url_dokumentasi+'/'+response[i].file_dokumentasi+`" alt="image" id="gambar">
                                </div>
                            </div>
                            <div class="text-center" style="padding-top: 5%">
                                <button onclick="showEditDokumentasi(`+response[i].id+`)" class="btn-warning btn-xs">
                                    <i class="fa fa-edit"></i>
                                </button>
                                <button onclick="deleteData(`+response[i].id+`,'dokumentasi')" class="btn-danger btn-xs">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </div>
                        </div>
                `
                $('#dataDokumentasi').append(html)

               
           }
          
        }
    });
}

function submitUploadDokumentasi(){
    $("#form-upload-dokumentasi").validate({
        rules: {
            dokumentasi: "required",
        },
        messages: {
            dokumentasi:{
                required:"<i class='fa fa-times'></i> File harus diisi"
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
                url: base_url+"tna/internalSharing/createOrUpdateDokumentasi",
                type: 'POST',
                data: new FormData($("#form-upload-dokumentasi")[0]),
                contentType: false,
                cache: false,
                processData:false,
                success: function(response) {
                    var newResponse = JSON.parse(response);
                   console.log(newResponse)
                    if(newResponse.success){
                        setTimeout(function() {
                            swal({
                                title: "Notifikasi!",
                                text: "Data berhasil disimpan",
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

function getCountDocument(id){
	$.ajax({
        url:base_url+'tna/internalSharing/getCountDocument/'+id,
        method: 'get',
        dataType: 'json',
        success: function(response){
           console.log(response)
           	if(response >= 3 ){
	           	$('#uploadDokumentasi').css('display','none')
	        }else{
				$('#uploadDokumentasi').css('display','block')
	        }
        }
    });
}

function showEditDokumentasi(id){
    $('#labelUpload').text('Form Edit Upload Dokumentasi')
    $('#idDokumentasi').val(id)
    $('#modalUplaodDokumentasi').modal('show')
}

// ===================== PESERTA
function getPeserta(id){
    $('#tbl-peserta').DataTable({
        processing: true, 
        serverSide: true, 
        order: [], 
        ajax: {
            url     : base_url+"tna/internalSharing/getPeserta/"+id,
            type    : "get",
            datatype: "json",
            data    : function(d){
                console.log(d)
            }
                      
        },
        columns: [
            {
                "data": "id",
                "width": "50px",
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            { "data": "nama" },
            { "data": "jabatan" },
            { "data": "subunit" },
            { "data": "status_fte" },
            
            { 
                "data": "id",
                render:function(data, type, row, meta){
                    console.log(row)
                    let html = `
                                <button onclick="deleteData(`+row.idPeserta+`,'peserta')" class="btn-danger btn-xs">
                                    <i class="fa fa-trash"></i>
                                </button>&nbsp;&nbsp;`
                    html = html + `<button onclick="showModalFeedback(`+data+`,`+row.m_karywan_id+`,'admin')" class="btn-success btn-xs">
                                        <i class="fa fa-comments-o" title="show feedback"></i>
                                    </button>`
                    return html
                }
            },
        ]
    })
}

function submitTambahPeserta(){
    $("#form-add-peserta").validate({
        rules: {
            direktorat: "required",
            peserta: "required",
        },
        messages: {
            dokumentasi:{
                direktorat:"<i class='fa fa-times'></i> Subunit harus diisi"
            },
            peserta:{
                direktorat:"<i class='fa fa-times'></i> Peserta harus diisi"
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
                url: base_url+"tna/internalSharing/createOrUpdatePeserta",
                type: 'POST',
                data: new FormData($("#form-add-peserta")[0]),
                contentType: false,
                cache: false,
                processData:false,
                success: function(response) {
                    var newResponse = JSON.parse(response);
                   console.log(newResponse)
                    if(newResponse.success){
                        setTimeout(function() {
                            swal({
                                title: "Notifikasi!",
                                text: "Data berhasil disimpan",
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

function deleteData(id,ket){
    swal({
        title: "Yakin Hapus Data ini ?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Ya, Hapus!",
        closeOnConfirm: false
    }, function () {
        console.log("masuk")
        $.ajax({
            type : "POST",
            url  : base_url+"tna/internalSharing/deleteData/"+ket,
            dataType: "JSON",
            data : "id="+id,
            success:function(resp){
                console.log(resp)
                if(resp.success){
                    setTimeout(function() {
                        swal({
                            title: "Notifikasi!",
                            text: "Data berhasil dihapus",
                            imageUrl: img_icon_success
                        }, function() {
                            location.reload();
                        });
                    }, 1000);
                }else{
                    setTimeout(function() {
                        swal({
                            title: "Notifikasi!",
                            text: "Data gagal dihapus",
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

function showModalFeedback(id, source_karyawan_id, is_admin = false){
    $('#id').val(id)
    $('#source_karyawan_id').val(source_karyawan_id)
    if(is_admin == false){
        $('.submit-feedback').css('display','block')
        // getDataFeedbackMateri();
        // getDataFeedbackNarasumber();
    }
    // else{
    //     getDataFeedbackMateriAdmin(id, source_karyawan_id);
    //     getDataFeedbackNarasumberAdmin(id, source_karyawan_id);
    // }
    getDataFeedbackMateriAdmin(id, source_karyawan_id);
    getDataFeedbackNarasumberAdmin(id, source_karyawan_id);
    
    $('#modalFeedback').modal('show')
}

function getDataFeedbackMateriAdmin(id, source_karyawan_id){
    $('#body-table-materi').empty()
    var totalNilaiMateriAdmin = 0;
    $.ajax({
        type : "POST",
        url  : base_url+"tna/internalSharing-employee/getDataFeedbackAdmin",
        data:{
            group:'Materi',
            karywanId:source_karyawan_id,
            internalSharingId:id,
            source:'Internal Sharing'
        },
        dataType: "JSON",
        success:function(resp){
            if(resp.length > 0){
                $('.submit-feedback').css('display','none')
                $('#manfaat').val(resp[0].manfaat_yg_diperoleh)
                $('#kritik_saran').val(resp[0].kritik_saran)
                $('#total_materi').val(resp[0].skor_materi)
                $('#total_narasumber').val(resp[0].skor_narasumber)
                $('#is_update').val(true)
                resp.forEach((element, index) => {
                    let number_materi = index + 1;
                    var htmlGroup = createFeedbackRow(element, 'materi', number_materi);
                    $('#body-table-materi').append(htmlGroup);
                })
                
            }else{
                getDataFeedbackMateri()
                $('#is_update').val(false)
                $('#manfaat').val('')
                $('#kritik_saran').val('')
                $('#total_materi').val('')
                $('#total_narasumber').val('')
            }

            $('input[type=radio], input[type=checkbox]').on('change', function () {
                totalNilaiMateriAdmin = calculateTotalValue('materi');
                $('#total_materi').val(totalNilaiMateriAdmin);
            });
        },
    });
}

function getDataFeedbackNarasumberAdmin(id, source_karyawan_id){
    $('#body-table-narasumber').empty()
    var totalNilaiNarasumberAdmin = 0;
    $.ajax({
        type : "POST",
        url  : base_url+"tna/internalSharing-employee/getDataFeedbackAdmin",
        data:{
            group:'Narasumber',
            karywanId:source_karyawan_id,
            internalSharingId:id,
            source:'Internal Sharing'
        },
        dataType: "JSON",
        success:function(resp){
            console.log(resp)
            if(resp.length > 0){
                resp.forEach((element, index) => {
                    let number_narasumber = index+1
                    var htmlGroup = createFeedbackRow(element, 'narasumber', number_narasumber);
                    $('#body-table-narasumber').append(htmlGroup);
                })
            }else{
                getDataFeedbackNarasumber()
            }
            $('input[type=radio], input[type=checkbox]').on('change', function () {
                totalNilaiNarasumberAdmin = calculateTotalValue('narasumber');
                $('#total_narasumber').val(totalNilaiNarasumberAdmin);
            })
        },
    });
}