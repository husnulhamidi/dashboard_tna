<!-- Modal -->
<div class="modal fade" id="ModalAddTraining" tabindex="-1" role="dialog" aria-hidden="true" enctype="multipart/form-data">
    <div class="modal-dialog modal-lg" >
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> Form Tambah Pelatihan/Sertifikasi</h4>
            </div>
            <div class="modal-body">
                <div>
                <form method="post" action="#" class="form-horizontal form-add" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-12">

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Nama TNA (Pelatihan/Sertifikasi)</label>
                                    <div class="col-sm-9">
                                        <input type="text"  name="speed" id="speed" placeholder="" class="form-control input-sm">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Kategori Pelatihan</label>
                                    <div class="col-sm-9">
                                        <select class="select2 form-control" name="pilih_produk" id="pilih_produk">
                                            <option value=""></option>
                                            <option value="Pelatihan">Pelatihan</option>
                                            <option value="Sertifikasi">Sertifikasi</option>
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
