<!-- Modal -->
<div class="modal fade" id="modalUploadMateri" role="dialog" aria-hidden="true" enctype="multipart/form-data">
    <div class="modal-dialog" >
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> Upload Materi </h4>
            </div>
            <div class="modal-body">
                <div>
                <form method="post" action="javascript:;" class="form-horizontal form-upload-materi" id="form-upload-materi">
                    <input type="hidden" name="id" id="materi_id">
                    <input type="hidden" name="urutanId" id="materi_urutanId">
                    <input type="hidden" name="tahapanId" id="materi_tahapanId">
                    <div class="box-body">
                        <div class="col-md-12">
                            <label class="col-md-4"> Peserta </label>
                            <div class="col-md-6"> NIK <span id="materi_nik"></span> - <span id="materi_nama"></span>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4"> Nama Penyelenggara </label>
                                <div class="col-md-6"> <span id="materi_penyelenggara"></span></div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4"> Pelatihan  </label>
                                <div class="col-md-6"> <span id="materi_pelatihan"></span> </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4"> Subdit/unit  </label>
                                <div class="col-md-6"> <span id="materi_unit"></span> </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px"><hr></div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4"> Nama Dokumen <span style="color: red">*</span></label>
                                <div class="col-md-12">
                                    <input type="text" name="nama_dokumen" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4"> Upload File </label>
                                <div class="col-md-12">
                                    <input type="file" name="file_materi" id="file_materi" class="form-control" >

                                    <input type="hidden" name="upload_file_materi" value="file_materi">
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
                                    class="btn btn-info submit-upload-materi" id="submit-upload-materi">
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
