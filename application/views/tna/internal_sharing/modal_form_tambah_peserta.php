<!-- Modal -->
<div class="modal fade" id="modalTambahPeserta" role="dialog" aria-hidden="true" enctype="multipart/form-data">
    <div class="modal-dialog modal-lg" >
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> Form Tambah Peserta </h4>
            </div>
            <div class="modal-body">
                <div>
                <form method="post" action="javascript:;" class="form-horizontal form-add-kompetensi" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-12">
                            <input type="hidden"  name="KompetensiID" id="KompetensiID" placeholder="" class="form-control input-sm">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Subunit/unit </label>
                                    <div class="col-sm-10">
                                         <select class="select2 form-control" placeholder="Pilih Narasumber" name="filter_narasumber" id="filter_narasumber">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Karyawan</label>
                                    <div class="col-sm-10">
                                        <select class="select2 form-control" placeholder="Pilih Narasumber" name="filter_narasumber" id="filter_narasumber">
                                            <option value=""></option>
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
                                <button type="submit" class="btn btn-info submit-kompetensi">Tambah</button>
                                
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
        placeholder: "Silahkan pilih"
    });

</script>

<style type="text/css">
    
</style>