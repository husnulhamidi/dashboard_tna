jQuery(document).ready(function() {
    // training mandiri
    generateTableTrainingMandiri()
    $('.btn-submit-training').click(function(){
        console.log($('#form-submit-training').serialize())
        submitFormTraining();
    })

    $(document).on("click",".btn_delete_training_mandiri",function(){
        var encrypt = this.value;
        swal({
            title: "Yakin Hapus Data ini ?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Ya, Hapus!",
            closeOnConfirm: false
        }, function () {
            console.log("masuk")
            $.ajax({
                type : "POST",
                url  : base_url+"tna/training-mandiri/delete_training_mandiri",
                dataType: "JSON",
                data : "id="+encrypt,
                success:function(resp){
                    console.log(resp)
                    if(resp.success){
                        setTimeout(function() {
                            swal({
                                title: "Notifikasi!",
                                text: "Data berhasil dihapus",
                                imageUrl: img_icon_success
                            }, function() {
                                $('#table-training-mandiri').DataTable().ajax.reload( null, false );
                            });
                        }, 1000);
                    }else{
                        setTimeout(function() {
                            swal({
                                title: "Notifikasi!",
                                text: "Data gagal dihapus",
                                imageUrl: img_icon_error
                            }, function() {
                                $('#table-training-mandiri').DataTable().ajax.reload( null, false );
                            });
                        }, 1000);
                    }
                }
            });
        });    
    });

    // training mandiri admin
    generateTableTrainingMandiriAdmin()
    $(document).on("click",".btn-show-alesan",function(){
       const note = this.value;
       $('#alasan').text(note)
       $('#ModalViewAlasan').modal('show')
    });

    $(document).on("click",".btn-show-keterangan",function(){
        const keterangan = $(this).data('keterangan');
        const tmp = this.value;
        const split = tmp.split('-')
        // console.log(id)
        $('#id').val(split[0])
        $('#is_approval').val(split[1])
        $('#actionBy').text(keterangan)
       $('#ModalVerifikasiTrainingMandiri').modal('show')
    });


    $('.btn-varifikasi').click(function(){
        // console.log($('#form-verifikasi').serialize())
        var status = $("input[name='verifikasi']:checked").val();
        if(status == 'Rejected'){
            if($('#keterangan').val() == ''){ 
                $('.keterangan').addClass("has-error")
                $('#keterangan-error').css('display', 'block')
            }else{
                submitVerifikasi()
            }
        }else{
            submitVerifikasi()
        }
    })
});

function submitFormTraining(){
    $("#form-submit-training").validate({
        rules: {
            kompetensi: "required",
            pelatihan: "required",
            metodePembelajaran: "required",
            ketegoriPelatihan: "required",
            penyelenggara: "required",
            biaya: "required",
            waktu_pelaksanaan: "required",
            justifikasi: "required"
        },
        messages: {
            kompetensi:{
                required:"<i class='fa fa-times'></i> Kompetensi harus diisi"
            }, 
            pelatihan:{
                required:"<i class='fa fa-times'></i> Nama Pelatihan harus diisi"
            }, 
            metodePembelajaran:{
                required:"<i class='fa fa-times'></i> Metode Pembelajaran harus diisi"
            }, 
            ketegoriPelatihan:{
                required:"<i class='fa fa-times'></i> Kategori Pelatihan harus diisi"
            }, 
            penyelenggara:{
                required:"<i class='fa fa-times'></i> Nama Penyelenggara harus diisi"
            }, 
            biaya:{
                required:"<i class='fa fa-times'></i> Biaya harus diisi"
            }, 
            waktu_pelaksanaan:{
                required:"<i class='fa fa-times'></i> Waktu Pelaksanaan harus diisi"
            }, 
            justifikasi:{
                required:"<i class='fa fa-times'></i> Justifikasi harus diisi"
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
            // console.log(new FormData($("#form-submit-training")[0]))
            // var formData = $('#form-submit-training').serialize();
            // var fileInput = document.getElementById('input-file');
            // if(fileInput){
            //     var file = fileInput.files[0];
            //     var fileName = file.name;
            //     formData += '&fileName=' + fileName;
            // }


            // console.log(formData)
            $.ajax({
                url: base_url+"tna/training-mandiri/createOrUpdate",
                type: 'POST',
                data: new FormData($("#form-submit-training")[0]),
                contentType: false,
                cache: false,
                processData:false,
                success: function(response) {
                    var newResponse = JSON.parse(response);
                    if(newResponse.success){
                        setTimeout(function() {
                            swal({
                                title: "Notifikasi!",
                                text: "Data berhasil disimpan",
                                imageUrl: img_icon_success
                            }, function(d) {
                                location.reload();
                                location.href = url_site
                            });
                        }, 1000);
                    }else{
                        setTimeout(function() {
                            swal({
                                title: "Notifikasi!",
                                text: "Data gagal disimpan",
                                imageUrl: img_icon_error
                            }, function() {
                                location.reload();
                            });
                        }, 1000);
                    }                   
                }            
            });
        }
    });
}

function submitVerifikasi(){
    $.ajax({
        url: base_url+"tna/training-mandiri/verifikasi",
        type: 'POST',
        dataType: "JSON",
        data: $('#form-verifikasi').serialize(),
        success: function(response) {
            console.log(response)
            if(response.success){
                setTimeout(function() {
                    swal({
                        title: "Notifikasi!",
                        text: "Data berhasil disimpan",
                        imageUrl: img_icon_success
                    }, function(d) {
                        location.reload();
                        location.href = url_site
                    });
                }, 1000);
            }else{
                setTimeout(function() {
                    swal({
                        title: "Notifikasi!",
                        text: "Data gagal disimpan",
                        imageUrl: img_icon_error
                    }, function() {
                        location.reload();
                    });
                }, 1000);
            }                   
        }            
    });
}

function generateTableTrainingMandiri(){
    oTable = $('#table-training-mandiri').DataTable({
        processing: true, 
        serverSide: true, 
        order: [], 
        ajax: {
            url     : base_url+"tna/training-mandiri/getDataTrainingMandiri",
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
            { "data": "karyawan" },
            { 
                "data": "unit",
                render:function(data, type, row, meta){
                    var result = '-'
                    if(data){
                        result = data
                    }
                    return result
                } 
            },
            { 
                "data": "is_aktif",
                render:function(data, type, row, meta){
                    var result = '1'
                    if(data){
                        result = '0'
                    }

                    var res = 'Tidak Aktif'
                    if(result == 1){
                        res = 'Aktif'
                    }
                    return res
                } 
            },
            { 
                "data": "kompetensi" ,
                "class":"text-nowrap",
            },
            { 
                "data": "pelatihan",
                "class":"text-nowrap", 
            },
            { "data": "kategori_pelatihan" },
            { "data": "metoda_pembelajaran" },
            { "data": "nama_penyelenggara" },
            { 
                "data": "biaya",
                "class":"text-right text-nowrap",
                render:function(data, type, row, meta){
                    return formatRupiah(data, 'Rp. ');
                } 
            },
            { 
                "data": "tanggal_mulai" ,
                "class":"text-nowrap",
                render: function (data, type, row, meta) {
                    const tglMulai = formatDate(data)
                    const tglSelesai = formatDate(row.tanggal_selesai)
                    return tglMulai + ' s/d ' + tglSelesai;
                }
            },
            { "data": "justifikasi_pelatihan" },
            { 
                "data": "status_approval",
                render: function (data, type, row, meta) {

                    if(data == 'Pending')return `<span class="label label-warning"><i class="fa fa-lock"></i> ` + data + ` </span>`;
                    if(data == 'Approved'){
                        var notes="";
                        if(row.alasan_rejected != null){
                            notes = `<button 
                                        value='`+row.alasan_rejected+`' 
                                        class="btn btn-default btn-xs btn-show-alesan" 
                                        data-toggle="modal">
                                        <i class="fa fa-eye" id="btn-show-alesan"></i> Lihat Ket. 
                                    </button>`
                        }
                        return `<span class="label label-success"><i class="fa fa-check"></i> ` + data + ` </span><br>`+notes
                        // return `<span class="label label-success"><i class="fa fa-check"></i> ` + data + ` </span>`;
                    }
                    if(data == 'Rejected'){
                        return `<span class="label label-danger"><i class="fa fa-close"></i> ` + data + ` </span>
                                <button 
                                    value='`+row.alasan_rejected+`' 
                                    class="btn btn-default btn-xs btn-show-alesan" 
                                    data-toggle="modal">
                                    <i class="fa fa-eye" id="btn-show-alesan"></i> Lihat Ket. 
                                </button>`
                    };
                } 
            },
            {
                "data": "id",
                "className": "text-center",
                "width": "80px",
                "orderable" : false,
                render: function (data, type, row, meta) {
                    var aksi = '';
                    aksi += `
                        <a href="`+url+'/'+data+`" title="edit" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>&nbsp;
                        <button 
                            class="btn btn-danger btn-xs btn_delete_training_mandiri"
                            value=`+data+` 
                            uid=`+data+` 
                            data-toggle="tooltip" 
                            title="Hapus" 
                            data-placement="bottom">
                                '<i class="fa fa-trash"></i>
                        </button>&nbsp;
                    `;
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
}

function generateTableTrainingMandiriAdmin(){
    oTable2 = $('#table-training-mandiri-admin').DataTable({
        processing: true, 
        serverSide: true, 
        order: [], 
        ajax: {
            url     : base_url+"tna/training-mandiri/getDataTrainingMandiri",
            type    : "get",
            datatype: "json",
            data    : function(d){
                // console.log(d)
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
            { "data": "karyawan" },
            { 
                "data": "unit",
                render:function(data, type, row, meta){
                    var result = '-'
                    if(data){
                        result = data
                    }
                    return result
                } 
            },
            { 
                "data": "is_aktif",
                render:function(data, type, row, meta){
                    var result = '1'
                    if(data){
                        result = '0'
                    }

                    var res = 'Tidak Aktif'
                    if(result == 1){
                        res = 'Aktif'
                    }
                    return res
                } 
            },
            { 
                "data": "kompetensi" ,
                "class":"text-nowrap",
            },
            { 
                "data": "pelatihan",
                "class":"text-nowrap", 
            },
            { "data": "kategori_pelatihan" },
            { "data": "metoda_pembelajaran" },
            { "data": "nama_penyelenggara" },
            { 
                "data": "biaya",
                "class":"text-right text-nowrap",
                render:function(data, type, row, meta){
                    return formatRupiah(data, 'Rp. ');
                } 
            },
            { 
                "data": "tanggal_mulai" ,
                "class":"text-nowrap",
                render: function (data, type, row, meta) {
                    const tglMulai = formatDate(data)
                    const tglSelesai = formatDate(row.tanggal_selesai)
                    return tglMulai + ' s/d ' + tglSelesai;
                }
            },
            { "data": "justifikasi_pelatihan" },
            { 
                "data": "status_approval",
                render: function (data, type, row, meta) {
                    // console.log(row)

                    // return data
                    if(data == 'Pending'){
                        var button = '';
                        if(row.is_approval_admin == 1){
                            button = button + `<button
                                                    value='`+row.id+'-'+row.is_approval_admin+`'
                                                    data-keterangan="By AVP"
                                                    class="btn btn-success btn-xs btn-show-keterangan" 
                                                        data-toggle="modal" 
                                                        >
                                                        <i class="fa fa-check"></i>Approved By Admin
                                                </button>`
                        }else{
                            button = button + `<button
                                            value='`+row.id+'-'+row.is_approval_admin+`'
                                            data-keterangan="By Admin"
                                            class="btn btn-warning btn-xs btn-show-keterangan" 
                                                data-toggle="modal" 
                                                >
                                                <i class="fa fa-lock"></i>`+data+`
                                        </button>`
                        }

                        return button;
                        
                    }
                    if(data == 'Approved'){
                        const ket = data + ' By AVP '
                        return `<span class="label label-success"><i class="fa fa-check"></i> ` + ket + ` </span>`;
                    }
                    if(data == 'Rejected'){
                        return `<span class="label label-danger"><i class="fa fa-close"></i> ` + data + ` </span>
                                 <button 
                                    
                                    value='`+row.alasan_rejected+`' 
                                    class="btn btn-default btn-xs btn-show-alesan" 
                                    data-toggle="modal">
                                    <i class="fa fa-eye" id="btn-show-alesan"></i> Lihat Ket. 
                                </button>`
                    };
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
}

