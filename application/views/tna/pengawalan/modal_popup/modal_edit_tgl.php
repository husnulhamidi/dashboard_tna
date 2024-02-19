<!-- Modal -->
<div class="modal fade" id="modalEditTgl" role="dialog" aria-hidden="true" enctype="multipart/form-data">
    <div class="modal-dialog" >
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> Form Edit Jadwal Pelaksanaan </h4>
            </div>
            <div class="modal-body">
                <div>
                <form method="post" action="javascript:;" class="form-horizontal form-confirm" id="form-confirm">
                    <input type="hidden" name="ket" id="ket">
                    <input type="hidden" name="idSharing" id="idSharing">
                    <div class="box-body">
                        <div class="row">
                           <label class="col-md-6"> Jadwal Pelaksanaan</label>
                           <div class="col-md-12">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                    <input type="text" class="form-control pull-right waktu_pelaksanaan" id="waktu_pelaksanaan" name="waktu_pelaksanaan">
                                </div>
                           </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                           <label class="col-md-6"> Alasan </label>
                           <div class="col-md-12">
                               <textarea class="form-control" placeholder="Alasan"></textarea>
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
