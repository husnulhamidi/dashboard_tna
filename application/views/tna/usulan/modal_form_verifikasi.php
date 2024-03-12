<!-- Modal -->
<div class="modal fade" id="ModalFormVerifikasi" tabindex="-1" role="dialog" aria-hidden="true" enctype="multipart/form-data">
    <div class="modal-dialog modal-md" >
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Verifikasi</h4>
            </div>
            <div class="modal-body">
                    
                    <form method="post" action="javascript:;" id="form-verifikasi" class="form-horizontal form-verifikasi" enctype="multipart/form-data">
                    
                    <div class="form-group">
                        <label class="col-sm-12"> <h5>Apakah anda menyetujui usulan TNA ini ?</h5></label>
                        <div class="col-sm-2">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="is_verifikasi" value="2" style="cursor:pointer">
                            <label class="form-check-label">Tidak</label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="is_verifikasi" value="1" style="cursor:pointer">
                            <label class="form-check-label">Ya, Setuju</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-12">Keterangan</label>
                        <div class="col-sm-12">
                            <textarea rows="5" cols="" class="form-control" name="keterangan" id="keterangan"></textarea>
                        </div>
                    </div>
                     <input type="hidden"  name="verifikasi_usulan_id" id="verifikasi_usulan_id" class="form-control input-sm" value="<?php //echo$r->id;?>">
                    
                    
                    <!-- /.box-body -->
                    <div class="box-footer">
                        
                        <div class="">
                            <div class="pull-right"> 
                                <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="false">Close</button>
                                <button type="submit" id="btn_submit_verifikasi" class="btn btn-info ">Simpan</button>
                                
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
