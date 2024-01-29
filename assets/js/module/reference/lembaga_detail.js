
function ResetForm(){
    //document.getElementById("form-add-lembaga").reset();
    $("#lembaga_id").val("");
    $("#detail_id").val("");
    $("#nama_pelatihan").val("");
    $("#jenis_pelatihan").val("").trigger('change');
    $("#metoda").val("").trigger('change');
    $("#kapasitas").val("");
    $("#biaya").val("");
}

function setupForm(id=""){
    $.ajax({
        type: "GET",
        dataType: "JSON",
        url: base_url + "tna/referensi/lembaga/detail-show",
        data: "id="+id,
        success: function(resp) {
            ResetForm();
            $("#detail_id").val(resp.data.encrypt_id);
            $("#nama_pelatihan").val(resp.data.nama_pelatihan);
            $("#kapasitas").val(resp.data.kapasitas);
            $("#biaya").val(resp.data.biaya);
            if(resp.data.jenis_pelatihan=='Pelatihan'){
                $('#jenis_pelatihan1').prop('checked', true);
            }else{
                $('#jenis_pelatihan2').prop('checked', true);
            }

            if(resp.data.metoda=='Online'){
                $('#metodaOnline').prop('checked', true);
            }
            else if(resp.data.metoda=='Offline'){
                $('#metodaOffline').prop('checked', true);
            }
            else if(resp.data.metoda=='Blended'){
                $('#metodaBlended').prop('checked', true);
            }
            
        }
    });
    
}

function submitForm(){

    $(".form-add-lembaga-training").validate({
        rules: {
            nama_pelatihan: "required",
            jenis_pelatihan: "required",
            metoda: "required",
            kapasitas: "required",
            harga: "required"
        },
        messages: {
          
            nama_pelatihan:{
                required:"<i class='fa fa-times'></i> Nama Pelatihan harus diisi"
            },
            jenis_pelatihan:{
                required:"<i class='fa fa-times'></i> Jenis Pelatihan harus diisi"
            },
            metoda:{
                required:"<i class='fa fa-times'></i> Metoda harus diisi"
            },
            kapasitas:{
                required:"<i class='fa fa-times'></i> Kapasitas harus diisi"
            },
            harga:{
                required:"<i class='fa fa-times'></i> Harga harus diisi"
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
                    url: base_url+"tna/referensi/lembaga/detail-submit",
                    type: 'POST',
                    dataType: "JSON",
                    data: $(form).serialize(),
                    success: function(response) {
                        if(response.success){
                            $('#table-detail-lembaga').DataTable().ajax.reload( null, false );
                            $('#AddTrainingLembaga').modal('hide');
                            setTimeout(function() {
                                swal({
                                    title: "Notifikasi!",
                                    text: response.msg,
                                    imageUrl: img_icon_success
                                }, function() {
                                //location.reload();
                                    $('#AddTrainingLembaga').modal('hide');
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
    
    $(".btn-add-detail-lembaga").click(function() {
        ResetForm();
    });

    $(".submit-detail-lembaga").click(function() {
        // let jp =$('input[name=jenis_pelatihan]:checked').val();
        // let metoda =$('input[name=metoda]:checked').val();
        // $(".jp_required").html('');
        // $(".metoda_required").html('');
        // if(jp=="" || jp=='undefained' || jp==null){
        //     $(".jp_required").html('<b><i class="fa fa-close"></i> Jenis Pelatihan harus dipilih</b>');
        // }
        // else if(metoda=="" || metoda=='undefained' || metoda==null){
        //     $(".metoda_required").html('<b><i class="fa fa-close"></i> Metoda harus dipilih</b>');
        // }else{
        //     submitForm();
        // }

        submitForm();
        
    });

    $(document).on('click', '.btn_edit_detail_lembaga', function() {
        var id = this.value;
        setupForm(id);
    });

    oTable = $('#table-detail-lembaga').DataTable({
        processing: true, 
        serverSide: true, 
        order: [], 
        ajax: {
            url     : base_url+"tna/referensi/lembaga/detail-data",
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
            { "data": "nama_pelatihan" },
            { "data": "jenis_pelatihan" },
            { "data": "metoda" },
            { "data": "kapasitas" },
            { "data": "biaya" ,
                render: function (data, type, row, meta) {
                    return 'Rp. '+data;
                }
            },
            {
                "data": "encrypt_id",
                "className": "text-center",
                "width": "80px",
                "orderable" : false,
                render: function (data, type, row, meta) {
                    var aksi = '';
                   
                    aksi += '<a  data-toggle="modal" data-target="#AddTrainingLembaga" id="'+data+'" uid="'+data+'" >'+
                             '<button value="'+data+'" id="'+data+'" uid="'+data+'" class="btn btn-success btn-xs btn_edit_detail_lembaga" data-toggle="tooltip" title="edit" data-placement="bottom"><i class="fa fa-edit"></i> </button>'+   
                            '</a> ';

                    aksi +=  '<button  class="btn btn-danger btn-xs btn_delete_detail_lembaga" value="'+data+'" uid="'+data+'" data-toggle="tooltip" title="Hapus" data-placement="bottom">'+
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

    $(document).on("click",".btn_delete_detail_lembaga",function(){
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
                url  : base_url+"tna/referensi/lembaga/detail-delete",
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
                                $('#table-detail-lembaga').DataTable().ajax.reload( null, false );
                            });
                        }, 1000);
                    }else{
                        setTimeout(function() {
                            swal({
                                title: "Notifikasi!",
                                text: resp.msg,
                                imageUrl: img_icon_success
                            }, function() {
                                $('#table-detail-lembaga').DataTable().ajax.reload( null, false );
                            });
                        }, 1000);
                    }
                    
                }

            });
           
        });
            
    });

    

});