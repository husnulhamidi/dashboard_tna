<!-- Modal -->
<div class="modal fade" id="ModalVerifikasiTrainingMandiri" tabindex="-1" role="dialog" aria-hidden="true" enctype="multipart/form-data">
    <div class="modal-dialog modal-md" >
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Verifikasi <span id="actionBy"></span> </h4>
            </div>
            <div class="modal-body">
           
                    <div class="box-body">
                    
                    <form method="post" action="#" class="form-horizontal form-verifikasi" id="form-verifikasi" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="id">
                    <input type="hidden" name="is_approval" id="is_approval">
                    <div class="form-group">
                        <label class="col-sm-12"> <h5>Apakah anda menyetujui Training Mandiri ini?</h5></label>
                        <div class="col-sm-2">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="verifikasi" value="Rejected">
                            <label class="form-check-label">Reject</label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="verifikasi" value="Approved">
                            <label class="form-check-label">Approve</label>
                            </div>
                        </div>
                    </div>
                    <div id="divApproval" style="display:none">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label class="col-md-3">No HT</label>
                                <input type="text" class="form-control" placeholder="No HT" name="no_ht">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <label class="col-md-3">No SPB</label>
                                <input type="text" class="form-control" placeholder="No SPB" name="no_spb">
                            </div>
                        </div>
                    </div>
                    <div class="form-group keterangan">
                        <label class="col-sm-12">Keterangan</label>
                        <div class="col-sm-12">
                            <textarea rows="5" cols="" class="form-control" name="keterangan" id="keterangan"></textarea>
                            <label id="keterangan-error" style="color: red; display: none" class="error" for="keterangan"><i class="fa fa-times"></i> Keterangan harus diisi</label>
                        </div>
                    </div>
                    </form>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        
                        <div class="">
                            <div class="pull-right"> 
                                <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="false">Close</button>
                                <button type="submit" class="btn btn-info btn-varifikasi">Simpan</button>
                                
                            </div>
                        </div>
                        
                    </div>
                    <!-- /.box-footer -->
                    
                </div>
            </div>
        </div> <!-- /.modal-content -->
    </div> <!-- /.modal-dialog -->
</div> <!-- /.modal -->
<script>

$('input[type="radio"][name="verifikasi"]').change(function() {
    if($('#is_approval').val() == 0){
        var selectedValue = $(this).val();
        $('#divApproval').css('display', 'none')
        if (selectedValue === 'Approved') {
            $('#divApproval').css('display', 'block')
        }
    }
   
});

</script>
