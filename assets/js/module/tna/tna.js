jQuery(document).ready(function() {
    buildTable();
	 $('#fileName').filestyle({
        btnClass : 'btn-success',
        text : 'Select File',
        htmlIcon : '<span class="fa fa-folder"></span> ',
    });
	 

    $('.submit-tna').click(function(){
        submitTNA();
    })

    $('.btn-filter').click(function(){
       $('#ModalFilter').modal('hide')
        buildTable();
    })

    $('.btn-reset').click(function(){
        // location.reload();
        $("#form-filter-tna").get(0).reset() 
        $("#form-filter-tna .select2").trigger('change')
        buildTable()
    })

    $('#jenis_development').change(function(){
        let jenis = $('#jenis_development').val()
        $('#typeSertifikasi').css('display','none')
        if(jenis == 'Sertifikasi'){
            $('#typeSertifikasi').css('display','block')
        }

    });

    $('#btnExport').click(function(){
        exportData()
    })

    
})

function showModalProses(id){
	swal({
        title: "Apakah Anda yakin Akan Proses TNA ini ?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#00FFFF",
        confirmButtonText: "Ya, Proses",
        cancelButtonText:'Batal',
        closeOnConfirm: false
    }, function () {
        console.log("masuk")
        $.ajax({
            type : "POST",
            url  : base_url+"tna/proses_tna",
            dataType: "JSON",
            data : "id="+id,
            success:function(resp){
                console.log(resp)
                if(resp.success){
                    setTimeout(function() {
                        swal({
                            title: "Notifikasi!",
                            text: "Data berhasil diproses",
                            imageUrl: img_icon_success
                        }, function() {
                             location.reload();
                        });
                    }, 1000);
                }else{
                    setTimeout(function() {
                        swal({
                            title: "Notifikasi!",
                            text: "Data gagal diproses",
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

function deleteData(id){
    swal({
        title: "Apakah Anda yakin Akan Menghapus ini ?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#FF0000",
        confirmButtonText: "Ya, hapus",
        cancelButtonText:'Batal',
        closeOnConfirm: false
    }, function () {
        $.ajax({
                type : "POST",
                url  : base_url+"tna/delete_tna",
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

function submitTNA(){
    $(".form-tna").validate({
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
            is_tna: "required"
        },
        messages: {
            jenis_pelatihan:{
                required:"<i class='fa fa-times'></i> Jenis Pelatihan"
            },
            kompetensi:{
                required:"<i class='fa fa-times'></i> kompetensi"
            },
            jenis_development:{
                required:"<i class='fa fa-times'></i> Jenis Development"
            },
            tna:{
                required:"<i class='fa fa-times'></i> Pelatihan/Sertifikasi"
            },
            nama_kegiatan:{
                required:"<i class='fa fa-times'></i> Nama Kegiatan"
            },
            metoda:{
                required:"<i class='fa fa-times'></i> Metoda Pembelajaran"
            },
            estimasi_biaya:{
                required:"<i class='fa fa-times'></i> Estimasi Biaya"
            },
            penyelenggara:{
                required:"<i class='fa fa-times'></i> Nama Penyelenggara"
            },
            waktu_pelaksanaan:{
                required:"<i class='fa fa-times'></i> Waktu Pelaksanaan"
            },
            direktorat:{
                required:"<i class='fa fa-times'></i> Direktorat"
            },
            karyawan:{
                required:"<i class='fa fa-times'></i> Nama Karyawan"
            },
            is_tna:{
                required:"<i class='fa fa-times'></i> Nama Karyawan"
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
            // var formData1 = $(form).serializeArray();
            // var formData2 = $('#form-add-penyelenggara').serializeArray();

            // var combinedData = formData1.concat(formData2);
            $.ajax({
                url: base_url+"tna/submit",
                type: 'POST',
                dataType: "JSON",
                // data: combinedData,
                data: $(form).serialize(),
                success: function(response) {
                    console.log(response)
                    if(response.success){
                        setTimeout(function() {
                            swal({
                                title: "Notifikasi!",
                                text: "Data berhasil disimpan",
                                imageUrl: img_icon_success
                            }, function(d) {
                                location.href = base_url+'/tna'
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

function buildTable(){
    if ($.fn.DataTable.isDataTable('#table-tna')) {
        $('#table-tna').DataTable().destroy();
    }
    oTable = $('#table-tna').DataTable({
        processing: true, 
        serverSide: true, 
        scrollX: true,
        order: [], 
        ajax: {
            url     : base_url+"tna/tna/getData",
            type    : "get",
            datatype: "json",
            data    : function(d){
                d.filter_subdit = $('#filter_subdit').val()
                d.filter_kompetensi = $('#filter_kompetensi').val()
                d.filter_jenis_development = $('#filter_jenis_development').val()
                d.filter_nama_pelatihan = $('#filter_nama_pelatihan').val()
                d.filter_justifikasi = $('#filter_justifikasi').val()
                d.filter_metoda_pembelajaran = $('#filter_metoda_pembelajaran').val()
                d.filter_biaya_min = $('#filter_biaya_min').val()
                d.filter_biaya_max = $('#filter_biaya_max').val()
                d.filter_penyelenggara = $('#filter_penyelenggara').val()
                d.filter_karyawan = $('#filter_karyawan').val()
                d.filter_status_karyawan = $('#filter_status_karyawan').val()

                d.filter_waktu_awal = $('#filter_waktu_awal').val()
                d.filter_waktu_akhir = $('#filter_waktu_akhir').val()

                console.log(d)
            }
                      
        },
        columns: [
            {
                "data": "id",
                "width": "80px",
                "orderable" : false,
                render: function (data, type, row, meta) {
                   var action = `
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Aksi
                                <span class="fa fa-caret-down"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="`+url_detail+data+`"> Detail </a></li>
                                <li>
                                    <a onclick="showModalProses(`+data+`)">
                                        Prosess / Usulkan 
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="`+url_edit+data+`">Edit</a>
                                </li>
                                <li><a onclick="deleteData(`+data+`)">Hapus</a></li>
                            </ul>
                        </div>

                   `
                   return action
                }
            },

            {"data": "code_tna"},
            {"data": "nama_organisasi"},
            {"data": "nama_karyawan"},
            {"data": "status_karyawan"},
            { "data": "training" },
            { "data": "objective"},
            { "data": "jenis_development"},
            { "data": "metoda_pembelajaran"},
            { "data": "jenis_pelatihan"},
            { 
                "data": "kompetensi",
                "class":"text-nowrap"
            },
            { "data": "nama_penyelenggara"},
            { 
                "data": "waktu_pelaksanaan",
                render:function(data, type, row, meta){
                    let date = '-'
                    if(data !== '0000-00-00'){
                        date = formatDate(data)
                    }
                    return date
                }
            },
            { 
                "data": "estimasi_biaya",
                "class":"text-right",
                render:function(data,type,row, meta){
                    return formatRupiah(data,'Rp.')
                }
            }
        ],
        "createdRow": function( row, data, dataIndex){
            console.log(data.is_urgent)
            if (data.is_urgent == '1') {
                $(row).addClass('changeColor');
            }
        },
    });
}

function exportData(){
    var formData = $('#form-filter-tna').serialize();
    $.ajax({
        url     : base_url+"tna/tna/exportExcel",
        method: 'post',
        data: formData, 
        success: function(response){
            // console.log(response)
            var url = window.URL.createObjectURL(new Blob([response]));
    
            // Membuat elemen a untuk tautan unduhan
            var a = document.createElement('a');
            a.href = url;
            a.download = 'daftar_list_tna.xls'; // Atur nama file yang diinginkan
            document.body.appendChild(a);
            a.click();

            // Menghapus URL objek setelah tautan unduhan diklik
            window.URL.revokeObjectURL(url);
        },
        error: function(xhr, status, error) {
            console.log(error)
            console.error(xhr.responseText); // Tampilkan pesan kesalahan dalam konsol
        }
    });
}

