<!-- Modal -->
<div class="modal fade" id="ModalFilterUsulan" tabindex="-1" role="dialog" aria-hidden="true" enctype="multipart/form-data">
    <div class="modal-dialog modal-lg" >
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> Form Filter</h4>
            </div>
            <div class="modal-body">
                <div>
                <form method="post" action="javascript;" class="form-horizontal form-add" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-12">

                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Direktorat</label>
                                            <div class="col-sm-8">
                                                <select class="select2 form-control" name="pilih_produk" id="edit-pilih_produk">
                                                    <option value="1">.....</option>
                                                   
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Subdit/Unit</label>
                                            <div class="col-sm-8">
                                                <select class="select2 form-control" name="pilih_produk" id="edit-pilih_produk">
                                                    <option value="1">....</option>
                                                   
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Bidang</label>
                                            <div class="col-sm-8">
                                                <select class="select2 form-control" name="pilih_produk" id="edit-pilih_produk">
                                                    <option value="1">.....</option>
                                                   
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Nama Karyawan</label>
                                            <div class="col-sm-8">
                                                <select class="select2 form-control" name="pilih_produk" id="edit-pilih_produk">
                                                    <option value="1">Semua</option>
                                                   
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Status Karyawan</label>
                                            <div class="col-sm-8">
                                                <input  class="form-control" name="pilih_produk" id="edit-pilih_produk"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Kompetensi</label>
                                            <div class="col-sm-8">
                                                <select class="select2 form-control" name="pilih_produk" id="edit-pilih_produk">
                                                    <option value="1">Semua</option>
                                                   
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Jenis Development Karyawan</label>
                                            <div class="col-sm-8">
                                                <select class="select2 form-control" name="pilih_produk" id="edit-pilih_produk">
                                                    <option value="1">Semua</option>
                                                   
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Nama Pelatihan / Sertifikasi</label>
                                            <div class="col-sm-8">
                                                <select class="select2 form-control" name="pilih_produk" id="edit-pilih_produk">
                                                    <option value="1">Semua</option>
                                                   
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Justifikasi Pengajuan</label>
                                            <div class="col-sm-8">
                                                <textarea type="text"  name="jenis_rek" id="jenis_rek"  class="form-control input-sm" ></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Metode Pembelajaran</label>
                                            <div class="col-sm-8">
                                                <select class="select2 form-control" name="pilih_produk" id="edit-pilih_produk">
                                                    <option value="1">Semua</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Estimasi Biaya</label>
                                            <div class="col-sm-8">
                                                <input  class="form-control" name="pilih_produk" id="edit-pilih_produk"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Nama Penyelenggara</label>
                                            <div class="col-sm-8">
                                                <input  class="form-control" name="pilih_produk" id="edit-pilih_produk"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Tahapan</label>
                                            <div class="col-sm-8">
                                                <select class="select2 form-control" name="pilih_produk" id="edit-pilih_produk">
                                                    <option value="1">Semua</option>
                                                   
                                                </select>
                                            </div>
                                        </div>
    

                            </div> <!-- end col-12 -->
                            
                        </div><!-- end row -->
                        
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        
                        <div class="">
                            <div class="pull-right"> 
                                <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="false">Close</button>
                                <button type="submit" class="btn btn-info ">Simpan</button>
                                
                            </div>
                        </div>
                        
                    </div>
                    <!-- /.box-footer -->
                    </form>
                </div>
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