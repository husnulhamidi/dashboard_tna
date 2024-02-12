<!-- Modal -->
<div class="modal fade" id="modalVerifikasi" role="dialog" aria-hidden="true" enctype="multipart/form-data">
    <div class="modal-dialog" >
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> Verifikasi <span id="labelJabatan"></span> </h4>
            </div>
            <div class="modal-body">
                <div>
                <form method="post" action="javascript:;" class="form-horizontal form-confirm" id="form-confirm">
                    <input type="hidden" name="jabatan" id="jabatan">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <label class="col-md-8"> Apakah anda menyetujuinya ?</label>
                                <div class="col-md-6">
                                    <div class="grid grid-cols-2">
                                        <input type="radio" name=""><span style="margin-right: 50px"> Tidak </span>
                                        <input type="radio" name=""> Ya
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-8">Keterangan</label>
                                <div class="col-md-12">
                                    <textarea class="form-control" placeholder="... Keterangan" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        
                        <div class="">
                            <div class="pull-right"> 
                                <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="false">Close</button>
                                <button 
                                    type="submit" 
                                    class="btn btn-info submit-confirm" id="submit-confirm">
                                    Submit
                                </button>
                                
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
