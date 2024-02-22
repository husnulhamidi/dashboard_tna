 <div class="tab-content">
    <div class="tab-pane active">
        <div class="col-md-12" style="padding-top: 10px">
            <label style="margin-bottom: 10px"><h3> Riwayat Verifikasi </h3></label>
            <hr style="margin-top: -10px">
            <table class="table" id="tbl-riwayat">
                <thead>
                    <tr>
                        <th class="text-center"> No </th>
                        <th class="text-center"> Verifikator </th>
                        <th class="text-center"> Jabatan </th>
                        <th class="text-center"> Catatan </th>
                        <th class="text-center"> Status </th>
                        <th class="text-center"> Tanggal </th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
    // $('#tbl-riwayat').DataTable()
    var id = $('#id').val();
    $('#tbl-riwayat').DataTable({
        processing: true, 
        serverSide: true, 
        scrollX: true,
        order: [], 
        ajax: {
            url     : base_url+"tna/pengawalan/riwayat_verifikasi",
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
            {"data": "verifikator"},
            {"data": "jabatan"},
            {"data": "keterangan"},
            {"data": "status"},
            {
                "data": "created_date",
                render:function(data, type, row, meta){
                    // console.log(data)
                    return formatDate(data)
                }
            },
                       
        ],
    });

</script>