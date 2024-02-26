<!-- Modal -->
<div class="modal fade" id="AddFilterLibraryMateri" role="dialog" aria-hidden="true" enctype="multipart/form-data">
    <div class="modal-dialog modal-md" >
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> Form Filter Library Materi</h4>
            </div>
            <div class="modal-body">
                <div>
                <form method="post" action="javascript:;" class="form-horizontal form-filter" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-12">

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Nama Pelatihan / Sertifikasi</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="filter_nama_pelatihan" id="filter_nama_pelatihan" placeholder="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label"> Kompetensi </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="filter_kompetensi" id="filter_kompetensi" placeholder="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label"> Penyelenggara </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="filter_penyelenggara" id="filter_penyelenggara" placeholder="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label"> Tahun TR/Cert </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="thn_tr" id="thn_tr" placeholder="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label"> Jenis Development </label>
                                    <div class="col-sm-9">
                                        <!-- <input type="text" name="filter_penyelenggara" id="filter_penyelenggara" placeholder="" class="form-control"> -->
                                        <select class="form-control" name="filter_development" id="filter_development">
                                            <option value="all"> Semua </option>
                                            <option> Pelatihan </option>
                                            <option> Sertifikasi </option>
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
                                <button type="submit" class="btn btn-info btn-filter">Filter</button>
                                
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