<!-- Modal -->
<style type="text/css">
    .datepicker.dropdown-menu {
        max-width: 500px;
    }
</style>
<div class="modal fade" id="modalFilter" role="dialog" aria-hidden="true" enctype="multipart/form-data">
    <div class="modal-dialog modal-lg" >
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> Form Filter Internal Sharing </h4>
            </div>
            <div class="modal-body">
                <div>
                <form method="post" action="javascript:;" class="form-horizontal form-add-kompetensi" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-12">
                            <input type="hidden"  name="KompetensiID" id="KompetensiID" placeholder="" class="form-control input-sm">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Materi </label>
                                    <div class="col-sm-10">
                                        <input type="text"  name="filer_materi" id="filer_materi" placeholder="Materi" class="form-control input-sm">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Narasumber</label>
                                    <div class="col-sm-10">
                                        <select class="select2 form-control" placeholder="Pilih Narasumber" name="filter_narasumber" id="filter_narasumber">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Tanggal</label>
                                    <div class="col-sm-4">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="filter_tgl_mulai" id="filter_tgl_mulai">
                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">s/d</div>
                                    <div class="col-sm-5">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="filter_tgl_selesai" id="filter_tgl_selesai">
                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Tampat</label>
                                    <div class="col-sm-10">
                                        <input type="text"  name="tempat" id="tempat" placeholder="Tempat" class="form-control input-sm">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Biaya</label>
                                    <div class="col-sm-4">
                                         <input type="number" class="form-control" name="filter_biaya_min" id="filter_biaya_min">
                                    </div>
                                    <div class="col-sm-1">s/d</div>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control" name="filter_biaya_max" id="filter_biaya_max">
                                       
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
                                <button type="submit" class="btn btn-info submit-kompetensi">Cari</button>
                                
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
        placeholder: "Silahkan pilih narasumber"
    });

    $('#filter_tgl_mulai').datepicker({
        autoclose: true
    })

     $('#filter_tgl_selesai').datepicker({
        autoclose: true
    })

</script>

<style type="text/css">
    
</style>