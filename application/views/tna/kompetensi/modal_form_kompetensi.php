<!-- Modal -->
<div class="modal fade" id="AddKompetensi" role="dialog" aria-hidden="true" enctype="multipart/form-data">
    <div class="modal-dialog modal-lg" >
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> Form Tambah Kompetensi</h4>
            </div>
            <div class="modal-body">
                <div>
                <form method="post" action="javascript:;" class="form-horizontal form-add-kompetensi" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-12">
                            <input type="hidden"  name="KompetensiID" id="KompetensiID" placeholder="" class="form-control input-sm">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Job Family</label>
                                    <div class="col-sm-9">
                                        <select class="select2 form-control" name="job_family" id="job_family">
                                            <option value=""></option>
                                            <?php 
                                            foreach ($job_family as $key => $val) {
                                            ?>
                                            <option value="<?php echo$val->code;?>"><?php echo $val->name;?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Job Function</label>
                                    <div class="col-sm-9">
                                        <select class="select2 form-control" placeholder="Plihi Job Function" name="job_function" id="job_function">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Job Role</label>
                                    <div class="col-sm-9">
                                        <select class="select2 form-control" name="job_role" id="job_role">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Kode Kompetensi <span class="text-danger">*</span> </label>
                                    <div class="col-sm-9">
                                        <input type="text"  name="kode_kompetensi" id="kode_kompetensi" placeholder="" class="form-control input-sm">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Kompetensi <span class="text-danger">*</span> </label>
                                    <div class="col-sm-9">
                                        <input type="text"  name="kompetensi" id="kompetensi" placeholder="" class="form-control input-sm">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Owner  <span class="text-danger">*</span> </label>
                                    <div class="col-sm-2">
                                        <div class="radio">
                                            <label>
                                            <input type="radio" name="owner" id="ownerTelkom" value="Telkom" >
                                            Telkom
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="radio">
                                            <label>
                                            <input type="radio" name="owner" id="ownerTsat" value="Telkomsat">
                                            Telkomsat
                                            </label>
                                        </div>
                                    </div>
                                  
                                </div>
                                <!-- <div class="form-group">
                                    <label class="col-sm-3 control-label">Jabatan</label>
                                    <div class="col-sm-9">
                                        <select class="select2 form-control" name="pilih_produk" id="pilih_produk">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </div> -->
                                
    

                            </div> <!-- end col-12 -->
                            
                        </div><!-- end row -->
                        
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        
                        <div class="">
                            <div class="pull-right"> 
                                <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="false">Close</button>
                                <button type="submit" class="btn btn-info submit-kompetensi">Simpan</button>
                                
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
        placeholder: "Silahkan pilih ..."
    });

</script>

<style type="text/css">
    .select2 {
width:100%!important;
}
</style>