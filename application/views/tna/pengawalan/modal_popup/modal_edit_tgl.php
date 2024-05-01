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
                <form method="post" action="javascript:;" class="form-horizontal form-edit-waktu" id="form-edit-waktu">
                    <input type="hidden" name="id_pengawalan" id="id_edit_waktu">
                    <div class="box-body">
                        <div class="row">
                           <label class="col-md-6"> Waktu Awal Pelaksanaan </label>
                           <div class="col-md-12">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                    <input type="text" class="form-control pull-right tgl" id="waktu_awal" name="waktu_awal_pelaksanaan">
                                </div>
                           </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                           <label class="col-md-6"> Waktu Akhir Pelaksanaan</label>
                           <div class="col-md-12">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                    <input type="text" class="form-control pull-right tgl" id="waktu_akhir" name="waktu_akhir_pelaksanaan">
                                </div>
                           </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                           <label class="col-md-6"> Alasan </label>
                           <div class="col-md-12">
                               <textarea class="form-control" placeholder="Alasan" name="alasan"></textarea>
                           </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        
                        <div class="">
                            <div class="pull-right"> 
                                <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="false">Close</button>
                                <button 
                                    type="submit" 
                                    class="btn btn-info submit-edit-waktu" id="submit-edit-waktu">
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
