jQuery(document).ready(function() {
	const id = $('#id').val();
	getMateriSharing(id)
	getDokumentasiSharing(id)
	getCountDocument(id);
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
})

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
								<button class="btn-danger btn-xs">
									<i class="fa fa-trash"></i>
								</button>`
                    return html
                }
            },
        ]
	})
}

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
                                <button class="btn-danger btn-xs">
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

function showModalEdit(id, materi){
	$('#label').text('Form Edit Materi')
	$('#reqFile').css('display','none')
	$('#idMateri').val(id)
	$('#judul_materi').val(materi)
	$('#modalTambahMateri').modal('show')
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