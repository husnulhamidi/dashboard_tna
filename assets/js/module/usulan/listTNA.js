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

function collect_checkbox(){
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
}

jQuery(document).ready(function() {
    buildTable()
    $('.btn-filter').click(function(){
        $('#ModalFilterUsulan').modal('hide')
        buildTable();
     })

    $('body').on('hidden.bs.modal', '.modal', function() {
        $(this).removeData('bs.modal');
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
        collect_checkbox();
    });

    $('#checkAllVpHCM').on('change', function () {
        if ($(this).prop('checked') == true) {
           $('#table-tab-verifikasi-vp-hcm').DataTable().$('input[type=checkbox]').prop('checked', true);
           $('#table-tab-verifikasi-vp-hcm').DataTable().$('input[type=checkbox]').closest('tr').css('background', '#F1F9FF');
        } else {
           $('#table-tab-verifikasi-vp-hcm').DataTable().$('input[type=checkbox]').prop('checked', false);
           $('#table-tab-verifikasi-vp-hcm').DataTable().$('input[type=checkbox]').each(function (k, v) {
                if ($(this).closest('tr').hasClass('odd')) {
                    $(this).closest('tr').css('background', '#F7FAFF');
                } else {
                    $(this).closest('tr').css('background', 'white');
                }
            });
        }
        collect_checkbox();
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

function buildTable(){
    buildTableUsulanTna()
    buildTableVerifikasi()
    buildTableVerifikasiHcm()
    buildTableRejected()
    buildTableSelesai()
}
function buildTableUsulanTna(){
    if ($.fn.DataTable.isDataTable('#table-usulan-tna')) {
        $('#table-usulan-tna').DataTable().destroy();
    }
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
                d.filter_direktorat = $('#filter_direktorat').val()
                d.filter_subdit = $('#filter_subdit').val()
                
                d.filter_karyawan = $('#filter_karyawan').val()
                d.filter_status_karyawan = $('#filter_status_karyawan').val()
                d.filter_kompetensi = $('#filter_kompetensi').val()
                d.filter_jenis_development = $('#filter_jenis_development').val()
                d.filter_nama_pelatihan = $('#filter_nama_pelatihan').val()
                d.filter_justifikasi = $('#filter_justifikasi').val()
                d.filter_metoda_pembelajaran = $('#filter_metoda_pembelajaran').val()
                d.filter_biaya_min = $('#filter_biaya_min').val()
                d.filter_biaya_max = $('#filter_biaya_max').val()
                d.filter_penyelenggara = $('#filter_penyelenggara').val()
                d.filter_tahapan = $('#filter_tahapan').val()
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
                           
                            aksi += '<li><a style="cursor:pointer" data-remote="'+base_url+'usulan/detail/'+data+'" data-toggle="modal" data-target="#common-modal"><i class="fa fa-eye"></i>Detail</a></li>';
                            aksi += '<li><a style="cursor:pointer" data-remote="'+base_url+'usulan/riwayat/'+data+'" data-toggle="modal" data-target="#common-modal"><i class="fa fa-list"></i>Riwayat</a></li>';
                            
                            if(row.urutan==1){
                                aksi += '<li><a href="'+base_url+'tna/usulan/edit/'+data+'" uid="'+data+'" class="btn_edit_usulan_tna"><i class="fa fa-edit"></i>Edit</a></li>';
                                aksi += '<li><a href="javascript:;" uid="'+data+'" class="btn_delete_usulan"><i class="fa fa-trash"></i>Hapus</a></li>';
                            }

                            if(row.urutan==3){
                                aksi += '<li><a href="'+base_url+'tna/usulan/edit/'+data+'" uid="'+data+'" class="btn_edit_usulan_tna"><i class="fa fa-edit"></i>Edit</a></li>';
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
                "width": "50px",
                render: function (data, type, row, meta) {
                    
                    if(row.is_urgent==1){
                        return "<div class='btn btn-danger' data-toggle='tooltip' title='Urgent'>"+data+"</div>";
                    }else{
                        return data;
                    }
                } 
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
}

function buildTableVerifikasi(){
    if ($.fn.DataTable.isDataTable('#table-tab-verifikasi')) {
        $('#table-tab-verifikasi').DataTable().destroy();
    }
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
               d.filter_direktorat = $('#filter_direktorat').val()
                d.filter_subdit = $('#filter_subdit').val()
                
                d.filter_karyawan = $('#filter_karyawan').val()
                d.filter_status_karyawan = $('#filter_status_karyawan').val()
                d.filter_kompetensi = $('#filter_kompetensi').val()
                d.filter_jenis_development = $('#filter_jenis_development').val()
                d.filter_nama_pelatihan = $('#filter_nama_pelatihan').val()
                d.filter_justifikasi = $('#filter_justifikasi').val()
                d.filter_metoda_pembelajaran = $('#filter_metoda_pembelajaran').val()
                d.filter_biaya_min = $('#filter_biaya_min').val()
                d.filter_biaya_max = $('#filter_biaya_max').val()
                d.filter_penyelenggara = $('#filter_penyelenggara').val()
                d.filter_tahapan = $('#filter_tahapan').val()
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
                            
                            aksi += '<li><a style="cursor:pointer" data-remote="'+base_url+'usulan/detail/'+data+'" data-toggle="modal" data-target="#common-modal"><i class="fa fa-eye"></i>Detail</a></li>';
                            aksi += '<li><a style="cursor:pointer" data-remote="'+base_url+'usulan/riwayat/'+data+'" data-toggle="modal" data-target="#common-modal"><i class="fa fa-list"></i>Riwayat</a></li>';
                            if(row.urutan==3){
                                aksi += '<li><a href="'+base_url+'tna/usulan/edit/'+data+'" uid="'+data+'" class="btn_edit_usulan_tna"><i class="fa fa-edit"></i>Edit</a></li>';
                            }
                           
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
                    return data+"<br>"+row.nama_tahapan;
                } 
            },
            {
                "data": "tna_id",
                "width": "50px",
                render: function (data, type, row, meta) {
                    
                    if(row.is_urgent==1){
                        return "<div class='btn btn-danger' data-toggle='tooltip' title='Urgent'>"+data+"</div>";
                    }else{
                        return data;
                    }
                } 
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
}

function buildTableVerifikasiHcm(){
    if ($.fn.DataTable.isDataTable('#table-tab-verifikasi-vp-hcm')) {
        $('#table-tab-verifikasi-vp-hcm').DataTable().destroy();
    }
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
               d.filter_direktorat = $('#filter_direktorat').val()
                d.filter_subdit = $('#filter_subdit').val()
                
                d.filter_karyawan = $('#filter_karyawan').val()
                d.filter_status_karyawan = $('#filter_status_karyawan').val()
                d.filter_kompetensi = $('#filter_kompetensi').val()
                d.filter_jenis_development = $('#filter_jenis_development').val()
                d.filter_nama_pelatihan = $('#filter_nama_pelatihan').val()
                d.filter_justifikasi = $('#filter_justifikasi').val()
                d.filter_metoda_pembelajaran = $('#filter_metoda_pembelajaran').val()
                d.filter_biaya_min = $('#filter_biaya_min').val()
                d.filter_biaya_max = $('#filter_biaya_max').val()
                d.filter_penyelenggara = $('#filter_penyelenggara').val()
                d.filter_tahapan = $('#filter_tahapan').val()
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
                           
                          
                                aksi += '<li><a style="cursor:pointer" data-remote="'+base_url+'usulan/detail/'+data+'" data-toggle="modal" data-target="#common-modal"><i class="fa fa-eye"></i>Detail</a></li>';
                                aksi += '<li><a style="cursor:pointer" data-remote="'+base_url+'usulan/riwayat/'+data+'" data-toggle="modal" data-target="#common-modal"><i class="fa fa-list"></i>Riwayat</a></li>';
                                
                        aksi +='</ul>';
                        aksi +='</div>';
                        aksi +=row.checkbox;
                   
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
}

function buildTableRejected(){
    if ($.fn.DataTable.isDataTable('#table-tab-rejected')) {
        $('#table-tab-rejected').DataTable().destroy();
    }
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
                d.filter_direktorat = $('#filter_direktorat').val()
                d.filter_subdit = $('#filter_subdit').val()
                
                d.filter_karyawan = $('#filter_karyawan').val()
                d.filter_status_karyawan = $('#filter_status_karyawan').val()
                d.filter_kompetensi = $('#filter_kompetensi').val()
                d.filter_jenis_development = $('#filter_jenis_development').val()
                d.filter_nama_pelatihan = $('#filter_nama_pelatihan').val()
                d.filter_justifikasi = $('#filter_justifikasi').val()
                d.filter_metoda_pembelajaran = $('#filter_metoda_pembelajaran').val()
                d.filter_biaya_min = $('#filter_biaya_min').val()
                d.filter_biaya_max = $('#filter_biaya_max').val()
                d.filter_penyelenggara = $('#filter_penyelenggara').val()
                d.filter_tahapan = $('#filter_tahapan').val()
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
                           
                          
                                aksi += '<li><a style="cursor:pointer" data-remote="'+base_url+'usulan/detail/'+data+'" data-toggle="modal" data-target="#common-modal"><i class="fa fa-eye"></i>Detail</a></li>';
                                aksi += '<li><a style="cursor:pointer" data-remote="'+base_url+'usulan/riwayat/'+data+'" data-toggle="modal" data-target="#common-modal"><i class="fa fa-list"></i>Riwayat</a></li>';
                                
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
}

function buildTableSelesai(){
    if ($.fn.DataTable.isDataTable('#table-tab-usulan-selesai')) {
        $('#table-tab-usulan-selesai').DataTable().destroy();
    }
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
               d.filter_direktorat = $('#filter_direktorat').val()
                d.filter_subdit = $('#filter_subdit').val()
                
                d.filter_karyawan = $('#filter_karyawan').val()
                d.filter_status_karyawan = $('#filter_status_karyawan').val()
                d.filter_kompetensi = $('#filter_kompetensi').val()
                d.filter_jenis_development = $('#filter_jenis_development').val()
                d.filter_nama_pelatihan = $('#filter_nama_pelatihan').val()
                d.filter_justifikasi = $('#filter_justifikasi').val()
                d.filter_metoda_pembelajaran = $('#filter_metoda_pembelajaran').val()
                d.filter_biaya_min = $('#filter_biaya_min').val()
                d.filter_biaya_max = $('#filter_biaya_max').val()
                d.filter_penyelenggara = $('#filter_penyelenggara').val()
                d.filter_tahapan = $('#filter_tahapan').val()
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
                           
                          
                                aksi += '<li><a style="cursor:pointer" data-remote="'+base_url+'usulan/detail/'+data+'" data-toggle="modal" data-target="#common-modal"><i class="fa fa-eye"></i>Detail</a></li>';
                                aksi += '<li><a style="cursor:pointer" data-remote="'+base_url+'usulan/riwayat/'+data+'" data-toggle="modal" data-target="#common-modal"><i class="fa fa-list"></i>Riwayat</a></li>';
                                
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
}