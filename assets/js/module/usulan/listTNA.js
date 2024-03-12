function submitFormUsulkan(){

    $(".form-usulkantna").validate({
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
                    url: base_url+"tna/usulan/submit-usulkan",
                    type: 'POST',
                    dataType: "JSON",
                    data: $(form).serialize(),
                    success: function(response) {
                        if(response.success){
                            $('#table-usulan-tna').DataTable().ajax.reload( null, false );
                            $('#ModalFormUsulan').modal('hide');
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

    $('body').on('hidden.bs.modal', '.modal', function() {
        $(this).removeData('bs.modal');
    });

    oTable = $('#table-usulan-tna').DataTable({
        processing: true, 
        serverSide: true, 
        order: [], 
        ajax: {
            url     : base_url+"tna/usulan/list-data",
            type    : "get",
            datatype: "json",
            data    : function(d){
                d.action="draft";
                d.is_rejected=0;
            }
                      
        },
        columns: [
            {
                "data": "encrypt_id",
                "className": "text-center",
                "width": "80px",
                "orderable" : false,
                render: function (data, type, row, meta) {
                    var aksi = '';

                    aksi += '<div class="btn-group">'+
                                '<button type="button" class="btn btn-flat btn-default btn-sm dropdown-toggle" data-toggle="dropdown" style="width: 80px;">'+
                                    'Action  <span class="caret"></span>'+
                                '</button>'+
                                '<ul class="dropdown-menu" role="menu">';
                            if(row.urutan==1){
                                aksi += '<li><a href="#" uid="'+data+'" class="btn_usulkan_tna" data-toggle="modal" data-target="#ModalFormUsulan"><i class="fa fa-send"></i> Usulkan</a></li>';
                            }

                            // if(row.urutan==2){
                            //     aksi += '<li><a href="#" uid="'+data+'" class="btn_verifikasi_usulan_tna"  data-toggle="modal" data-target="#ModalFormVerifikasi"><i class="fa fa-check"></i> Verifikasi</a></li>';
                            // }
                           
                            aksi += '<li><a style="cursor:pointer" data-remote="'+base_url+'usulan/detail/'+data+'" data-toggle="modal" data-target="#riwayat-modal"><i class="fa fa-eye"></i>Detail</a></li>';
                            aksi += '<li><a style="cursor:pointer" data-remote="'+base_url+'usulan/riwayat/'+data+'" data-toggle="modal" data-target="#riwayat-modal"><i class="fa fa-list"></i>Riwayat</a></li>';
                            
                            if(row.urutan==1){
                                aksi += '<li><a href="javascript:;" class="btn_edit_usulan_tna"><i class="fa fa-edit"></i>Edit</a></li>';
                                aksi += '<li><a href="javascript:;" class="btn_delete_usulan"><i class="fa fa-trash"></i>Hapus</a></li>';
                            }
                        aksi +='</ul>';
                        aksi +='</div>';
                   
                   
                    return aksi;
                }
            },
            { 
                "data": "tahapan_proses",
                render: function (data, type, row, meta) {
                    return data+"<br>"+row.nama_tahapan;
                } 
            },
            {
                "data": "tna_id",
                "width": "50px"
            },
            { 
                "data": "nama" ,
                render: function (data, type, row, meta) {
                    return row.nik_tg+" | "+data;
                } 
            },
            { "data": "subdit" },
            { "data": "training" },
            { "data": "jenis_pelatihan" },
            { "data": "kompetensi" },
            { "data": "jenis_development" },
            
            { "data": "justifikasi_pengajuan" },
            { "data": "metoda_pembelajaran" },
            { "data": "estimasi_biaya_rp" },
            { "data": "status_karyawan" },
            { "data": "nama_penyelenggara" },
            { "data": "tanggal_pelaksanaan" },
            
            
        ],
        columnDefs: [
            {
                targets: [0],
                orderable: false,
                className: 'text-center',

            }

        ],
    });

    $('#table-tab-verifikasi').DataTable({
        processing: true, 
        serverSide: true, 
        order: [], 
        ajax: {
            url     : base_url+"tna/usulan/list-data",
            type    : "get",
            datatype: "json",
            data    : function(d){
               d.action="verifikasi";
               d.is_rejected=0;
            }
                      
        },
        columns: [
            {
                "data": "encrypt_id",
                "className": "text-center",
                "width": "80px",
                "orderable" : false,
                render: function (data, type, row, meta) {
                    var aksi = '';

                    aksi += '<div class="btn-group">'+
                                '<button type="button" class="btn btn-flat btn-default btn-sm dropdown-toggle" data-toggle="dropdown" style="width: 80px;">'+
                                    'Action  <span class="caret"></span>'+
                                '</button>'+
                                '<ul class="dropdown-menu" role="menu">';
                           
                            if(row.urutan>1 && row.urutan<7){
                                aksi += '<li><a href="#" uid="'+data+'" class="btn_verifikasi_usulan_tna"  data-toggle="modal" data-target="#ModalFormVerifikasi"><i class="fa fa-check"></i> Verifikasi</a></li>';
                            }
                           
                            aksi += '<li><a style="cursor:pointer" data-remote="'+base_url+'usulan/detail/'+data+'" data-toggle="modal" data-target="#riwayat-modal"><i class="fa fa-eye"></i>Detail</a></li>';
                            aksi += '<li><a style="cursor:pointer" data-remote="'+base_url+'usulan/riwayat/'+data+'" data-toggle="modal" data-target="#riwayat-modal"><i class="fa fa-list"></i>Riwayat</a></li>';
                            
                        aksi +='</ul>';
                        aksi +='</div>';
                        aksi +=row.checkbox;
                   
                    // aksi += '<a  data-toggle="modal" data-target="#AddTraining" id="'+data+'" uid="'+data+'" >'+
                    //          '<button value="'+data+'" id="'+data+'" uid="'+data+'" class="btn btn-success btn-xs btn_edit_usulan_tna" data-toggle="tooltip" title="edit" data-placement="bottom"><i class="fa fa-edit"></i> </button>'+   
                    //         '</a> ';

                    // aksi +=  '<button  class="btn btn-danger btn-xs btn_delete_usulan" value="'+data+'" uid="'+data+'" data-toggle="tooltip" title="Hapus" data-placement="bottom">'+
                    //             '<i class="fa fa-trash"></i>'+
                    //         '</button>';
                   
                    return aksi;
                }
            },
            { 
                "data": "tahapan_proses",
                render: function (data, type, row, meta) {
                    return data+"<br>"+row.tahapan;
                } 
            },
            {
                "data": "tna_id",
                "width": "50px"
            },
            { 
                "data": "nama" ,
                render: function (data, type, row, meta) {
                    return row.nik_tg+" | "+data;
                } 
            },
            { "data": "subdit" },
            { "data": "training" },
            { "data": "jenis_pelatihan" },
            { "data": "kompetensi" },
            { "data": "jenis_development" },
            
            { "data": "justifikasi_pengajuan" },
            { "data": "metoda_pembelajaran" },
            { "data": "estimasi_biaya_rp" },
            { "data": "status_karyawan" },
            { "data": "nama_penyelenggara" },
            { "data": "tanggal_pelaksanaan" },
            
            
        ],
        columnDefs: [
            {
                targets: [0],
                orderable: false,
                className: 'text-center',

            }

        ],
    });

    $('#table-tab-verifikasi-vp-hcm').DataTable({
        processing: true, 
        serverSide: true, 
        order: [], 
        ajax: {
            url     : base_url+"tna/usulan/list-data",
            type    : "get",
            datatype: "json",
            data    : function(d){
               d.action="verifikasi-vp-hcm";
               d.is_rejected=0;
            }
                      
        },
        columns: [
            {
                "data": "encrypt_id",
                "className": "text-center",
                "width": "80px",
                "orderable" : false,
                render: function (data, type, row, meta) {
                    var aksi = '';

                    aksi += '<div class="btn-group">'+
                                '<button type="button" class="btn btn-flat btn-default btn-sm dropdown-toggle" data-toggle="dropdown" style="width: 80px;">'+
                                    'Action  <span class="caret"></span>'+
                                '</button>'+
                                '<ul class="dropdown-menu" role="menu">';
                           
                          
                                aksi += '<li><a style="cursor:pointer" data-remote="'+base_url+'usulan/detail/'+data+'" data-toggle="modal" data-target="#riwayat-modal"><i class="fa fa-eye"></i>Detail</a></li>';
                                aksi += '<li><a style="cursor:pointer" data-remote="'+base_url+'usulan/riwayat/'+data+'" data-toggle="modal" data-target="#riwayat-modal"><i class="fa fa-list"></i>Riwayat</a></li>';
                                
                        aksi +='</ul>';
                        aksi +='</div>';
                    
                   
                    return aksi;
                }
            },
            { 
                "data": "tahapan_proses",
                render: function (data, type, row, meta) {
                    return data+"<br>"+row.tahapan;
                } 
            },
            {
                "data": "tna_id",
                "width": "50px"
            },
            { 
                "data": "nama" ,
                render: function (data, type, row, meta) {
                    return row.nik_tg+" | "+data;
                } 
            },
            { "data": "subdit" },
            { "data": "training" },
            { "data": "jenis_pelatihan" },
            { "data": "kompetensi" },
            { "data": "jenis_development" },
            
            { "data": "justifikasi_pengajuan" },
            { "data": "metoda_pembelajaran" },
            { "data": "estimasi_biaya_rp" },
            { "data": "status_karyawan" },
            { "data": "nama_penyelenggara" },
            { "data": "tanggal_pelaksanaan" },
            
            
        ],
        columnDefs: [
            {
                targets: [0],
                orderable: false,
                className: 'text-center',

            }

        ],
    });

    $('#table-tab-rejected').DataTable({
        processing: true, 
        serverSide: true, 
        order: [], 
        ajax: {
            url     : base_url+"tna/usulan/list-data",
            type    : "get",
            datatype: "json",
            data    : function(d){
               d.action="rejected";
               d.is_rejected=1;
            }
                      
        },
        columns: [
            {
                "data": "encrypt_id",
                "className": "text-center",
                "width": "80px",
                "orderable" : false,
                render: function (data, type, row, meta) {
                    var aksi = '';

                    aksi += '<div class="btn-group">'+
                                '<button type="button" class="btn btn-flat btn-default btn-sm dropdown-toggle" data-toggle="dropdown" style="width: 80px;">'+
                                    'Action  <span class="caret"></span>'+
                                '</button>'+
                                '<ul class="dropdown-menu" role="menu">';
                           
                          
                                aksi += '<li><a style="cursor:pointer" data-remote="'+base_url+'usulan/detail/'+data+'" data-toggle="modal" data-target="#riwayat-modal"><i class="fa fa-eye"></i>Detail</a></li>';
                                aksi += '<li><a style="cursor:pointer" data-remote="'+base_url+'usulan/riwayat/'+data+'" data-toggle="modal" data-target="#riwayat-modal"><i class="fa fa-list"></i>Riwayat</a></li>';
                                
                        aksi +='</ul>';
                        aksi +='</div>';
                    
                   
                    return aksi;
                }
            },
            { 
                "data": "tahapan_proses",
                render: function (data, type, row, meta) {
                    return "<span class='label label-danger'>Rejected</span>'";
                } 
            },
            {
                "data": "tna_id",
                "width": "50px"
            },
            { 
                "data": "nama" ,
                render: function (data, type, row, meta) {
                    return row.nik_tg+" | "+data;
                } 
            },
            { "data": "subdit" },
            { "data": "training" },
            { "data": "jenis_pelatihan" },
            { "data": "kompetensi" },
            { "data": "jenis_development" },
            
            { "data": "justifikasi_pengajuan" },
            { "data": "metoda_pembelajaran" },
            { "data": "estimasi_biaya_rp" },
            { "data": "status_karyawan" },
            { "data": "nama_penyelenggara" },
            { "data": "tanggal_pelaksanaan" },
            
            
        ],
        columnDefs: [
            {
                targets: [0],
                orderable: false,
                className: 'text-center',

            }

        ],
    });

    $('#table-tab-usulan-selesai').DataTable({
        processing: true, 
        serverSide: true, 
        order: [], 
        ajax: {
            url     : base_url+"tna/usulan/list-data",
            type    : "get",
            datatype: "json",
            data    : function(d){
               d.action="selesai";
               d.is_rejected=0;
            }
                      
        },
        columns: [
            {
                "data": "encrypt_id",
                "className": "text-center",
                "width": "80px",
                "orderable" : false,
                render: function (data, type, row, meta) {
                    var aksi = '';

                    aksi += '<div class="btn-group">'+
                                '<button type="button" class="btn btn-flat btn-default btn-sm dropdown-toggle" data-toggle="dropdown" style="width: 80px;">'+
                                    'Action  <span class="caret"></span>'+
                                '</button>'+
                                '<ul class="dropdown-menu" role="menu">';
                           
                          
                                aksi += '<li><a style="cursor:pointer" data-remote="'+base_url+'usulan/detail/'+data+'" data-toggle="modal" data-target="#riwayat-modal"><i class="fa fa-eye"></i>Detail</a></li>';
                                aksi += '<li><a style="cursor:pointer" data-remote="'+base_url+'usulan/riwayat/'+data+'" data-toggle="modal" data-target="#riwayat-modal"><i class="fa fa-list"></i>Riwayat</a></li>';
                                
                        aksi +='</ul>';
                        aksi +='</div>';
                    
                   
                    return aksi;
                }
            },
            { 
                "data": "tahapan_proses",
                render: function (data, type, row, meta) {
                    return data+"<br>"+row.tahapan;
                } 
            },
            {
                "data": "tna_id",
                "width": "50px"
            },
            { 
                "data": "nama" ,
                render: function (data, type, row, meta) {
                    return row.nik_tg+" | "+data;
                } 
            },
            { "data": "subdit" },
            { "data": "training" },
            { "data": "jenis_pelatihan" },
            { "data": "kompetensi" },
            { "data": "jenis_development" },
            
            { "data": "justifikasi_pengajuan" },
            { "data": "metoda_pembelajaran" },
            { "data": "estimasi_biaya_rp" },
            { "data": "status_karyawan" },
            { "data": "nama_penyelenggara" },
            { "data": "tanggal_pelaksanaan" },
            
            
        ],
        columnDefs: [
            {
                targets: [0],
                orderable: false,
                className: 'text-center',

            }

        ],
    });

    $(document).on('click', '.btn_usulkan_tna', function() {
        var id = $(this).attr('uid');
        $("#usulan_id").val(id);
    });

    $(document).on('click', '#SubmitUsulkan', function() {
        var id = $(this).attr('uid');
        submitFormUsulkan();
    });

    $(document).on('click', '.item-chechbox', function() {
        var usulan_id = this.value;
        var id = [];
        var rows = document.getElementsByName('is_checkbox_usulan[]');
         var selectedRows = [];
         for (var i = 0, l = rows.length; i < l; i++) {
             if (rows[i].checked) {
                 selectedRows.push(rows[i]);
                 id.push(rows[i].value);
             }
         }
        
         $('#is_checked_usulan').val(id.join());
         $('#is_checked_usulan_total').val(selectedRows.length);
         $('#is_checked_usulan_total_show').html(selectedRows.length);
         
         if(selectedRows.length>0){
             $('.btn_grouping_usulan').show();
         }else{
             $('.btn_grouping_usulan').hide();
         }
    });

    $(document).on('click', '.btn_show_modal_usulan', function() {
        var is_checked = $('#is_checked_usulan').val();
        var is_total = $('#is_checked_usulan_total').val();
        swal({
            title: "Yakin submit usulan TNA?",
            text: "Setelah di klik tunggu proses submit selesai!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Submit!",
            closeOnConfirm: false
        }, function () {

            $.ajax({
                type : "POST",
                url  : base_url+"tna/usulan/submit-verifikasi-bulky",
                dataType: "JSON",
                data : "is_checked="+is_checked,
                success:function(resp){
                    refresh_dashlet();
                    if(resp.success){
                        setTimeout(function() {
                            swal({
                                title: "Notifikasi!",
                                text: resp.msg,
                                imageUrl: img_icon_success
                            }, function() {
                                $('#table-tab-verifikasi').DataTable().ajax.reload( null, false );
                                $('.btn_grouping_usulan').hide();
                            });
                        }, 1000);
                    }else{
                        setTimeout(function() {
                            swal({
                                title: "Notifikasi!",
                                text: resp.msg,
                                imageUrl: img_icon_success
                            }, function() {
                                $('#table-tab-verifikasi').DataTable().ajax.reload( null, false );
                                $('.btn_grouping_usulan').hide();
                            });
                        }, 1000);
                    }
                    
                }

            });
            
        });
    });


    

});