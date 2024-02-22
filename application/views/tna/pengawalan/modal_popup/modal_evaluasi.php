<!-- Modal -->
<div class="modal fade" id="modalEvaluasi" role="dialog" aria-hidden="true" enctype="multipart/form-data" tabindex="-1">
    <div class="modal-dialog" >
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> Evaluasi Training </h4>
            </div>
            <div class="modal-body">
                <div>
                <form method="post" action="javascript:;" class="form-horizontal form-evaluasi" id="form-evaluasi">
                    <input type="hidden" name="id" id="evaluasi_id">
                    <input type="hidden" name="urutanId" id="evaluasi_urutanId">
                    <input type="hidden" name="tahapanId" id="evaluasi_tahapanId">
                    <input type="hidden" name="is_complete" id="evaluasi_isComplete">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h5>Telah terupdate secara otomatis oleh system pada berikut : </h5>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px; margin-left:20px">
                            <div class="col-md-12">
                                <label class="col-md-4"> Nama </label>
                                <div class="col-md-6"> <span id="evaluasi_nama"></span> </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px; margin-left:20px">
                            <div class="col-md-12">
                                <label class="col-md-4"> NIK </label>
                                <div class="col-md-6"> <span id="evaluasi_nik"></span> </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px;margin-left:20px">
                            <div class="col-md-12">
                                <label class="col-md-4"> Unit  </label>
                                <div class="col-md-6"> <span id="evaluasi_unit"></span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        
                        <div class="">
                            <div class="pull-right"> 
                                <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="false">Close</button>
                                <button 
                                    type="submit" 
                                    class="btn btn-info submit-evaluasi" id="submit-evaluasi">
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
