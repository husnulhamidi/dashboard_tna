<!-- Modal -->
<div class="modal fade" id="AddTrainingLembaga" tabindex="-1" role="dialog" aria-hidden="true" enctype="multipart/form-data">
    <div class="modal-dialog modal-lg" >
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> Form List Pelatihan / Sertifikasi</h4>
            </div>
            <div class="modal-body">
                <div>
                <form method="post" action="javascript:;" class="form-horizontal form-add-lembaga-training" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="hidden"  name="detail_id" id="detail_id" placeholder="" class="form-control input-sm">
                                <input type="hidden"  name="lembaga_id" id="lembaga_id"value="<?php echo $lembaga['data']->id;?>" class="form-control input-sm">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Nama Pelatihan  <span class="text-danger">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="text"  name="nama_pelatihan" id="nama_pelatihan" placeholder="" class="form-control input-sm">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Jenis Pelatihan  <span class="text-danger">*</span> </label>
                                    
                                    <div class="col-sm-2">
                                        <div class="radio">
                                            <label>
                                            <input type="radio" name="jenis_pelatihan" id="jenis_pelatihan1" value="Pelatihan" >
                                            Pelatihan
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="radio">
                                            <label>
                                            <input type="radio" name="jenis_pelatihan" id="jenis_pelatihan2" value="Sertifikasi">
                                            Sertifikasi
                                            </label>
                                        </div>
                                    </div>
                                           
                                    
                                </div>
                               
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Metoda <span class="text-danger">*</span></label>
                                  
                                    <div class="col-sm-2">
                                        <div class="radio">
                                            <label>
                                            <input type="radio" name="metoda" id="metodaOnline" value="Online">
                                            Online
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="radio">
                                            <label>
                                            <input type="radio" name="metoda" id="metodaOffline" value="Offline">
                                            Offline
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="radio">
                                            <label>
                                            <input type="radio" name="metoda" id="metodaBlended" value="Blended">
                                            Blended
                                            </label>
                                        </div>
                                    </div>
                                            
                                        
                                </div>
                               
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Kapasitas <span class="text-danger">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="text"  name="kapasitas" id="kapasitas" placeholder="" class="form-control input-sm">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Perkiraan Biaya <span class="text-danger">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="text"  name="biaya" id="biaya" placeholder="Rp. ........" class="form-control input-sm input_mask">
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
                                <button type="submit" class="btn btn-info submit-detail-lembaga">Simpan</button>
                                
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

    $('.input_mask').mask('000.000.000.000', {reverse: true});
</script>

<style type="text/css">
    .select2 {
width:100%!important;
}
</style>