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
        $('#report').DataTable().destroy();
    }
    $('#report').DataTable({
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
            { "data": "jenis_development"},
            { "data": "kompetensi"},
            { "data": "perencanaan_pelatihan_Q1"},
            { "data": "perencanaan_pelatihan_Q2"},
            { "data": "perencanaan_pelatihan_Q3"},
            { "data": "perencanaan_pelatihan_Q4"},
            { "data": "perencanaan_total_pelatihan"},
            { "data": "perencanaan_sertifikasi_Q1"},
            { "data": "perencanaan_sertifikasi_Q2"},
            { "data": "perencanaan_sertifikasi_Q3"},
            { "data": "perencanaan_sertifikasi_Q4"},
            { "data": "perencanaan_total_sertifikasi"},

            { "data": "id"}, //peserta pelatihan fte (perencanaan)
            { "data": "id"}, //peserta pelatihan non fte (perencanaan)
            { "data": "id"}, //peserta sertifikasi fte (perencanaan)
            { "data": "id"}, //peserta sertifikasi non fte (perencanaan)
            { "data": "id"}, //total peserta (perencanaan)

            { "data": "realisasi_pelatihan_Q1"},
            { "data": "realisasi_pelatihan_Q2"},
            { "data": "realisasi_pelatihan_Q3"},
            { "data": "realisasi_pelatihan_Q4"},
            { "data": "realisasi_total_pelatihan"},

            { "data": "realisasi_sertifikasi_Q1"},
            { "data": "realisasi_sertifikasi_Q2"},
            { "data": "realisasi_sertifikasi_Q3"},
            { "data": "realisasi_sertifikasi_Q4"},
            { "data": "realisasi_total_sertifikasi"},

            { "data": "id"}, //peserta pelatihan fte (realisasi)
            { "data": "id"}, //peserta pelatihan non fte (realisasi)
            { "data": "id"}, //peserta sertifikasi fte (realisasi)
            { "data": "id"}, //peserta sertifikasi non fte (per          
        ],
    });
}