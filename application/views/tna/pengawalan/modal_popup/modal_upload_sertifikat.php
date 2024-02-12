<!-- Modal -->
<div class="modal fade" id="modalUploadSertifikat" role="dialog" aria-hidden="true" enctype="multipart/form-data">
    <div class="modal-dialog" >
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> Upload Sertifikat </h4>
            </div>
            <div class="modal-body">
                <div>
                <form method="post" action="javascript:;" class="form-horizontal form-confirm" id="form-confirm">
                    <input type="hidden" name="jabatan" id="jabatan">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <label class="col-md-4"> Peserta </label>
                                <div class="col-md-6"> NIK 001 - Citra Dewi</div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4"> Nama Penyelenggara </label>
                                <div class="col-md-6"> Hukum Online </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4"> Pelatihan  </label>
                                <div class="col-md-6"> Legal Compliance </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px"><hr></div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4"> Nomor Sertikat </label>
                                <div class="col-md-8">
                                    <input type="text" name="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4"> Masa Berlaku </label>
                                <div class="col-md-8">
                                    <input type="text" name="" class="form-control" id="waktu_pelaksanaan">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4">Upload File</label>
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
