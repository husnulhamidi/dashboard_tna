<!-- Modal -->
<div class="modal fade" id="ModalUploadVerifikasiVP" tabindex="-1" role="dialog" aria-hidden="true" enctype="multipart/form-data">
    <div class="modal-dialog modal-md" >
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Upload Verifikasi VP</h4>
            </div>
            <div class="modal-body">
           
                    <div class="box-body">
                    
                    <form method="post" action="javascript;" class="form-horizontal form-add" enctype="multipart/form-data">
                    
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Kode Generate</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="keterangan">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Upload verifikasi</label>
                        <div class="col-sm-8">
                        <input type="file" class="form-control" name="keterangan">
                        </div>
                    </div>
                    </form>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        
                        <div class="">
                            <div class="pull-right"> 
                                <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="false">Close</button>
                                <button type="submit" class="btn btn-info ">Simpan</button>
                                
                            </div>
                        </div>
                        
                    </div>
                    <!-- /.box-footer -->
                    
                </div>
            </div>
        </div> <!-- /.modal-content -->
    </div> <!-- /.modal-dialog -->
</div> <!-- /.modal -->

<script type="text/javascript">
    $('.select2').select2({
        placeholder: "Please Select"
    });


<style type="text/css">
    .select2 {
width:100%!important;
}
</style>