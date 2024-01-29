<!-- Modal -->
<div class="modal fade" id="ModalRiwayatUsulan" tabindex="-1" role="dialog" aria-hidden="true" enctype="multipart/form-data">
    <div class="modal-dialog modal-lg" >
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> Riwayat</h4>
            </div>
            <div class="modal-body">
                    
                <table  class="table table-striped datatable2" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th width="10px">No</th>
                            <th width="200px">Tanggal</th>
                            <th>Tahapan</th>
                            <th>Status</th>
                            <th>Keterangan</th>
                            <th>Karyawan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>20 Nov 2023</td>
                            <td>Diusulkan</td>
                            <td>Disetujui</td>
                            <td>-</td>
                            <td>Admin unit</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>21 Nov 2023</td>
                            <td>Verifikasi Mgr. Unit</td>
                            <td>Disetujui</td>
                            <td>-</td>
                            <td>Mgr. unit</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>21 Nov 2023</td>
                            <td>Verifikasi Admin HCPD</td>
                            <td>Disetujui</td>
                            <td>-</td>
                            <td>Luwi</td>
                        </tr>
                    </tbody>
                </table>
                   
                 
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-flat btn-default" data-dismiss="modal">Close</button>
            </div>


        </div> <!-- /.modal-content -->
    </div> <!-- /.modal-dialog -->
</div> <!-- /.modal -->

<script type="text/javascript">
    $('.select2').select2({
        placeholder: "Please Select"
    });


    $('#tanggal .input-group.date').datepicker({
        format: "d-m-yyyy",
        viewMode: "date", 
        minViewMode: "date"
    });

    $('.input_mask').mask('000.000.000.000', {reverse: true});

    $(".form-add").validate({
            rules: {
                pilih_produk: "required",
                speed: "required",
                tgl_tagih: "required",
                tgl_off: "required",
                deskripsi: "required",
                otc: "required",
                mrc: "required",
                cpe: "required",

            },
            messages: {
                pilih_produk:{
                    required:"<i class='fa fa-times'></i> Produk harus diisi"
                },
                speed:{
                    required:"<i class='fa fa-times'></i> Speed harus diisi"
                }, 
                deskripsi:{
                    required:"<i class='fa fa-times'></i> Deskripsi harus diisi"
                }, 
                tgl_tagih:{
                    required:"<i class='fa fa-times'></i> Tgl tagih harus diisi"
                },
                tgl_off:{
                    required:"<i class='fa fa-times'></i> Tgl Off harus diisi"
                }, 
                otc:{
                    required:"<i class='fa fa-times'></i> OTC harus diisi"
                }, 
                mrc:{
                    required:"<i class='fa fa-times'></i> MRC harus diisi"
                },
                cpe:{
                    required:"<i class='fa fa-times'></i> CPE harus diisi"
                },
                
            },
            highlight: function (element) {
                $(element).parent().parent().addClass("has-error")
                $(element).parent().addClass("has-error")
            },
            unhighlight: function (element) {
                $(element).parent().removeClass("has-error")
                $(element).parent().parent().removeClass("has-error")
            }
    });
</script>

<style type="text/css">
    .select2 {
width:100%!important;
}
</style>