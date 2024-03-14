
function ResetForm(){
    //document.getElementById("form-add-training").reset();
    $("#TrainingID").val("");
    $("#code").val("");
    $("#training").val("");
    $("#kategori").val("").trigger('change');
    $("#kompetensi").val("").trigger('change');
}

function setupForm(id=""){
    $.ajax({
        type: "GET",
        dataType: "JSON",
        url: base_url + "tna/referensi/training/show",
        data: "id="+id,
        success: function(resp) {
            ResetForm();
            $("#TrainingID").val(resp.data.encrypt_id);
            $("#kompetensi").val(resp.data.r_tna_kompetensi_code).trigger('change');
            $("#code").val(resp.data.code);
            $("#training").val(resp.data.name);
            $("#kategori").val(resp.data.type).trigger('change');
            
        }
    });
    
}

function submitForm($btn){

    $(".form-usulan-tna").validate({
        rules: {
            jenis_pelatihan: "required",
            kompetensi: "required",
            jenis_development: "required",
            nama_kegiatan: "required",
            tna:"required",
            direktorat:"required",
        },
        messages: {
          
            jenis_pelatihan:{
                required:"<i class='fa fa-times'></i> Jenis Pelatihan harus diisi"
            },
            kompetensi:{
                required:"<i class='fa fa-times'></i> Kompetensi harus diisi"
            },
            jenis_development:{
                required:"<i class='fa fa-times'></i> Jenis Development harus diisi"
            },
            nama_kegiatan:{
                required:"<i class='fa fa-times'></i> Nama Kegiatan harus diisi"
            },
            tna:{
                required:"<i class='fa fa-times'></i> TNA harus diisi"
            },
            direktorat:{
                required:"<i class='fa fa-times'></i> Direktorat harus diisi"
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
            var formData1 = $(form).serializeArray();
            var formData2 = $('#form-add-penyelenggara').serializeArray();

            var combinedData = formData1.concat(formData2);
            
                $.ajax({
                    url: base_url+"tna/usulan/submit",
                    type: 'POST',
                    dataType: "JSON",
                    data: combinedData,
                    success: function(response) {
                        if(response.success){
                            //$('#table-training').DataTable().ajax.reload( null, false );
                            //$('#AddTraining').modal('hide');

                            setTimeout(function() {
                                swal({
                                    title: "Notifikasi!",
                                    text: response.msg,
                                    imageUrl: img_icon_success
                                }, function() {
                                //location.reload();
                                    //$('#AddTraining').modal('hide');
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

function getDashlet(urutan){
    $.ajax({
        type: "GET",
        dataType: "JSON",
        url: base_url + "tna/usulan/get_dashlet",
        data: "urutan="+urutan,
        success: function(resp) {
            if(urutan==1){
                $('#dashlet_1').text(resp);
            }
            else if(urutan==2){
                $('#dashlet_2').text(resp);
            }
            else if(urutan==3){
                $('#dashlet_3').text(resp);
            }
            else if(urutan==4){
                $('#dashlet_4').text(resp);
            }
            else if(urutan==5){
                $('#dashlet_5').text(resp);
            }
            else if(urutan==6){
                $('#dashlet_6').text(resp);
            }
        }
    });
    
}

function refresh_dashlet(){
    getDashlet(1);
    getDashlet(2);
    getDashlet(3);
    getDashlet(4);
    getDashlet(5);
    getDashlet(6);
}


jQuery(document).ready(function() {
    
    refresh_dashlet();
    
    $(".btn-add-training").click(function() {
        ResetForm();
    });

    $(".submit-draft").click(function() {
        submitForm('draft');
    });

    $(".submit-usulkan").click(function() {
        submitForm('usulkan');
    });

    $(document).on('click', '.btn_edit_usulan_tna', function() {
        var id = this.value;
        setupForm(id);
    });

    $(document).on("click",".btn_delete_usulan",function(){
        var encrypt = this.value;
        swal({
            title: "Yakin Hapus Data ini ?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Ya, Hapus!",
            closeOnConfirm: false
        }, function () {

            $.ajax({
                type : "POST",
                url  : base_url+"tna/referensi/training/delete",
                dataType: "JSON",
                data : "id="+encrypt,
                success:function(resp){
                    
                    if(resp.status){
                        setTimeout(function() {
                            swal({
                                title: "Notifikasi!",
                                text: resp.msg,
                                imageUrl: img_icon_success
                            }, function() {
                                $('#table-training').DataTable().ajax.reload( null, false );
                            });
                        }, 1000);
                    }else{
                        setTimeout(function() {
                            swal({
                                title: "Notifikasi!",
                                text: resp.msg,
                                imageUrl: img_icon_success
                            }, function() {
                                $('#table-training').DataTable().ajax.reload( null, false );
                            });
                        }, 1000);
                    }
                    
                }

            });
           
        });
            
    });

    

});