 <div class="tab-content">
    <div class="tab-pane active">
        <div class="col-md-12" style="padding-top: 10px">
            <!-- <label> Materi </label> -->
            <label style="margin-bottom: 10px"><h3> Materi </h3></label>
            <hr style="margin-top: -10px">
            <table class="table" id="tbl-materi">
                <thead>
                    <tr>
                        <th class="text-center"> No </th>
                        <th class="text-center"> Nama Materi </th>
                        <th class="text-center"> Dokumen </th>
                        
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
    // $('#tbl-materi').DataTable()
    var id = $('#id').val();
    $('#tbl-materi').DataTable({
        processing: true, 
        serverSide: true, 
        scrollX: true,
        order: [], 
        ajax: {
            url     : base_url+"tna/pengawalan/get_detail_materi",
            type    : "get",
            datatype: "json",
            data    : function(d){
                d.id = id
                console.log(d)
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
            {"data": "nama_materi"},
            {
                "data": "dokumen",
                render:function(data, type, row, meta){
                    return `
                        <a href="`+base_url+data+`" target="_blank">
                            <button class="btn btn-primary"> <i class="fa fa-download"></i> ` + data + ` </button>
                        </a>
                    `
                }
            },
                 
        ],
    });
</script>