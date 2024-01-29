
function ResetForm(){
    //document.getElementById("form-add-anggaran").reset();
    $("#jobroleID").val("");
    $("#kode").val("");
    $("#job_role").val("");
    $("#long_name").val("");
    $("#objid").val("");
    $("#job_function_code").val("").trigger('change');
}

function setupForm(id=""){
    $.ajax({
        type: "GET",
        dataType: "JSON",
        url: base_url + "tna/referensi/job-role/show",
        data: "id="+id,
        success: function(resp) {
            ResetForm();
            $("#jobroleID").val(resp.data.encrypt_id);
            $("#job_function_code").val(resp.data.r_tna_job_function_code).trigger('change');
            $("#kode").val(resp.data.code);
            $("#job_role").val(resp.data.name);
            $("#long_name").val(resp.data.long_name);
            $("#objid").val(resp.data.objid);

        }
    });
    
}

function submitForm(){

    $(".form-add-job-role").validate({
        rules: {
            job_function_code: "required",
            kode: "required",
            job_role: "required",
            long_name: "required",
            objid: "required"
        },
        messages: {
            job_function_code:{
                required:"<i class='fa fa-times'></i> Job function harus diisi"
            },
            kode:{
                required:"<i class='fa fa-times'></i> Kode Job Role harus diisi"
            },
            job_role:{
                required:"<i class='fa fa-times'></i> Job Role harus diisi"
            },
            long_name:{
                required:"<i class='fa fa-times'></i> Long Name Job Role harus diisi"
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
                    url: base_url+"tna/referensi/job-role/submit",
                    type: 'POST',
                    dataType: "JSON",
                    data: $(form).serialize(),
                    success: function(response) {
                        if(response.success){
                            $('#table-job-role').DataTable().ajax.reload( null, false );
                            $('#AddJobRole').modal('hide');
                            setTimeout(function() {
                                swal({
                                    title: "Notifikasi!",
                                    text: response.msg,
                                    imageUrl: img_icon_success
                                }, function() {
                                //location.reload();
                                    $('#AddJobRole').modal('hide');
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

    oTable = $('#table-job-role').DataTable({
        processing: true, 
        serverSide: true, 
        order: [], 
        ajax: {
            url     : base_url+"tna/referensi/job-role/data",
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
            { "data": "job_function" },
            { "data": "code" },
            { "data": "name" },
            { "data": "long_name" },
            { "data": "objid" },
            {
                "data": "encrypt_id",
                "className": "text-center",
                "width": "80px",
                "orderable" : false,
                render: function (data, type, row, meta) {
                    var aksi = '';
                   
                    aksi += '<a  data-toggle="modal" data-target="#AddJobRole" id="'+data+'" uid="'+data+'" >'+
                             '<button value="'+data+'" id="'+data+'" uid="'+data+'" class="btn btn-success btn-xs btn_edit_jobrole" data-toggle="tooltip" title="edit" data-placement="bottom"><i class="fa fa-edit"></i> </button>'+   
                            '</a> ';

                    aksi +=  '<button  class="btn btn-danger btn-xs btn_delete_jobrole" value="'+data+'" uid="'+data+'" data-toggle="tooltip" title="Hapus" data-placement="bottom">'+
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

    $(".btn-add-job-role").click(function() {
        ResetForm();
    });

    $(".submit-job-role").click(function() {
        submitForm();
    });

    $(document).on('click', '.btn_edit_jobrole', function() {
        //var id = $(this).attr('uid');
        var id = this.value;
        setupForm(id);
    });

    $(document).on("click",".btn_delete_jobrole",function(){
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
                url  : base_url+"tna/referensi/job-role/delete",
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
                                $('#table-job-role').DataTable().ajax.reload( null, false );
                            });
                        }, 1000);
                    }else{
                        setTimeout(function() {
                            swal({
                                title: "Notifikasi!",
                                text: resp.msg,
                                imageUrl: img_icon_success
                            }, function() {
                                $('#table-job-role').DataTable().ajax.reload( null, false );
                            });
                        }, 1000);
                    }
                    
                }

            });
           
        });
            
    });

    

});