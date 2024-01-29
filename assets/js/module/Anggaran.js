
function ResetForm(){
    //document.getElementById("form-add-anggaran").reset();
    $("#AnggaranID").val("");
    $("#nominal").val("");
    $("#tahun").val("");
    $("#tipe").val("").trigger('change');
}

function setupForm(id=""){
    $.ajax({
        type: "GET",
        dataType: "JSON",
        url: base_url + "tna/anggaran/show",
        data: "id="+id,
        success: function(resp) {
            ResetForm();
            $("#AnggaranID").val(resp.data.encrypt_id);
            $("#nominal").val(resp.data.nominal);
            $("#tahun").val(resp.data.year);
            $("#tipe").val(resp.data.type).trigger('change');

            // setTimeout(function() {
            //     swal({
            //         title: "Error!",
            //         text: "Refresh dan coba kembali. Jika masih error, silahkan hubungi Administrator.",
            //         icon :'danger',
            //         imageUrl: img_icon_success
            //     }, function() {
            //         $('#AddAnggaran').modal('hide');
            //     });
            // }, 1000);
        }
    });
    
}


jQuery(document).ready(function() {

    $(".btn-add-anggaran").click(function() {
        ResetForm();
    });

    // $(".btn_edit_anggaran").click(function() {
    //     ResetForm();
    //     setupForm();
    // });

    $(document).on('click', '.btn_edit_anggaran', function() {
        //var id = $(this).attr('uid');
        var id = this.value;
        setupForm(id);
    });

    $(document).on("click",".btn_delete_anggaran",function(){
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
                url  : base_url+"tna/anggaran/delete",
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
                                $('#table-anggaran').DataTable().ajax.reload( null, false );
                            });
                        }, 1000);
                    }else{
                        setTimeout(function() {
                            swal({
                                title: "Notifikasi!",
                                text: resp.msg,
                                imageUrl: img_icon_success
                            }, function() {
                                $('#table-anggaran').DataTable().ajax.reload( null, false );
                            });
                        }, 1000);
                    }
                    
                }

            });
           
        });
            
    });

    

});