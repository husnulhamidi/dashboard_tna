jQuery(document).ready(function() {
   $('#tbl-internal-sharing-emp').DataTable()
   buildTableInternalSharingAdmin()
   buildTableInternalSharingKaryawan()
   getNarasumber()
   // internal sharing admin
    $('.submit-internal-sharing').click(function(){
       submitFormInternalSharingHCM()
    })

    $('#submit-confirm').click(function(){
        submitConform()
    })

    $('#submit-feedback').click(function(){
        submitFeedback()
    })

    $('.btn-filter').on('click', function() {
        $('#modalFilter').modal('hide')
        const table = $('#tbl-internal-sharing-hcpd').DataTable();
        table.destroy();
        buildTableInternalSharingAdmin()

        // const table2 = $('#tbl-internal-sharing-hcpd').DataTable();
        // table2.destroy();
        buildTableInternalSharingKaryawan()
    });
});

function deleteData(id){
    // alert(id)
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
            url  : base_url+"tna/internalSharing/deleteData/all",
            dataType: "JSON",
            data : "id="+id,
            success:function(resp){
                console.log(resp)
                if(resp.success){
                    setTimeout(function() {
                        swal({
                            title: "Notifikasi!",
                            text: "Data berhasil dihapus",
                            imageUrl: img_icon_success
                        }, function() {
                            location.reload();
                        });
                    }, 1000);
                }else{
                    setTimeout(function() {
                        swal({
                            title: "Notifikasi!",
                            text: "Data gagal dihapus",
                            imageUrl: img_icon_error
                        }, function() {
                            location.reload();
                        });
                    }, 1000);
                }
            }
        });
    }); 
}

function getNarasumber(){
    $('#filter_narasumber').empty()
    $('#filter_narasumber').append('<option></option')
    $.ajax({
        url:base_url+'tna/internalSharing/getNarasumber',
        method: 'get',
        dataType: 'json',
        success: function(response){
            for (var i = 0; i < response.length; i++) {
                var selected = "";
                // if(datafilter_narasumber == response[i]['id']){
                //     selected = "selected";
                // }
                $('#filter_narasumber').append('<option '+selected+' value='+response[i]['id']+'>'+response[i]['nama']+'</option>')
            }
        }
    });
}
// internal sharing admin
function submitFormInternalSharingHCM(){
    $(".form-InternalSharing").validate({
        rules: {
            judul: "required",
            direktorat: "required",
            pemateri: "required",
            tgl: "required",
            time: "required",
            tempat: "required",
            biaya: "required",
            kuota: "required",
            jobFamily: "required",
            jobFunc: "required",
            jobRole: "required",
            kompetensi: "required",
            jenis_pelatihan: "required",
            jenis_development: "required",
            tna: "required",
            metoda: "required",
        },
        messages: {
            judul:{
                required:"<i class='fa fa-times'></i> Judul Materi harus diisi"
            },
            direktorat:{
                required:"<i class='fa fa-times'></i> Subdit/unit harus diisi"
            },
            pemateri:{
                required:"<i class='fa fa-times'></i> Pemateri harus diisi"
            },
            tgl:{
                required:"<i class='fa fa-times'></i> Tanggal harus diisi"
            },
            time:{
                required:"<i class='fa fa-times'></i> Jam harus diisi"
            },
            tempat:{
                required:"<i class='fa fa-times'></i> Tempat harus diisi"
            },
            biaya:{
                required:"<i class='fa fa-times'></i> Biaya harus diisi"
            },
            kuota:{
                required:"<i class='fa fa-times'></i> kuota harus diisi"
            },
            jobFamily:{
                required:"<i class='fa fa-times'></i> Job Family harus diisi"
            },
            jobFunc:{
                required:"<i class='fa fa-times'></i> Job Function harus diisi"
            },
            jobRole:{
                required:"<i class='fa fa-times'></i> Job Role harus diisi"
            },
            kompetensi:{
                required:"<i class='fa fa-times'></i> Kompetensi harus diisi"
            },
            jenis_pelatihan:{
                required:"<i class='fa fa-times'></i> Jenis pelatihan harus diisi"
            },
            jenis_development:{
                required:"<i class='fa fa-times'></i> Jenis development karyawan harus diisi"
            },
            metoda:{
                required:"<i class='fa fa-times'></i> Metode Pembelajaran harus diisi"
            },
            tna:{
                required:"<i class='fa fa-times'></i> Pelatihan/Sertifikasi (TNA) harus diisi"
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
                url: base_url+"tna/internalSharing/createOrUpdate",
                type: 'POST',
                dataType: "JSON",
                data: $(form).serialize(),
                // data: new FormData($(".form-InternalSharing")[0]),
                // contentType: false,
                // cache: false,
                // processData:false,
                success: function(response) {
                    var newResponse = JSON.parse(response);
                    if(newResponse.success){
                        setTimeout(function() {
                            swal({
                                title: "Notifikasi!",
                                text: "Data berhasil disimpan",
                                imageUrl: img_icon_success
                            }, function(d) {
                                location.href = base_url+'tna/internalSharing'
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

function buildTableInternalSharingAdmin(){
      oTable = $('#tbl-internal-sharing-hcpd').DataTable({
        processing: true, 
        serverSide: true, 
        order: [], 
        ajax: {
            url     : base_url+"tna/internalSharing/getDataAdmin",
            type    : "get",
            datatype: "json",
            data    : function(d){
                d.filter_materi = $('#filter_materi').val()
                d.filter_narasumber = $('#filter_narasumber').val()
                d.filter_tgl_mulai = $('#filter_tgl_mulai').val()
                d.filter_tgl_selesai = $('#filter_tgl_selesai').val()
                d.tempat = $('#tempat').val()
                d.filter_biaya_min = $('#filter_biaya_min').val()
                d.filter_biaya_max = $('#filter_biaya_max').val()

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
            { "data": "judul_materi" },
            // { 
            //     "data": "materi",
            //     render:function(data, type, row, meta){
            //         let result = '-'
            //         if(data){
            //             result = `<a href="${base_url}${data}" target="_blank" class="btn btn-success btn-xs"> <i class="fa fa-download"></i> File Materi</a>`
            //         }
            //         return result
            //     } 
            // },
            { "data": "kompetensi" },
            { "data": "narasumber" },
            { "data": "organisasi" },
            { 
                "data": "tanggal",
                render:function(data, type, row, meta){
                    let tgl = formatDate(row.tanggal_mulai) + ' s/d ' +  formatDate(row.tanggal_selesai)
                    if(row.tanggal_mulai == null){
                        tgl = formatDate(data)
                    }
                    return tgl
                } 
            },
            { "data": "jam" },
            { "data": "tempat" },
            { 
                "data": "biaya",
                render:function(data, type, row, meta){
                    return formatRupiah(data,'Rp.')
                } 
            },
            { 
                "data": "m_tna_training_id", 
                render:function(data, type, row, meta){
                    let ket = 'Inisiasi'
                    if(data){
                        ket = 'TNA'
                    }
                    return ket
                }
            },
            { 
                "data": "jumlah_peserta",
                render:function(data, type, row, meta){
                    return data+' Peserta'
                } 
            },
            { 
                "data": "id",
                render:function(data, type, row, meta){
                    let html = `<div class="input-group-btn">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Aksi
                                    <span class="fa fa-caret-down"></span></button>
                                  <ul class="dropdown-menu">
                                    <li><a href="`+action_url_edit+'/'+data+`">Edit</a></li>
                                    <li>
                                        <a onclick="deleteData(`+data+`)">Hapus</a>
                                    </li>
                                    <li><a href="`+action_url_detail+'/'+data+`">Detail</a></li>
                                    <li>
                                        <a
                                        target="_blank" 
                                        href="`+action_url_generate+'/'+data+'/all'+`">Generate Sertifikat
                                        </a>
                                    </li>
                                    <li>
                                        <a
                                            href="javascript:void(0)"
                                            onclick="showModalFeedback(`+row.id+`,`+row.idNarasumber+`,'admin')" 
                                            data-toggle="tooltip" 
                                            data-placement="bottom" 
                                        >
                                            Show Feedback
                                        </a>
                                    </li>
                                  </ul>
                                </div>`
                
                    return html
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

// internal sharing karyawan
function buildTableInternalSharingKaryawan(){
    $('#tbl-internal-sharing-emp').DataTable().destroy();
    $('#tbl-internal-sharing-emp').DataTable({
        processing: true, 
        serverSide: true, 
        order: [], 
        ajax: {
            url     : base_url+"tna/internalSharing/getDataAdmin",
            type    : "get",
            datatype: "json",
            data    : function(d){
                d.filter_materi = $('#filter_materi').val()
                d.filter_narasumber = $('#filter_narasumber').val()
                d.filter_tgl_mulai = $('#filter_tgl_mulai').val()
                d.filter_tgl_selesai = $('#filter_tgl_selesai').val()
                d.tempat = $('#tempat').val()
                d.filter_biaya_min = $('#filter_biaya_min').val()
                d.filter_biaya_max = $('#filter_biaya_max').val()
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
            { "data": "judul_materi" },
            { "data": "narasumber" },
            { "data": "organisasi" },
            { 
                "data": "tanggal",
                render:function(data, type, row, meta){
                    return formatDate(data)
                } 
            },
            { "data": "jam" },
            { "data": "tempat" },
            { 
                "data": "biaya",
                render:function(data, type, row, meta){
                    return formatRupiah(data,'Rp.')
                } 
            },
            { 
                "data": "m_tna_training_id", 
                render:function(data, type, row, meta){
                    let ket = 'Inisiasi'
                    if(data){
                        ket = 'TNA'
                    }
                    return ket
                }
            },
            { 
                "data": "jumlah_peserta",
                render:function(data, type, row, meta){
                    return data+' Peserta'
                } 
            },
            { 
                "data": "id",
                render:function(data, type, row, meta){
                    // var respon = 'Tidak ikut'
                    // if(row.jumlah_ikut > '0'){
                    //     respon = 'Ikut'
                    // }
                    // return respon
                    // let html = `<div class="input-group-btn">
                    //               <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Aksi
                    //                 <span class="fa fa-caret-down"></span></button>
                    //               <ul class="dropdown-menu">
                    //                 <li><a href="`+action_url_edit+'/'+data+`">Edit</a></li>
                    //                 <li>
                    //                     <a onclick="deleteData(`+data+`)">Hapus</a>
                    //                 </li>
                    //                 <li><a href="`+action_url_detail+'/'+data+`">Detail</a></li>
                    //                 <li>
                    //                     <a
                    //                     target="_blank" 
                    //                     href="`+action_url_generate+`">Generate Sertifikat
                    //                     </a>
                    //                 </li>
                    //               </ul>
                    //             </div>`
                    // return html
                    var html = ` <a 
                                    href="`+action_url_detail+'/'+data+`" 
                                    data-toggle='tooltip' 
                                    data-placement='bottom' 
                                    title='Detail' 
                                    class='btn btn-info btn-xs'>
                                   <i class='fa fa-eye' ></i> 
                                </a>&nbsp;`
                    if(row.jumlah_ikut > 0){
                        html = html+`<button
                                        onclick="showModal('batal','`+row.judul_materi+`',`+row.id+`)" 
                                        data-toggle="tooltip" 
                                        data-placement="bottom" 
                                        title="klik untuk batal ikut internal sharing" 
                                        class="btn btn-danger btn-xs">
                                        <i class="fa fa-fw fa-remove"></i>
                                    </button>&nbsp;`
                    }else{
                        html = html+`<button 
                                        onclick="showModal('daftar','`+row.judul_materi+`',`+row.id+`)" 
                                        data-toggle="tooltip" 
                                        data-placement="bottom" 
                                        title="klik untuk daftar internal sharing" 
                                        class="btn btn-success btn-xs">
                                        <i class="fa fa-file-text"></i>
                                    </button>&nbsp;`
                    }

                    html = html+`<button
                                onclick="showModalFeedback(`+row.id+`,`+row.idNarasumber+`)" 
                                data-toggle="tooltip" 
                                data-placement="bottom" 
                                title="Feedback" 
                                class="btn btn-primary btn-xs">
                                <i class="fa fa-comments-o" aria-hidden="true"></i>
                            </button>&nbsp;`

                    return html
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

function showModal(ket, pelatihan, idSharing){
    var formattedDateTime = getCurrentDateTime();
    // console.log(formattedDateTime);
    var label = 'Konfirmasi Pendaftaran Internal Sharing'
    var text = 'Apakah anda yakin mau daftar Internal Sharing'
    var text2 = pelatihan
    var nameBtn = 'Ya, Daftar!'
    if(ket == 'batal'){
        label = 'Konfirmasi Pembatalan Internal Sharing'
        text = 'Apakah anda yakin mau membatalkan keikutsertaan Internal Sharing'
        nameBtn = 'Ya, Batal!'
    }
    $('#label').text(label)
    $('#text').text(text)
    $('#ket').val(ket)
    $('#text2').html('<b> '+ pelatihan + ' pada '+ formattedDateTime +'</b> ')
    $('#nameBtn').text(nameBtn)
    $('#idSharing').val(idSharing)
    $('#modalConfirm').modal('show')
}

function submitConform(){
    $.ajax({
        url: base_url+"tna/internalSharing-employee/confirm",
        type: 'POST',
        dataType: "JSON",
        data: $('#form-confirm').serialize(),
        success: function(response) {
            if(response.success){
                setTimeout(function() {
                    swal({
                        title: "Notifikasi!",
                        text: "Data berhasil disimpan",
                        imageUrl: img_icon_success
                    }, function(d) {
                        location.reload();
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

function showModalFeedback(id, source_karyawan_id, is_admin = false){
    $('#id').val(id)
    $('#source_karyawan_id').val(source_karyawan_id)
    if(is_admin == false){
        $('.submit-feedback').css('display','block')
        // getDataFeedbackMateri();
        // getDataFeedbackNarasumber();
    }
    // else{
    //     getDataFeedbackMateriAdmin(id, source_karyawan_id);
    //     getDataFeedbackNarasumberAdmin(id, source_karyawan_id);
    // }
    getDataFeedbackMateriAdmin(id, source_karyawan_id);
    getDataFeedbackNarasumberAdmin(id, source_karyawan_id);
    
    $('#modalFeedback').modal('show')
}

function getDataFeedbackMateriAdmin(id, source_karyawan_id){
    $('#body-table-materi').empty()
    var totalNilaiMateriAdmin = 0;
    $.ajax({
        type : "POST",
        url  : base_url+"tna/internalSharing-employee/getDataFeedbackAdmin",
        data:{
            group:'Materi',
            karywanId:source_karyawan_id,
            internalSharingId:id,
            source:'Internal Sharing'
        },
        dataType: "JSON",
        success:function(resp){
            if(resp.length > 0){
                $('.submit-feedback').css('display','none')
                $('#manfaat').val(resp[0].manfaat_yg_diperoleh)
                $('#kritik_saran').val(resp[0].kritik_saran)
                $('#total_materi').val(resp[0].skor_materi)
                $('#total_narasumber').val(resp[0].skor_narasumber)
                $('#is_update').val(true)
                resp.forEach((element, index) => {
                    let number_materi = index + 1;
                    var htmlGroup = createFeedbackRow(element, 'materi', number_materi);
                    $('#body-table-materi').append(htmlGroup);
                })
                
            }else{
                getDataFeedbackMateri()
                $('#is_update').val(false)
                $('#manfaat').val('')
                $('#kritik_saran').val('')
                $('#total_materi').val('')
                $('#total_narasumber').val('')
            }

            $('input[type=radio], input[type=checkbox]').on('change', function () {
                totalNilaiMateriAdmin = calculateTotalValue('materi');
                $('#total_materi').val(totalNilaiMateriAdmin);
            });
        },
    });
}

function getDataFeedbackNarasumberAdmin(id, source_karyawan_id){
    $('#body-table-narasumber').empty()
    var totalNilaiNarasumberAdmin = 0;
    $.ajax({
        type : "POST",
        url  : base_url+"tna/internalSharing-employee/getDataFeedbackAdmin",
        data:{
            group:'Narasumber',
            karywanId:source_karyawan_id,
            internalSharingId:id,
            source:'Internal Sharing'
        },
        dataType: "JSON",
        success:function(resp){
            console.log(resp)
            if(resp.length > 0){
                resp.forEach((element, index) => {
                    let number_narasumber = index+1
                    var htmlGroup = createFeedbackRow(element, 'narasumber', number_narasumber);
                    $('#body-table-narasumber').append(htmlGroup);
                })
            }else{
                getDataFeedbackNarasumber()
            }
            $('input[type=radio], input[type=checkbox]').on('change', function () {
                totalNilaiNarasumberAdmin = calculateTotalValue('narasumber');
                $('#total_narasumber').val(totalNilaiNarasumberAdmin);
            })
        },
    });
}

function getDataFeedbackMateri(){
    $('#body-table-materi').empty()
    var totalNilaiMateri = 0;
    $.ajax({
        type : "POST",
        url  : base_url+"tna/internalSharing-employee/getDataFeedback",
        data:{group:'Materi'},
        dataType: "JSON",
        success:function(resp){
            if(resp.length > 0){
                resp.forEach((element, index) => {
                    let number_materi = index + 1;
                    var htmlGroup = createFeedbackRow(element, 'materi', number_materi);
                    $('#body-table-materi').append(htmlGroup);
                })
            }
            $('input[type=radio], input[type=checkbox]').on('change', function () {
                totalNilaiMateri = calculateTotalValue('materi');
                $('#total_materi').val(totalNilaiMateri);
            });
        },
    });
}

function getDataFeedbackNarasumber(){
    $('#body-table-narasumber').empty()
    var totalNilaiNarasumber = 0
    $.ajax({
        type : "POST",
        url  : base_url+"tna/internalSharing-employee/getDataFeedback",
        data:{group:'Narasumber'},
        dataType: "JSON",
        success:function(resp){
            // console.log(resp)
            if(resp.length > 0){
                resp.forEach((element, index) => {
                    let number_narasumber = index+1
                    var htmlGroup = createFeedbackRow(element, 'narasumber', number_narasumber);
                    $('#body-table-narasumber').append(htmlGroup);
                })
            }
            $('input[type=radio], input[type=checkbox]').on('change', function () {
                totalNilaiNarasumber = calculateTotalValue('narasumber');
                $('#total_narasumber').val(totalNilaiNarasumber);
            })
        },
    });
}

function calculateTotalValue(group) {
    var totalValue = 0;
    $(`input[name^="radio_${group}"]:checked, input[name^="checkbox_${group}"]:checked`).each(function () {
        var value = parseInt($(this).val());
        if (!isNaN(value)) {
            totalValue += value;
        }
    });
    return totalValue;
}

function createFeedbackRow(element, group, number) {
    return `
        <tr>
            <td>
                ${element.pertanyaan}
                <input type="hidden" value="${element.pertanyaan}" name="pertanyaan_${group}[]">
            </td>
            <td class="text-center" style="vertical-align: middle"><input type="radio" name="radio_${group}_${number}" value="${element.nilai_skor1}" ${element.nilai_skor1 === element.nilai_skor ? 'checked' : ''}></td>
            <td class="text-center" style="vertical-align: middle"><input type="radio" name="radio_${group}_${number}" value="${element.nilai_skor2}" ${element.nilai_skor2 === element.nilai_skor ? 'checked' : ''}></td>
            <td class="text-center" style="vertical-align: middle"><input type="radio" name="radio_${group}_${number}" value="${element.nilai_skor3}" ${element.nilai_skor3 === element.nilai_skor ? 'checked' : ''}></td>
            <td class="text-center" style="vertical-align: middle"><input type="radio" name="radio_${group}_${number}" value="${element.nilai_skor4}" ${element.nilai_skor4 === element.nilai_skor ? 'checked' : ''}></td>
            <td class="text-center" style="vertical-align: middle"><input type="radio" name="radio_${group}_${number}" value="${element.nilai_skor5}" ${element.nilai_skor5 === element.nilai_skor ? 'checked' : ''}></td>
        </tr>
    `;
}

function submitFeedback(){
    $.ajax({
        url: base_url+"tna/internalSharing-employee/feedback",
        type: 'POST',
        dataType: "JSON",
        data: $('#form-feedback').serialize(),
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






