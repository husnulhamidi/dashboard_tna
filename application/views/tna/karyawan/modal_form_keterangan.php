<!-- Modal -->
<div class="modal fade" id="ModalVerifikasiTrainingMandiri" tabindex="-1" role="dialog" aria-hidden="true" enctype="multipart/form-data">
    <div class="modal-dialog modal-md" >
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Verifikasi</h4>
            </div>
            <div class="modal-body">
           
                    <div class="box-body">
                    
                    <form method="post" action="javascript;" class="form-horizontal form-add" enctype="multipart/form-data">
                    
                    <div class="form-group">
                        <label class="col-sm-12"> <h5>Apakah anda menyetujui Training Mandiri ini?</h5></label>
                        <div class="col-sm-2">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="radio1">
                            <label class="form-check-label">Reject</label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="radio1">
                            <label class="form-check-label">Approve</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">Keterangan</label>
                        <div class="col-sm-12">
                            <textarea rows="5" cols="" class="form-control" name="keterangan"></textarea>
                        </div>
                    </div>
                    </form>
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
                    
                </div>
            </div>
        </div> <!-- /.modal-content -->
    </div> <!-- /.modal-dialog -->
</div> <!-- /.modal -->

<script type="text/javascript">
    $('.select2').select2({
        placeholder: "Please Select"
    });


<style type="text/css">
    .select2 {
width:100%!important;
}
</style>