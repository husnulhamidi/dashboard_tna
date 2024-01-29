<!-- Modal -->
<div class="modal fade" id="AddFilterLibraryMateri" tabindex="-1" role="dialog" aria-hidden="true" enctype="multipart/form-data">
    <div class="modal-dialog modal-md" >
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> Form Filter Materi</h4>
            </div>
            <div class="modal-body">
                <div>
                <form method="post" action="<?php echo $action_url_submit;?>" class="form-horizontal form-add" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-12">

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Nominal</label>
                                    <div class="col-sm-9">
                                        <input type="text"  name="nominal" id="nominal" placeholder="" class="form-control input-sm input_mask">
                                    </div>
                                </div>
                                <div class="form-group">                    
                                    <label class="col-sm-3 control-label">Tahun</label>
                                    <div class="col-sm-9" id="year">
                                        <div class="input-group date">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input autocomplete="off" type="text" class="form-control input-sm" name="tahun" id="tahun" >
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Tipe</label>
                                    <div class="col-sm-9">
                                        <select name="tipe" id="tipe" class="select2 form-control input-sm">
                                            <option value="">-------</option>
                                            <option value="tna">TNA</option>
                                            <option value="nontna">Non TNA</option>
                                        </select>
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
                                <button type="submit" class="btn btn-info ">Filter</button>
                                
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
    $('.input_mask').mask('000.000.000.000', {reverse: true});
    $('.select2').select2({
        placeholder: "Please Select"
    });

    $('#year .input-group.date').datepicker({
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years"
    });


   
</script>

<style type="text/css">
    .select2 {
width:100%!important;
}
</style>