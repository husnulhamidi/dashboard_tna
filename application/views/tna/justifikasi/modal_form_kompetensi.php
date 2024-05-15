<!-- Modal -->
<div class="modal fade" id="AddKompetensi" tabindex="-1" role="dialog" aria-hidden="true" enctype="multipart/form-data">
    <div class="modal-dialog modal-lg" >
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> <span id="label2"></span></h4>
            </div>
            <div class="modal-body">
                <div>
                <form method="post" action="#" class="form-horizontal formkompetensi" id="formkompetensi" enctype="multipart/form-data">
                    <input type="hidden" name="kompetensiId" id="kompetensiId">
                    <input type="hidden" name="justifikasiId" id="justifikasiId">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-12">

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Job Family</label>
                                    <div class="col-sm-9">
                                        <select class="select2 form-control" name="jobFamily" id="jobFamily" onChange="getJobFunc()">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Job Function</label>
                                    <div class="col-sm-9">
                                        <select class="select2 form-control" name="jobFunc" id="jobFunc" onChange="getJobRole()">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Job Role</label>
                                    <div class="col-sm-9">
                                        <select class="select2 form-control" name="jobRole" id="jobRole" onChange="getJobKompetensi()">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Kompetensi <span id="spanKompetensi" class="text-red">*</i></label>
                                    <div class="col-sm-7">
                                        <select class="select2 form-control" name="kompetensi" id="kompetensi">
                                            <option value="">Pilih Kompetensi</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <a href="#"  onclick="ShowNewKompetensi()" class="btn btn-sm bg-navy btn-flat btn-block btn-input-kompetensi-baru">Input Baru</a>
                                    </div>
                                </div>
                                <div class="form-group newkompetensi" style="display:none">
                                    <label class="col-sm-3 control-label">Kode Kompetensi <span class="text-red">*</i></label>
                                    <div class="col-sm-9">
                                        <input type="hidden" id="addNew" name="addNew">
                                        <input type="text"  name="kode" id="kode" placeholder="" class="form-control input-sm">
                                    </div>
                                </div>
                                <div class="form-group newkompetensi" style="display:none">
                                    <label class="col-sm-3 control-label">Kompetensi <span class="text-red">*</i></label>
                                    <div class="col-sm-9">
                                        <input type="text"  name="name" id="name" placeholder="" class="form-control input-sm">
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
                                <button type="submit" class="btn btn-info btn-form-kompetensi">Simpan</button>
                                
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

    function ShowNewKompetensi(){
        $('#addNew').val('true')
        $('#kompetensi').attr('disabled', true)
        $('#spanKompetensi').css("display","none")
        $(".newkompetensi").show();
    }


    $('#tanggal .input-group.date').datepicker({
        format: "d-m-yyyy",
        viewMode: "date", 
        minViewMode: "date"
    });

    $('.input_mask').mask('000.000.000.000', {reverse: true});

  
</script>

<style type="text/css">
    .select2 {
width:100%!important;
}
</style>