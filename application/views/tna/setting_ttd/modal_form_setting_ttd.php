<!-- Modal -->
<div class="modal fade" id="AddSetting" role="dialog" aria-hidden="true" enctype="multipart/form-data">
    <div class="modal-dialog modal-lg" >
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> <span id="title"></span> </h4>
            </div>
            <div class="modal-body">
                <div>
                <form method="post" action="javascript:;" class="form-horizontal form-setting" enctype="multipart/form-data" id="form-setting">
                    <input type="hidden" name="id" id="id">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="hidden" name="ket" id="ket">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Nama <span style="color: red">*</span> </label>
                                    <div class="col-sm-10">
                                         <select class="select2 form-control" placeholder="Pilih SubUnit" id="nama" name="nama" onchange="showJabatan()">
                                            <option value=""></option>
                                        </select>
                                        <input type="hidden" name="tmpName" id="tmpName">
                                    </div>
                                </div>
                                <div class="form-group" style="display: none" id="divJabatan">
                                    <label class="col-sm-2 control-label">Jabatan </label>
                                    <div class="col-sm-10">
                                        <input type="text" name="jabatan" id="jabatan" readonly="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Scan TTD<span style="color: red">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="file" name="scan_ttd" id="scan_ttd">
                                        <input type="hidden" name="input-file" value="scan_ttd">
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
                                <button type="submit" class="btn btn-info submit-setting-ttd">Simpan</button>
                                
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
   

   
</script>