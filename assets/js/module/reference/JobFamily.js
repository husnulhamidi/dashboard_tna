
function ResetForm(){
    //document.getElementById("form-add-anggaran").reset();
    $("#JobFamilyID").val("");
    $("#kode").val("");
    $("#job_family").val("");
    $("#objid").val("");
}

function setupForm(id=""){
    $.ajax({
        type: "GET",
        dataType: "JSON",
        url: base_url + "tna/referensi/job-family/show",
        data: "id="+id,
        success: function(resp) {
            ResetForm();
            $("#JobFamilyID").val(resp.data.encrypt_id);
            $("#kode").val(resp.data.code);
            $("#job_family").val(resp.data.name);
            $("#objid").val(resp.data.objid);

            // setTimeout(function() {
            //     swal({
            //         title: "Error!",
            //         text: "Refresh dan coba kembali. Jika masih error, silahkan hubungi Administrator.",
            //         icon :'danger',
            //         imageUrl: img_icon_success
            //     }, function() {
            //         $('#AddJobFamily').modal('hide');
            //     });
            // }, 1000);
        }
    });
    
}

function submitForm(){

    $(".form-add-job-family").validate({
        rules: {
            kode: "required",
            job_family: "required",
            objid: "required"
        },
        messages: {
            kode:{
                required:"<i class='fa fa-times'></i> Kode harus diisi"
            },
            job_family:{
                required:"<i class='fa fa-times'></i> Job Family harus diisi"
            },
            objid:{
                required:"<i class='fa fa-times'></i> Obj ID harus diisi"
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
                    url: base_url+"tna/referensi/job-family/submit",
                    type: 'POST',
                    dataType: "JSON",
                    data: $(form).serialize(),
                    success: function(response) {
                        if(response.success){
                            $('#table-job-family').DataTable().ajax.reload( null, false );
                            $('#AddJobFamily').modal('hide');
                            setTimeout(function() {
                                swal({
                                    title: "Notifikasi!",
                                    text: response.msg,
                                    imageUrl: img_icon_success
                                }, function() {
                                //location.reload();
                                    $('#AddJobFamily').modal('hide');
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

    oTable = $('#table-job-family').DataTable({
        processing: true, 
        serverSide: true, 
        order: [], 
        ajax: {
            url     : base_url+"tna/referensi/job-family/data",
            type    : "get",
            datatype: "json",
            data    : function(d){
               
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
            { "data": "code" },
            { "data": "name" },
            { "data": "objid" },
            {
                "data": "encrypt_id",
                "className": "text-center",
                "width": "80px",
                "orderable" : false,
                render: function (data, type, row, meta) {
                    var aksi = '';
                   
                    aksi += '<a  data-toggle="modal" data-target="#AddJobFamily" id="'+data+'" uid="'+data+'" >'+
                             '<button value="'+data+'" id="'+data+'" uid="'+data+'" class="btn btn-success btn-xs btn_edit_jobfamily" data-toggle="tooltip" title="edit" data-placement="bottom"><i class="fa fa-edit"></i> </button>'+   
                            '</a> ';

                    aksi +=  '<button  class="btn btn-danger btn-xs btn_delete_jobfamily" value="'+data+'" uid="'+data+'" data-toggle="tooltip" title="Hapus" data-placement="bottom">'+
                                '<i class="fa fa-trash"></i>'+
                            '</button>';
                   
                    return aksi;
                }
            },
        ],
        columnDefs: [
            {
                targets: [0],
                orderable: false,
                className: 'text-center',

            }

        ],
    });

    $(".btn-add-job-family").click(function() {
        ResetForm();
    });

    $(".submit-job-family").click(function() {
        submitForm();
    });

    $(document).on('click', '.btn_edit_jobfamily', function() {
        //var id = $(this).attr('uid');
        var id = this.value;
        setupForm(id);
    });

    $(document).on("click",".btn_delete_jobfamily",function(){
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
                url  : base_url+"tna/referensi/job-family/delete",
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
                                $('#table-job-family').DataTable().ajax.reload( null, false );
                            });
                        }, 1000);
                    }else{
                        setTimeout(function() {
                            swal({
                                title: "Notifikasi!",
                                text: resp.msg,
                                imageUrl: img_icon_success
                            }, function() {
                                $('#table-job-family').DataTable().ajax.reload( null, false );
                            });
                        }, 1000);
                    }
                    
                }

            });
           
        });
            
    });

    

});