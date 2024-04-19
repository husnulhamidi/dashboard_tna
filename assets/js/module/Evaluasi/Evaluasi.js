$(document).ready(function(){
    builTable()
    $('.btn-filter').click(function(){
        $('#modalFilter').modal('hide')
        builTable()
    })

    $('.btn-reset').click(function(){
        // location.reload();
        $("#form-filter").get(0).reset() 
        $("#form-filter .select2").trigger('change')
        builTable()
    })
    $('.submit-evaluasi').click(function(){
        submitEvaluasi()
    })
    
})

function builTable() {
    if ($.fn.DataTable.isDataTable('#table-evaluasi')) {
        $('#table-evaluasi').DataTable().destroy();
    }
    
    var columns = [
        {
            "data": "id",
            "width": "80px",
            "orderable" : false,
            render: function (data, type, row, meta) {
                var params = `${data},${row.tahapan_id},${row.urutan},'${row.nama_karyawan}','${row.nama_penyelenggara}','${row.pelatihan}','${row.nik_tg}','${row.nama_organisasi}','${row.estimasi_biaya}'`;
                var action = `
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Aksi
                            <span class="fa fa-caret-down"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="`+url_detail+data+'/riwayat_verifikasi'+`">Detail</a>
                            </li>
                            `;
                            if(row.is_evaluasi == 0){
                                action += `<li>
                                    <a 
                                        onclick="evaluasi(`+params+`,`+row.is_complete+`,'`+row.waktu_pelaksanaan+`')"> Evaluasi
                                        </a>
                                    </li>` ;
                            }
                            

                            
                            action += `
                        </ul>
                    </div>
               `;
               
               return action;
            }
        },
        {
            "data": "id",
            "width": "80px",
            "orderable" : false,
            render: function (data, type, row, meta) {
                console.log(row.is_evaluasi)
                // let action = '<span class="badge badge-success" style="background-color:blue>Sudah dievaluasi</span>'
                let action = '<span class="badge badge-success" style="background-color:blue">Sudah dievaluasi</span>'
                if(row.is_evaluasi == '0'){
                    // action = 'Bisa dievaluasi'
                    action = '<span class="badge badge-success" style="background-color:red">Bisa dievaluasi</span>'
                }

               return action;
            }
        },

        {"data": "id_tna"},
        {"data": "nama_karyawan"},
        {"data": "nama_organisasi"},
        {"data": "status_karyawan"},
        { "data": "kompetensi" },
        { "data": "jenis_development"},
        { "data": "pelatihan"},
        { "data": "justifikasi_pengajuan"},
        { "data": "metoda_pembelajaran"},
        { 
            "data": "estimasi_biaya",
            "class":"text-right",
            render:function(data,type,row, meta){
                return formatRupiah(data,'Rp.');
            }
        },
        { "data": "nama_penyelenggara"},
        { 
            "data": "waktu_pelaksanaan_mulai",
            render:function(data, type, row, meta){
                let date = '-';
                if(data !== '0000-00-00'){
                    date = formatDate(data);
                }
                return date + ' s/d ' + formatDate(row.waktu_pelaksanaan_selesai);
            }
        },            
    ];
    
    oTable = $('#table-evaluasi').DataTable({
        processing: true, 
        serverSide: true, 
        scrollX: true,
        order: [], 
        ajax: {
            url     : base_url+"tna/evaluasi/getData",
            type    : "get",
            datatype: "json",
            data    : function(d){
                // d.tabs = 'evaluasi';
                d.filter_peserta = $('#filter_peserta').val();
                d.filter_unit = $('#filter_unit').val();
                d.filter_pelatihan = $('#filter_pelatihan').val();
                d.filter_penyelenggara = $('#filter_penyelenggara').val();
                d.filter_kompetensi = $('#filter_kompetensi').val();
                d.filter_development = $('#filter_development').val();
                d.filter_pembelajaran = $('#filter_pembelajaran').val();
                d.filter_biaya_min = $('#filter_biaya_min').val();
                d.filter_biaya_max = $('#filter_biaya_max').val();
                d.filter_tgl_mulai = $('#filter_tgl_mulai').val();
                d.filter_tgl_selesai = $('#filter_tgl_selesai').val();
                d.filter_tahapan = $('#filter_tahapan').val();
                console.log(d);
            }
        },
        columns: columns
    });
}

function evaluasi(id,tahapanId,urutanId,namaKaryawan, penyelenggara, pelatihan, nik,unit, estimasi_biaya,is_complete,waktu_pelaksanaan){
    getDataEvaluasi()
    $('#evaluasi_id').val(id)
    $('#evaluasi_urutanId').val(urutanId)
    $('#evaluasi_tahapanId').val(tahapanId)
    $('#evaluasi_isComplete').val(is_complete)
    $('#evaluasi_nik').text(nik)
    $('#evaluasi_nama').text(namaKaryawan)
    $('#evaluasi_penyelenggara').text(penyelenggara)
    $('#evaluasi_pelatihan').text(pelatihan)
    $('#evaluasi_unit').text(unit)
    $('#evaluasi_tanggal').text(formatDate(waktu_pelaksanaan))
    $('#evaluasi_materi').text('-')
	$('#modalEvaluasi').modal('show')
}

function getDataEvaluasi(){
    $('#body-tbl-evaluasi').empty()
    $.ajax({
        type : "POST",
        url  : base_url+"tna/pengawalan/getDataEvaluasi",
        dataType: "JSON",
        success:function(resp){
            if(resp.length > 0){
                $('#jumlah_pertanyaan').val(resp.length)
                var tmpGroup = '';
                var number = 0;
                resp.forEach((element, index) => {
                    var group = element.group;
                    if(tmpGroup != group){
                        number++;
                        var htmlGroup = `
                            <tr>
                                <td rowspan="2" class="text-center" style="vertical-align: middle">${number}</td>
                                <td><b>${group}</b></td>
                                <td rowspan="2" class="text-center" style="vertical-align: middle"> <input type="radio" name="radio_${element.id}" value="${element.nilai_skor1}">
                                </td>
                                <td rowspan="2" class="text-center" style="vertical-align: middle"><input type="radio" name="radio_${element.id}" value="${element.nilai_skor2}"></td>
                                <td rowspan="2" class="text-center" style="vertical-align: middle"><input type="radio" name="radio_${element.id}" value="${element.nilai_skor3}"></td>
                                <td rowspan="2" class="text-center" style="vertical-align: middle"><input type="radio" name="radio_${element.id}" value="${element.nilai_skor4}"></td>
                                <td rowspan="2" class="text-center" style="vertical-align: middle"><input type="radio" name="radio_${element.id}" value="${element.nilai_skor5}"></td>
                            </tr>
                            <tr>
                                <td>
                                    - ${element.pertanyaan}
                                    <input type="hidden" value="${element.pertanyaan}" name="pertanyaan[]">
                                </td>
                            </tr>
                        `;
                        tmpGroup = group;
                        $('#body-tbl-evaluasi').append(htmlGroup);
                    } else {
                        var htmlSubGroup = `
                            <tr>
                                <td></td>
                                <td>
                                    - ${element.pertanyaan}
                                    <input type="hidden" value="${element.pertanyaan}" name="pertanyaan[]">
                                </td>
                                <td class="text-center" style="vertical-align: middle"><input type="radio" name="radio_${element.id}" value="${element.nilai_skor1}"></td>
                                <td class="text-center" style="vertical-align: middle"><input type="radio" name="radio_${element.id}" value="${element.nilai_skor2}"></td>
                                <td class="text-center" style="vertical-align: middle"><input type="radio" name="radio_${element.id}" value="${element.nilai_skor3}"></td>
                                <td class="text-center" style="vertical-align: middle"><input type="radio" name="radio_${element.id}" value="${element.nilai_skor4}"></td>
                                <td class="text-center" style="vertical-align: middle"><input type="radio" name="radio_${element.id}" value="${element.nilai_skor5}"></td>
                                
                            </tr>
                        `;
                        $('#body-tbl-evaluasi').append(htmlSubGroup);
                    }
                });
                
                var footer = `
                    <b>
                        Catatan :
                                ${resp[0].nilai_skor1} = Sangat Baik; 
                                ${resp[0].nilai_skor2} = Baik; 
                                ${resp[0].nilai_skor3} = Cukup; 
                                ${resp[0].nilai_skor4} = Kurang; 
                                ${resp[0].nilai_skor5} = Kurang Sekali;
                    </b>
                `
                $('#catatan').append(footer)
                $('input[type=radio]').change(function () {
                    hitungHasilSementara();
                });
            }
        },
    });
}

function hitungHasilSementara() {
    var totalNilai = 0;
    $('input[type=radio]:checked').each(function () {
        totalNilai += parseInt($(this).val());
    });
    let grade = getGrade(totalNilai)
    console.log(grade)
    $('#hasilSementara').text(totalNilai + ' Point (' + grade + ')');
}

function getGrade(nilai){
    var grade = 'Kurang';
    if(nilai >= 16 && nilai <= 25) grade = 'Baik';
    if(nilai >= 10 && nilai <= 15) grade = 'Cukup';

    return grade;
}

function submitEvaluasi(){
    $.ajax({
        url: base_url+"tna/pengawalan/evaluasi",
        type: 'POST',
        dataType: "JSON",
        data: $('#form-evaluasi').serialize(),
        success: function(response) {
            console.log(response);
            if(response.success){
                setTimeout(function() {
                    swal({
                        title: "Notifikasi!",
                        text: "Data berhasil diubah",
                        imageUrl: img_icon_success
                    }, function(d) {
                        location.reload();
                    });
                }, 1000);
            }else{
                setTimeout(function() {
                    swal({
                        title: "Notifikasi!",
                        text: "Data gagal diubah",
                        imageUrl: img_icon_error
                    }, function() {
                        location.reload();
                    });
                }, 1000);
            }
            
        }            
    });
}