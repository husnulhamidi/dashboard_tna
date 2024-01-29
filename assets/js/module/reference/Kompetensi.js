
function ResetForm(){
    //document.getElementById("form-add-kompetensi").reset();
    $("#KompetensiID").val("");
    $("#kode_kompetensi").val("");
    $("#kompetensi").val("");
    $('#ownerTelkom').prop('checked', false);
    $('#ownerTsat').prop('checked', false);
    $("#job_role_code").val("").trigger('change');
}

function setupForm(id=""){
    $.ajax({
        type: "GET",
        dataType: "JSON",
        url: base_url + "tna/referensi/kompetensi/show",
        data: "id="+id,
        success: function(resp) {
            ResetForm();
            //getComboJobFunction(resp.data.job_family_code);
            //getComboJobRole(resp.data.job_function_code);
            $("#KompetensiID").val(resp.data.encrypt_id);
            $("#job_family").val(resp.data.job_family_code).trigger('change');
            $("#job_function").val(resp.data.job_function_code);
            $("#job_role").val(resp.data.r_tna_job_role_code).trigger('change');
            $("#kode_kompetensi").val(resp.data.code);
            $("#kompetensi").val(resp.data.name);
            if(resp.data.owner=='Telkom'){
                $('#ownerTelkom').prop('checked', true);
            }else{
                $('#ownerTsat').prop('checked', true);
            }

            

        }
    });
    
}

function submitForm(){

    $(".form-add-kompetensi").validate({
        rules: {
            kode_kompetensi: "required",
            kompetensi: "required",
            owner: "required"
        },
        messages: {
          
            kode_kompetensi:{
                required:"<i class='fa fa-times'></i> Kode Kompetensi harus diisi"
            },
            kompetensi:{
                required:"<i class='fa fa-times'></i> Kompetensi harus diisi"
            },
            owner:{
                required:"<i class='fa fa-times'></i> Owner harus diisi"
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
                    url: base_url+"tna/referensi/kompetensi/submit",
                    type: 'POST',
                    dataType: "JSON",
                    data: $(form).serialize(),
                    success: function(response) {
                        if(response.success){
                            $('#table-kompetensi').DataTable().ajax.reload( null, false );
                            $('#AddKompetensi').modal('hide');
                            setTimeout(function() {
                                swal({
                                    title: "Notifikasi!",
                                    text: response.msg,
                                    imageUrl: img_icon_success
                                }, function() {
                                //location.reload();
                                    $('#AddKompetensi').modal('hide');
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
    
    getComboJobRole();

    $(".btn-add-kompetensi").click(function() {
        ResetForm();
    });

    $(".submit-kompetensi").click(function() {
        submitForm();
    });

    $(document).on('click', '.btn_edit_kompetensi', function() {
        var id = this.value;
        setupForm(id);
    });

    oTable = $('#table-kompetensi').DataTable({
        processing: true, 
        serverSide: true, 
        order: [], 
        ajax: {
            url     : base_url+"tna/referensi/kompetensi/data",
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
            { "data": "job_role" },
            { "data": "code" },
            { "data": "name" },
            { "data": "owner" },
            {
                "data": "encrypt_id",
                "className": "text-center",
                "width": "80px",
                "orderable" : false,
                render: function (data, type, row, meta) {
                    var aksi = '';
                   
                    aksi += '<a  data-toggle="modal" data-target="#AddKompetensi" id="'+data+'" uid="'+data+'" >'+
                             '<button value="'+data+'" id="'+data+'" uid="'+data+'" class="btn btn-success btn-xs btn_edit_kompetensi" data-toggle="tooltip" title="edit" data-placement="bottom"><i class="fa fa-edit"></i> </button>'+   
                            '</a> ';

                    aksi +=  '<button  class="btn btn-danger btn-xs btn_delete_kompetensi" value="'+data+'" uid="'+data+'" data-toggle="tooltip" title="Hapus" data-placement="bottom">'+
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

    $(document).on("click",".btn_delete_kompetensi",function(){
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
                url  : base_url+"tna/referensi/kompetensi/delete",
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
                                $('#table-kompetensi').DataTable().ajax.reload( null, false );
                            });
                        }, 1000);
                    }else{
                        setTimeout(function() {
                            swal({
                                title: "Notifikasi!",
                                text: resp.msg,
                                imageUrl: img_icon_success
                            }, function() {
                                $('#table-kompetensi').DataTable().ajax.reload( null, false );
                            });
                        }, 1000);
                    }
                    
                }

            });
           
        });
            
    });

    

});