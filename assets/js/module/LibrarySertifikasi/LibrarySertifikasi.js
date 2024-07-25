$(document).ready(function(){
    builTable()

    $('#thn_tr').datepicker({
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years"
    })

    // $('.btn-filter').click(function(){
    //     builTable()
    //     // console.log('asd')
    // })
})

function builTable(){
	if ($.fn.DataTable.isDataTable('#table-sertif')) {
        $('.table-sertif').DataTable().destroy();
    }
    oTable = $('.table-sertif').DataTable({
        processing: true, 
        serverSide: true, 
        scrollX: true,
        order: [], 
        ajax: {
            url     : base_url+"tna/LibrarySertifikasi/getData",
            type    : "get",
            datatype: "json",
            data    : function(d){
                
                // d.filter_nama_pelatihan = $('#filter_nama_pelatihan').val()
                // d.filter_kompetensi = $('#filter_kompetensi').val()
                // d.filter_penyelenggara = $('#filter_penyelenggara').val()
                // d.thn_tr = $('#thn_tr').val()
                // d.filter_development = $('#filter_development').val()

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
            {"data": "nama_sertifikat"},
            {"data": "nama_karyawan"},
            {"data": "subdit"},
            { 
                "data": "tanggal_berlaku_awal",
                render:function(data, type, row, meta){
                    let date = '-'
                    if(data !== '0000-00-00' && data !== '' && data !== null){
                        date = formatDate(data)
                    }
                    return date
                }
            },    
            // { "data": "tanggal_akhir_berlaku_sertifikat"},
            { 
                "data": "tanggal_berlaku_akhir",
                render:function(data, type, row, meta){
                    let date = '-'
                    if(data !== '0000-00-00' && data !== '' && data !== null){
                        date = formatDate(data)
                    }
                    return date
                }
            },    
            { "data": "nomor_sertifikat" },
            { "data": "nama_penyelenggara" },
            {
                "data" : "dokumen",
                "class":"text-center",
                render:function(data, meta, type, row){
                    const link = `<a href="${base_url}${data}" target="_blank" class="btn btn-success btn-xs"> <i class="fa fa-download"></i> Download File</a>`
                    return link
                }
            },
        ],
    });
}