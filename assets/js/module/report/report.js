jQuery(document).ready(function() {
    let thn = $('#filter_year').val();
    let kom = $('#filter_kompetensi').val();
    load(kom,thn)
    $('#filter_year').change(function(){
        let kom = $('#filter_kompetensi').val();
        let thn = $('#filter_year').val();
        load(kom,thn)
    });
    $('#filter_kompetensi').change(function(){
        let kom = $('#filter_kompetensi').val();
        let thn = $('#filter_year').val()
        load(kom,thn)
    });

    $('#btnExport').click(function(){
        $('.loader-wrapper').css('display','block')
        exportData();
    });
})

function exportData(){
    let kom = $('#filter_kompetensi').val();
    let thn = $('#filter_year').val();
    $.ajax({
        url     : base_url+"tna/report/exportExcel",
        method: 'post',
        // data: function(d){
        //     d.tahun=thn;
        //     d.kom=kom
        // },
        data:{thn:thn, kom:kom} ,
        success: function(response){
            // console.log(response)
            var url = window.URL.createObjectURL(new Blob([response]));
    
            // Membuat elemen a untuk tautan unduhan
            var a = document.createElement('a');
            a.href = url;
            a.download = 'report rencana vs realisasi.xls'; // Atur nama file yang diinginkan
            document.body.appendChild(a);
            a.click();

            // Menghapus URL objek setelah tautan unduhan diklik
            window.URL.revokeObjectURL(url);
            $('.loader-wrapper').css('display','none')
        },
        error: function(xhr, status, error) {
            console.log(error)
            console.error(xhr.responseText); // Tampilkan pesan kesalahan dalam konsol
        }
    });
}

function load(kom,thn){
    $('#thn_realisasi, #thn_perencanaan').html(thn)
    builTable(kom,thn)
}

function builTable(kom,thn){
    if ($.fn.DataTable.isDataTable('#tbl_report')) {
        $('#tbl_report').DataTable().destroy();
    }
    $('#tbl_report').DataTable({
        processing: true, 
        serverSide: true, 
        scrollX: true,
        order: [], 
        ajax: {
            url     : base_url+"tna/report/getData",
            type    : "get",
            datatype: "json",
            data    : function(d){
                d.thn = thn,
                d.kom = kom
                //console.log(d)
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
            { "data": "kategori_pelatihan"},
            { "data": "kompe"},
            { "data": "rencana_pelatihan_q1"},
            { "data": "rencana_pelatihan_q2"},
            { "data": "rencana_pelatihan_q3"},
            { "data": "rencana_pelatihan_q4"},
            { "data": "rencana_pelatihan_total"},

            { "data": "rencana_sertifikasi_q1"},
            { "data": "rencana_sertifikasi_q2"},
            { "data": "rencana_sertifikasi_q3"},
            { "data": "rencana_sertifikasi_q4"},
            { "data": "rencana_sertifikasi_total"},

            { "data": "rencana_pelatihan_fte"}, //peserta pelatihan fte (perencanaan)
            { "data": "rencana_pelatihan_nonfte"}, //peserta pelatihan non fte (perencanaan)
            { "data": "rencana_sertifikasi_fte"}, //peserta sertifikasi fte (perencanaan)
            { "data": "rencana_sertifikasi_nonfte"}, //peserta sertifikasi non fte (perencanaan)
            { "data": "rencana_peserta_total"}, //total peserta (perencanaan)

            { "data": "realisasi_pelatihan_q1"},
            { "data": "realisasi_pelatihan_q2"},
            { "data": "realisasi_pelatihan_q3"},
            { "data": "realisasi_pelatihan_q4"},
            { "data": "realisasi_pelatihan_total"},

            { "data": "realisasi_sertifikasi_q1"},
            { "data": "realisasi_sertifikasi_q2"},
            { "data": "realisasi_sertifikasi_q3"},
            { "data": "realisasi_sertifikasi_q4"},
            { "data": "realisasi_sertifikasi_total"},

            { "data": "realisasi_pelatihan_fte"}, //peserta pelatihan fte (realisasi)
            { "data": "realisasi_pelatihan_nonfte"}, //peserta pelatihan non fte (realisasi)
            { "data": "realisasi_sertifikasi_fte"}, //peserta sertifikasi fte (realisasi)
            { "data": "realisasi_sertifikasi_nonfte"},
            { "data": "realisasi_peserta_total"}, //peserta sertifikasi non fte (per          
        ],
    });
}