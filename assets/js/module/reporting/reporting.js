jQuery(document).ready(function() {
    // $('#table-reporting').dataTable()
    $('#filter_tahun').datepicker({
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years",
        autoclose: true
    });

    $('#filter_bulan').datepicker({
        format: "mm",
        viewMode: "months",
        minViewMode: "months",
        autoclose: true
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
                render: function (data, type, row, meta) {
                    console.log(data)
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },

            {"data": "tahun"},
            {"data": "nama_kegiatan"},
            {"data": "nama_penyelenggara"},
            {"data": "metoda"},
            { "data": "kategori_pelatihan" },
            { "data": "kompetensi"},
            { "data": "tanggal_mulai"},
            { "data": "tanggal_selesai"},
            { "data": "lama_kegiatan"},
            { "data": "bulan"},
            { "data": "kuartal"},
            { "data": "nik"},
            { "data": "nama_karyawan"},
            { "data": "posisi"},
            { "data": "direktorat"},
            { "data": "subdit"},
            { "data": "jumlah_nik"},
            { "data": "bp"},
            { "data": "status_fte"},
            { "data": "jenis_pelatihan"},
            { "data": "nomo_sertifikat"},
            { "data": "jenis_sertifikat"},
            { "data": "tanggal_awal_berlaku_sertifikat"},
            { "data": "tanggal_akhir_berlaku_sertifikat"},
            { "data": "no_ht"},
            { "data": "no_spb"},
            { "data": "biaya_kegiatan"},
            { "data": "currency_key"},
            { "data": "scanan_sertifikat"},
            { "data": "materi_pelatihan"},
            { "data": "evaluasi_pelatihan"},
            { "data": "keterangan"},
    
        ],
    });
}