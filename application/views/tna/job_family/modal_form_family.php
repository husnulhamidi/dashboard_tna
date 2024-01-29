<!-- Modal -->
<div class="modal fade" id="AddJobFamily" tabindex="-1" role="dialog" aria-hidden="true" enctype="multipart/form-data">
    <div class="modal-dialog modal-lg" >
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> Form Tambah Job Family</h4>
            </div>
            <div class="modal-body">
                <div>
                <form method="post" action="javascript:;" class="form-horizontal form-add-job-family" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-12">
                            <input type="hidden"  name="JobFamilyID" id="JobFamilyID" placeholder="" class="form-control input-sm">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Kode Job Family <span class="text-danger">*</span> </label>
                                    <div class="col-sm-9">
                                        <input type="text"  name="kode" id="kode" placeholder="" class="form-control input-sm">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Job Family <span class="text-danger">*</span> </label>
                                    <div class="col-sm-9">
                                        <input type="text"  name="job_family" id="job_family" placeholder="" class="form-control input-sm">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Obj ID <span class="text-danger">*</span> </label>
                                    <div class="col-sm-9">
                                        <input type="text"  name="objid" id="objid" placeholder="" class="form-control input-sm">
                                    </div>
                                </div>
                                
    

                            </div> <!-- end col-12 -->
                            
                        </div><!-- end row -->
                        
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        
                        <div class="">
                            <div class="pull-right"> 
                                <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="false">Batal</button>
                                <button type="submit" class="btn btn-info submit-job-family">Simpan</button>
                                
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
