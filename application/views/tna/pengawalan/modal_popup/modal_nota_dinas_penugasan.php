<!-- Modal -->
<div class="modal fade" id="modalNotaDinasPenugasan" role="dialog" aria-hidden="true" enctype="multipart/form-data">
    <div class="modal-dialog" >
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> Form Nota Dinas Penugasan </h4>
            </div>
            <div class="modal-body">
                <div>
                <form method="post" action="javascript:;" class="form-horizontal form-confirm" id="form-confirm">
                    <input type="hidden" name="jabatan" id="jabatan">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h5> Upload Dokumen NDE </h5>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px; margin-left: 20px">
                            <div class="col-md-12">
                                <label class="col-md-4"> No NDE </label>
                                <div class="col-md-8">
                                    <input type="text" name="" class="form-control" placeholder="No NDE">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px; margin-left: 20px">
                            <div class="col-md-12">
                                <label class="col-md-4"> Perihal </label>
                                <div class="col-md-8">
                                    <input type="text" name="" class="form-control" placeholder="Perihal">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px; margin-left: 20px">
                            <div class="col-md-12">
                                <label class="col-md-4"> Tanggal Rilis </label>
                                <div class="col-md-8">
                                    <input type="text" name="" class="form-control" placeholder="Tanggal Rilis" id="tgl_rilis">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px; margin-left: 20px">
                            <div class="col-md-12">
                                <label class="col-md-4"> Disetujui Oleh </label>
                                <div class="col-md-8">
                                    <input type="text" name="" class="form-control" placeholder="Disetujui Oleh">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px; margin-left: 20px">
                            <div class="col-md-12">
                                <label class="col-md-4"> Keterangan </label>
                                <div class="col-md-8">
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px; margin-left: 20px">
                            <div class="col-md-12">
                                <label class="col-md-4"> Uplaod Dokumen </label>
                                <div class="col-md-8">
                                    <input type="file" name="" class="form-control">
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
<?php $this->load->view('tna/pengawalan/modal_popup/modal_form_sppdp');?>
<script type="text/javascript">
    $('#tgl_rilis').datepicker({
      autoclose: true
    });
</script>
