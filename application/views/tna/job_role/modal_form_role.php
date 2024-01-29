<!-- Modal -->
<div class="modal fade" id="AddJobRole" role="dialog" aria-hidden="true" enctype="multipart/form-data">
    <div class="modal-dialog modal-lg" >
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> Form Tambah Job Role</h4>
            </div>
            <div class="modal-body">
                <div>
                <form method="post" action="javascript:;" class="form-horizontal form-add-job-role" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="hidden"  name="jobroleID" id="jobroleID" placeholder="" class="form-control input-sm">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Job Function</label>
                                    <div class="col-sm-9">
                                        <select class="select2 form-control" name="job_function_code" id="job_function_code">
                                            <option value=""></option>
                                            <?php 
                                            foreach ($job_function as $key => $val) {
                                            ?>
                                            <option value="<?php echo$val->code;?>"><?php echo $val->name;?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                              
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Kode Job Role <span class="text-danger">*</span> </label>
                                    <div class="col-sm-9">
                                        <input type="text"  name="kode" id="kode" placeholder="" class="form-control input-sm">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Job Role <span class="text-danger">*</span> </label>
                                    <div class="col-sm-9">
                                        <input type="text"  name="job_role" id="job_role" placeholder="" class="form-control input-sm">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Long Name Job Role <span class="text-danger">*</span> </label>
                                    <div class="col-sm-9">
                                        <input type="text"  name="long_name" id="long_name" placeholder="" class="form-control input-sm">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">ObjID Job Role <span class="text-danger">*</span> </label>
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
                                <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="false">Close</button>
                                <button type="submit" class="btn btn-info submit-job-role">Simpan</button>
                                
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

<script type="text/javascript">
    $('.select2').select2({
        placeholder: "Please Select"
    });


    $('#tanggal .input-group.date').datepicker({
        format: "d-m-yyyy",
        viewMode: "date", 
        minViewMode: "date"
    });

    
</script>

<style type="text/css">
    .select2 {
width:100%!important;
}
</style>