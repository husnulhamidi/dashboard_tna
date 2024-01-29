
function ResetForm(){
    //document.getElementById("form-add-lembaga").reset();
    $("#LembagaID").val("");
    $("#nama_lembaga").val("");
    $("#pic").val("");
    $("#telp").val("");
    $("#website").val("");
    $("#alamat").val("");
}

function setupForm(id=""){
    $.ajax({
        type: "GET",
        dataType: "JSON",
        url: base_url + "tna/referensi/lembaga/show",
        data: "id="+id,
        success: function(resp) {
            ResetForm();
            $("#LembagaID").val(resp.data.encrypt_id);
            $("#nama_lembaga").val(resp.data.nama_lembaga);
            $("#pic").val(resp.data.nama_pic);
            $("#telp").val(resp.data.telp);
            $("#website").val(resp.data.website);
            $("#alamat").val(resp.data.alamat);
            
        }
    });
    
}

function submitForm(){

    $(".form-add-lembaga").validate({
        rules: {
            nama_lembaga: "required"
        },
        messages: {
          
            nama_lembaga:{
                required:"<i class='fa fa-times'></i> Nama Lembaga harus diisi"
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
                    url: base_url+"tna/referensi/lembaga/submit",
                    type: 'POST',
                    dataType: "JSON",
                    data: $(form).serialize(),
                    success: function(response) {
                        if(response.success){
                            $('#table-lembaga').DataTable().ajax.reload( null, false );
                            $('#AddLembaga').modal('hide');
                            setTimeout(function() {
                                swal({
                                    title: "Notifikasi!",
                                    text: response.msg,
                                    imageUrl: img_icon_success
                                }, function() {
                                //location.reload();
                                    $('#AddLembaga').modal('hide');
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
    
    //getComboKompetensi();
    
    $(".btn-add-lembaga").click(function() {
        ResetForm();
    });

    $(".submit-lembaga").click(function() {
        submitForm();
    });

    $(document).on('click', '.btn_edit_lembaga', function() {
        var id = this.value;
        setupForm(id);
    });

    oTable = $('#table-lembaga').DataTable({
        processing: true, 
        serverSide: true, 
        order: [], 
        ajax: {
            url     : base_url+"tna/referensi/lembaga/data",
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
            { "data": "nama_lembaga" },
            { "data": "nama_pic" },
            { "data": "telp" },
            { "data": "website" },
            { "data": "alamat" },
            {
                "data": "encrypt_id",
                "className": "text-center",
                "width": "80px",
                "orderable" : false,
                render: function (data, type, row, meta) {
                    var aksi = '';
                   
                    aksi += '<a href="'+url_detail+'/'+data+'">'+
                                '<button class="btn btn-info btn-xs" data-toggle="tooltip" title="detail" data-placement="bottom"><i class="fa fa-eye"></i> </button>'+   
                            '</a> ';
                    aksi += '<a  data-toggle="modal" data-target="#AddLembaga" id="'+data+'" uid="'+data+'" >'+
                             '<button value="'+data+'" id="'+data+'" uid="'+data+'" class="btn btn-success btn-xs btn_edit_lembaga" data-toggle="tooltip" title="edit" data-placement="bottom"><i class="fa fa-edit"></i> </button>'+   
                            '</a> ';

                    aksi +=  '<button  class="btn btn-danger btn-xs btn_delete_lembaga" value="'+data+'" uid="'+data+'" data-toggle="tooltip" title="Hapus" data-placement="bottom">'+
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

    $(document).on("click",".btn_delete_lembaga",function(){
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
                url  : base_url+"tna/referensi/lembaga/delete",
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
                                $('#table-lembaga').DataTable().ajax.reload( null, false );
                            });
                        }, 1000);
                    }else{
                        setTimeout(function() {
                            swal({
                                title: "Notifikasi!",
                                text: resp.msg,
                                imageUrl: img_icon_success
                            }, function() {
                                $('#table-lembaga').DataTable().ajax.reload( null, false );
                            });
                        }, 1000);
                    }
                    
                }

            });
           
        });
            
    });

    

});