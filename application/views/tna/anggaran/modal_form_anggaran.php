<!-- Modal -->
<div class="modal fade" id="AddAnggaran" tabindex="-1" role="dialog" aria-hidden="true" enctype="multipart/form-data">
    <div class="modal-dialog modal-md" >
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> Form Anggaran</h4>
            </div>
            <div class="modal-body">
                <div>
                <form method="post" action="javascript:;" class="form-horizontal form-add-angaran" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="hidden"  name="AnggaranID" id="AnggaranID" placeholder="" class="form-control input-sm">
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
                                            <option value="TNA">TNA</option>
                                            <option value="NON TNA">Non TNA</option>
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
                                <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="false">Batal</button>
                                <button type="submit" class="btn btn-info ">Simpan</button>
                                
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
    const submit_anggaran = "<?php echo site_url("/tna/anggaran/submit") ?>";
    $('.select2').select2({
        placeholder: "Please Select"
    });


    $('#year .input-group.date').datepicker({
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years"
    });

    $('.input_mask').mask('000.000.000.000', {reverse: true});

    $(".form-add-angaran").validate({
            rules: {
                nominal: "required",
                tahun: "required",
                tipe: "required"
            },
            messages: {
                nominal:{
                    required:"<i class='fa fa-times'></i> Nominal harus diisi"
                },
                tahun:{
                    required:"<i class='fa fa-times'></i> Tahun harus diisi"
                },
                tipe:{
                    required:"<i class='fa fa-times'></i> Tipe harus diisi"
                }
                
            },
            highlight: function (element) {
                $(element).parent().parent().addClass("has-error")
                $(element).parent().addClass("has-error")
            },
            unhighlight: function (element) {
                $(element).parent().removeClass("has-error")
                $(element).parent().parent().removeClass("has-error")
            },
            submitHandler: function(form) {
                    $.ajax({
                        url: submit_anggaran,
                        type: 'POST',
                        dataType: "JSON",
                        data: $(form).serialize(),
                        success: function(response) {
                            if(response.success){
                                $('#table-anggaran').DataTable().ajax.reload( null, false );
                                $('#AddAnggaran').modal('hide');
                                setTimeout(function() {
                                    swal({
                                        title: "Notifikasi!",
                                        text: response.msg,
                                        imageUrl: '<?= base_url("assets/img/success.png");?>'
                                    }, function() {
                                    //location.reload();
                                        $('#AddAnggaran').modal('hide');
                                    });
                                }, 1000);
                            }else{
                                setTimeout(function() {
                                    swal({
                                        title: "Notifikasi!",
                                        text: response.msg,
                                        imageUrl: '<?= base_url("assets/img/danger-red2.png");?>'
                                    }, function() {
                                        //location.reload();
                                    });
                                }, 1000);
                            }
                            
                        }            
                    });
                }
    });
</script>

<style type="text/css">
    .select2 {
width:100%!important;
}
</style>