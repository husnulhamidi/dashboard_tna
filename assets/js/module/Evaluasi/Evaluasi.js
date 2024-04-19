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
                let action = '<span class="badge badge-success" style="background-color:blue>Sudah dievaluasi</span>'
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