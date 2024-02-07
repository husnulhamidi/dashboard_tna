<!-- Modal -->
<div class="modal fade" id="modalTambahMateri" role="dialog" aria-hidden="true" enctype="multipart/form-data">
    <div class="modal-dialog" >
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> <spn id="label"></spn> </h4>
            </div>
            <div class="modal-body">
                <div>
                <form method="post" action="javascript:;" class="form-horizontal form-tambah-materi" id="form-tambah-materi">
                    <input type="hidden" name="ket" id="ket">
                    <input type="hidden" name="id" id="idMateri">
                    <input type="hidden" name="trainingId" id="trainingId" value="<?php echo $detail->id ;?>">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="col-sm-4">Judul Materi <span class="text-red">*</span></label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" placeholder="Judul Pemateri" name="judul_materi" id="judul_materi" >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="col-sm-4">File Materi <span id="reqFile" class="text-red">*</span></label>
                                    <div class="col-sm-12">
                                        <input type="file" class="form-control" placeholder="Judul Pemateri" accept=".pdf,.doc,.xls,.docx,.xlsx" name="file_materi" id="file_materi" >
                                        <input type="hidden" name="input-file" value="file_materi">
                                    </div>
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
                                    class="btn btn-info submit-tambah-materi">
                                    Simpan
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
