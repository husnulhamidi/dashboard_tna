jQuery(document).ready(function() {
    let thn = $('#filter_year').val()
    load(thn)
    $('#filter_year').change(function(){
        let thn = $('#filter_year').val()
        load(thn)
    })
})

function load(thn){
    $('#thn_realisasi, #thn_perencanaan').html(thn)
    builTable(thn)
}

function builTable(thn){
    if ($.fn.DataTable.isDataTable('#report')) {
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
                d.thn = thn
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
            { "data": "jenis_pelatihan"},
            { "data": "kompetensi"},
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