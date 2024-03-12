function submitFormVerifikasi(){

    $(".form-verifikasi").validate({
        rules: {
            verifikasi: "required"
        },
        messages: {
            verifikasi:{
                required:"<i class='fa fa-times'></i> Verifikasi harus diisi"
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
                    url: base_url+"tna/usulan/submit-verifikasi",
                    type: 'POST',
                    dataType: "JSON",
                    data: $(form).serialize(),
                    success: function(response) {
                        if(response.success){
                            $('#table-tab-verifikasi').DataTable().ajax.reload( null, false );
                            $('#ModalFormVerifikasi').modal('hide');
                            refresh_dashlet();
                            setTimeout(function() {
                                swal({
                                    title: "Notifikasi!",
                                    text: response.msg,
                                    imageUrl: img_icon_success
                                }, function() {
                                //location.reload();
                                    //$('#ModalFormUsulan').modal('hide');
                                });
                            }, 1000);
                        }else{
                            setTimeout(function() {
                                swal({
                                    title: "Notifikasi!",
                                    text: response.msg,
                                    imageUrl: img_icon_error
                                }, function() {
                                    //location.reload();
                                });
                            }, 1000);
                        }
                        
                    }            
                });
            }
    });
}

function submitFormUploadDokumen(){
    $(".persentase-project").attr('aria-valuenow','0');
    $(".persentase-project").css('width','0%');
    $(".persentase-project").html('0%');
    $(".pgrs-project").show();
    $("#form_upload_verifikasi_vp").validate({
        rules: {
            kode_download: "required"
        },
        messages: {
            kode_download:{
                required:"<i class='fa fa-times'></i> kode download harus diisi"
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
                    xhr: function() {
                        var xhr = new window.XMLHttpRequest();
        
                        xhr.upload.addEventListener("progress", function(evt) {
                            if (evt.lengthComputable) {
                                var percentComplete = evt.loaded / evt.total;
                                percentComplete = parseInt(percentComplete * 100);
                                
                                $(".persentase-project").attr('aria-valuenow',percentComplete);
                                $(".persentase-project").css('width',percentComplete+'%');
                                $(".persentase-project").html(percentComplete+'%');
                                if (percentComplete === 100) {
                                    setTimeout(function() {
                                      $(".pgrs-project").fadeOut('slow');
                                      $('#form_upload_verifikasi_vp')[0].reset();
                                    }, 5000);
        
                                }
        
                            }
                        }, false);
        
                        return xhr;
                    },
                    url: base_url+"usulan/upload/verifikasi-vphcm",
                    type: "POST",
                    dataType: "JSON",
                    data:  new FormData($("#form_upload_verifikasi_vp")[0]),
                    contentType: false,
                    cache: false,
                    processData:false,
                    success: function(response) {
                        if(response.success){
                            $('#table-tab-verifikasi-vp-hcm').DataTable().ajax.reload( null, false );
                            $('#ModalUploadVerifikasiVP').modal('hide');
                            refresh_dashlet();
                            setTimeout(function() {
                                swal({
                                    title: "Notifikasi!",
                                    text: response.msg,
                                    imageUrl: img_icon_success
                                }, function() {
                                //location.reload();
                                    //$('#ModalFormUsulan').modal('hide');
                                });
                            }, 1000);
                        }else{
                           
                            setTimeout(function() {
                                swal({
                                    title: "Notifikasi!",
                                    text: response.msg,
                                    imageUrl: img_icon_error
                                }, function() {
                                    //location.reload();
                                });
                            }, 1000);
                        }
                        
                    }            
                });
            }
    });
}

jQuery(document).ready(function() {

    $(document).on('click', '.btn_verifikasi_usulan_tna', function() {
        var id = $(this).attr('uid');
        $("#verifikasi_usulan_id").val(id);
        $("#keterangan").text("");
        $("#ket_show").text("");
        $("#form-verifikasi")[0].reset();
    });

    $(document).on('click', '#btn_submit_verifikasi', function() {
        var verifikasi = $('input[name=is_verifikasi]:checked').val();
        var ket = $("#keterangan").val();
        if(verifikasi=="" || verifikasi=="undefiend" || verifikasi==null || verifikasi=="null"){
            //$("#error_msg_verifikasi").text("Anda belum pilih verifikasi.");
            setTimeout(function() {
                swal({
                    title: "Warning!",
                    text: "Anda belum pilih verifikasi",
                    imageUrl: img_icon_error
                }, function() {
                   
                });
            }, 1000);
        }
        else if(verifikasi=='2' && ket==""){
            setTimeout(function() {
                swal({
                    title: "Warning!",
                    text: "keterangan harus diisi",
                    imageUrl: img_icon_error
                }, function() {
                   
                });
            }, 1000);
        }else{
            submitFormVerifikasi();
        }
        
    });

    $(document).on("click",".btn_download_usulan_vp_hcm",function(){
        var encrypt = this.value;
        swal({
            title: "Yakin Hapus Data ini ?",
            type: "info",
            //icon: "question",
            showCancelButton: true,
            confirmButtonColor: "#001f3f",
            confirmButtonText: "Ya, Download!",
            closeOnConfirm: false
        }, function () {
            window.open(base_url+"usulan/download/vp-hcm", "_blank");
        });    
    });

    $(document).on("click","#btn_submit_upload_verifikasi_vp",function(){
        submitFormUploadDokumen();
    });

    


    

});