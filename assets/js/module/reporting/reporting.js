jQuery(document).ready(function() {
    // $('#table-reporting').dataTable()
    $('#filter_tahun').datepicker({
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years",
        autoclose: true
    });

    $('#jenis_development').change(function(){
        let jenis = $('#jenis_development').val()
        $('#typeSertifikasi').css('display','none')
        if(jenis == 'Sertifikasi'){
            $('#typeSertifikasi').css('display','block')
        }

    });

    $('.btn-reset').click(function(){
        // location.reload();
        $("#form-filter").get(0).reset() 
        $("#form-filter .select2").trigger('change')
        builTable()
    })

    $('.btn-filter').click(function(){
        $('#ModalFilter').modal('hide')
        builTable()
    })

    $('.submit-reporting').click(function(){
        submitReporting();
    })

    $('.btn-generate').click(function(){
        generateData();
    })

    builTable()
})

function builTable(){
    if ($.fn.DataTable.isDataTable('#table-reporting')) {
        $('#table-reporting').DataTable().destroy();
    }
    $('#table-reporting').DataTable({
        processing: true, 
        serverSide: true, 
        scrollX: true,
        order: [], 
        ajax: {
            url     : base_url+"tna/reporting/getData",
            type    : "get",
            datatype: "json",
            data    : function(d){
                d.filter_karyawan = $('#filter_karyawan').val()
                d.filter_kuartal = $('#filter_kuartal').val()
                d.filter_bulan = $('#filter_bulan').val()
                d.filter_tahun = $('#filter_tahun').val()
                d.filter_kategori_pelatihan = $('#filter_kategori_pelatihan').val()
                d.filter_jenis_sertifikat = $('#filter_jenis_sertifikat').val()
                console.log(d)
            }
                      
        },
        columns: [
            {
                "data": "id",
                "width": "50px",
                "class":"text-center",
                render: function (data, type, row, meta) {
                    // console.log(data)
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },

            {
                "data": "tahun",
                "class":"text-center",
            },
            {"data": "nama_kegiatan"},
            {"data": "nama_penyelenggara"},
            {"data": "metoda"},
            { "data": "kategori_pelatihan" },
            { "data": "kompetensi"},
            { 
                "data": "tanggal_mulai",
                render:function(data, type, row, meta){
                    let date = '-'
                    if(data !== ''){
                        date = formatDate(data)
                    }
                    return date
                }
            },
            { 
                "data": "tanggal_selesai",
                render:function(data, type, row, meta){
                    let date = '-'
                    if(data !== ''){
                        date = formatDate(data)
                    }
                    return date
                }
            },
            { 
                "data": "lama_kegiatan",
                "class":"text-center",
            },
            { "data": "bulan"},
            { 
                "data": "kuartal",
                render:function(data, type, row, meta){
                    let kuartal = 'Kuartal 1'
                    if(data == 'Q2') kuartal = 'Kuartal 2'
                    if(data == 'Q3') kuartal = 'Kuartal 3'
                    if(data == 'Q4') kuartal = 'Kuartal 4'
                    return kuartal
                }
            },
            { "data": "nik"},
            { "data": "nama_karyawan"},
            { "data": "posisi"},
            { "data": "direktorat"},
            { "data": "subdit"},
            { 
                "data": "jumlah_nik",
                "class":"text-center",
            },
            { "data": "bp"},
            { "data": "status_fte"},
            { "data": "jenis_pelatihan"},
            { "data": "nomor_sertifikat"},
            { "data": "jenis_sertifikat"},
            { 
                "data": "tanggal_awal_berlaku_sertifikat",
                render:function(data, type, row, meta){
                    let date = '-'
                    if(data !== '' && data !== '0000-00-00'){
                        date = formatDate(data)
                    }
                    return date
                }
            },
            { 
                "data": "tanggal_akhir_berlaku_sertifikat",
                render:function(data, type, row, meta){
                    let date = '-'
                    if(data !== '' && data !== '0000-00-00'){
                        date = formatDate(data)
                    }
                    return date
                }
            },
            { "data": "no_ht"},
            { "data": "no_spb"},
            { 
                "data": "biaya_kegiatan",
                "class":"text-right",
                render:function(data,type,row, meta){
                    let biaya = 0;
                    if (data !== null && data !== '') {
                        biaya = formatRupiah(data);
                    }
                    return biaya;
                }
            },
            { "data": "currency_key"},
            // { "data": "scanan_sertifikat"},
            // { "data": "materi_pelatihan"},
            // { "data": "evaluasi_pelatihan"},
            { "data": "keterangan"},
    
        ],
    });
}

function submitReporting(){
    $(".form-reporting").validate({
        rules: {
            jenis_pelatihan: "required",
            kompetensi: "required",
            jenis_development: "required",
            tna: "required",
            nama_kegiatan: "required",
            metoda: "required",
            estimasi_biaya: "required",
            penyelenggara: "required",
            waktu_pelaksanaan: "required",
            direktorat: "required",
            karyawan: "required",
            metoda: "required",
            estimasi_biaya: "required",
        },
        messages: {
            jenis_pelatihan:{
                required:"<i class='fa fa-times'></i> Jenis Pelatihan harus diisi"
            },
            kompetensi:{
                required:"<i class='fa fa-times'></i>  Kompetensi harus diisi"
            },
            jenis_development:{
                required:"<i class='fa fa-times'></i> Jenis Development harus diisi"
            },
            tna:{
                required:"<i class='fa fa-times'></i> Pelatihan/Sertifikasi harus diisi"
            },
            nama_kegiatan:{
                required:"<i class='fa fa-times'></i> Nama Kegiatan harus diisi"
            },
            metoda:{
                required:"<i class='fa fa-times'></i> Metoda Pembelajaran harus diisi"
            },
            estimasi_biaya:{
                required:"<i class='fa fa-times'></i> Estimasi Biaya harus diisi"
            },
            penyelenggara:{
                required:"<i class='fa fa-times'></i> Nama Penyelenggara harus diisi"
            },
            waktu_pelaksanaan:{
                required:"<i class='fa fa-times'></i> Waktu Pelaksanaan harus diisi"
            },
            direktorat:{
                required:"<i class='fa fa-times'></i> Direktorat harus diisi"
            },
            karyawan:{
                required:"<i class='fa fa-times'></i> Nama Karyawan harus diisi"
            },
            metoda:{
                required:"<i class='fa fa-times'></i> Metoda Pembelajaran harus diisi"
            },
            estimasi_biaya:{
                required:"<i class='fa fa-times'></i> Estimasi biaya harus diisi"
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
                url: base_url+"tna/reporting/submit",
                type: 'POST',
                dataType: "JSON",
                // data: combinedData,
                data: $(form).serialize(),
                success: function(response) {
                    console.log('response')
                    if(response.success){
                        setTimeout(function() {
                            swal({
                                title: "Notifikasi!",
                                text: "Data berhasil disimpan",
                                imageUrl: img_icon_success
                            }, function(d) {
                                // location.href = base_url+'/tna'
                            });
                        }, 1000);
                    }else{
                        setTimeout(function() {
                            swal({
                                title: "Notifikasi!",
                                text: "Data gagal disimpan",
                                imageUrl: img_icon_error
                            }, function() {
                                // location.reload();
                            });
                        }, 1000);
                    }
                    
                }            
            });
        }
    });
}

function generateData(){
    swal({
        title: "Yakin Akan Generate Data ?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Ya, Generate!",
        closeOnConfirm: false
    }, function () {
        swal.close();
        $('.loader-wrapper').css('display', 'block')
        $.ajax({
            type : "GET",
            url  : base_url+"tna/reporting/generate",
            dataType: "JSON",
            success:function(resp){
                // console.log('resp', resp);
                if(resp.success){
                    setTimeout(function() {
                        swal({
                            title: "Notifikasi!",
                            text: resp.msg,
                            imageUrl: img_icon_success
                        }, function(d) {
                            location.reload();
                        });
                    }, 1000);
                }else{
                    setTimeout(function() {
                        swal({
                            title: "Notifikasi!",
                            text: resp.msg,
                            imageUrl: img_icon_error
                        }, function() {
                            location.reload();
                        });
                    }, 1000);
                }
                // console.log(resp)
                // $('.loader-wrapper').css('display', 'none')
            },
            complete: function (data) {
                $('.loader-wrapper').css('display', 'none')
            }
        });
       
    });
}