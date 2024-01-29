jQuery(document).ready(function() {
    
    oTable = $('#table-usulan-tna').DataTable({
        processing: true, 
        serverSide: true, 
        order: [], 
        ajax: {
            url     : base_url+"tna/usulan/list-data",
            type    : "get",
            datatype: "json",
            data    : function(d){
               
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
                                aksi += '<li><a href="javascript;"  data-toggle="modal" data-target="#ModalFormUsulan"><i class="fa fa-send"></i> Usulkan</a></li>';
                            }

                            if(row.urutan>1 && row.urutan<7){
                                aksi += '<li><a href="javascript;"  data-toggle="modal" data-target="#ModalFormUsulan"><i class="fa fa-check"></i> Verifikasi</a></li>';
                            }
                           
                            aksi += '<li><a href="javascript;"><i class="fa fa-eye"></i>Detail</a></li>';
                            aksi += '<li><a href="javascript;" data-toggle="modal" data-target="#ModalRiwayatUsulan"><i class="fa fa-list"></i>Riwayat</a></li>';
                            
                            if(row.urutan==1){
                                aksi += '<li><a href="javascript:;" class="btn_edit_usulan_tna"><i class="fa fa-edit"></i>Edit</a></li>';
                                aksi += '<li><a href="javascript:;" class="btn_delete_usulan"><i class="fa fa-trash"></i>Hapus</a></li>';
                            }
                        aksi +='</ul>';
                        aksi +='</div>';
                   
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


    

});