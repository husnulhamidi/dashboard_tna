<!-- Modal -->
<div class="modal fade" id="AddLembaga"  role="dialog" aria-hidden="true" enctype="multipart/form-data">
    <div class="modal-dialog modal-lg" >
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> Form Lembaga</h4>
            </div>
            <div class="modal-body">
                <div>
                <form method="post" action="javascript:;" class="form-horizontal form-add-lembaga" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="hidden"  name="LembagaID" id="LembagaID" placeholder="" class="form-control input-sm">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Nama Lembaga <span class="text-danger">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="text"  name="nama_lembaga" id="nama_lembaga" placeholder="" class="form-control input-sm">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">PIC</label>
                                    <div class="col-sm-9">
                                        <input type="text"  name="pic" id="pic" placeholder="" class="form-control input-sm">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Telp</label>
                                    <div class="col-sm-9">
                                        <input type="text"  name="telp" id="telp" placeholder="Jika lebih dari satu nomor telp. pisahkan dgn koma (,)" class="form-control input-sm">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Website</label>
                                    <div class="col-sm-9">
                                        <input type="text"  name="website" id="website" placeholder="Contoh : www.telkomsat.com" class="form-control input-sm">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Alamat</label>
                                    <div class="col-sm-9">
                                        <textarea name="alamat" id="alamat" placeholder="" class="form-control input-sm"></textarea>
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
                                <button type="submit" class="btn btn-info submit-lembaga">Simpan</button>
                                
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

</script>

<style type="text/css">
    .select2 {
width:100%!important;
}
</style>