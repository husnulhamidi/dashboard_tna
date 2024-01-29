<!-- Modal -->
<div class="modal fade" id="AddKompetensi" tabindex="-1" role="dialog" aria-hidden="true" enctype="multipart/form-data">
    <div class="modal-dialog modal-lg" >
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> Form Tambah Kompetensi</h4>
            </div>
            <div class="modal-body">
                <div>
                <form method="post" action="<?php echo $action_url_submit;?>" class="form-horizontal form-add" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-12">

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Job Family</label>
                                    <div class="col-sm-9">
                                        <select class="select2 form-control" name="pilih_produk" id="pilih_produk">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Job Function</label>
                                    <div class="col-sm-9">
                                        <select class="select2 form-control" name="pilih_produk" id="pilih_produk">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Job Role</label>
                                    <div class="col-sm-9">
                                        <select class="select2 form-control" name="pilih_produk" id="pilih_produk">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Kompetensi <span class="text-red">*</i></label>
                                    <div class="col-sm-7">
                                        <select class=" form-control" name="pilih_produk" id="pilih_produk">
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
                                        <input type="text"  name="speed" id="speed" placeholder="" class="form-control input-sm">
                                    </div>
                                </div>
                                <div class="form-group newkompetensi" style="display:none">
                                    <label class="col-sm-3 control-label">Kompetensi <span class="text-red">*</i></label>
                                    <div class="col-sm-9">
                                        <input type="text"  name="speed" id="speed" placeholder="" class="form-control input-sm">
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
    $('.select2').select2({
        placeholder: "Please Select"
    });

    function ShowNewKompetensi(){
        $(".newkompetensi").show();
    }


    $('#tanggal .input-group.date').datepicker({
        format: "d-m-yyyy",
        viewMode: "date", 
        minViewMode: "date"
    });

    $('.input_mask').mask('000.000.000.000', {reverse: true});

    $(".form-add").validate({
            rules: {
                pilih_produk: "required",
                speed: "required",
                tgl_tagih: "required",
                tgl_off: "required",
                deskripsi: "required",
                otc: "required",
                mrc: "required",
                cpe: "required",

            },
            messages: {
                pilih_produk:{
                    required:"<i class='fa fa-times'></i> Produk harus diisi"
                },
                speed:{
                    required:"<i class='fa fa-times'></i> Speed harus diisi"
                }, 
                deskripsi:{
                    required:"<i class='fa fa-times'></i> Deskripsi harus diisi"
                }, 
                tgl_tagih:{
                    required:"<i class='fa fa-times'></i> Tgl tagih harus diisi"
                },
                tgl_off:{
                    required:"<i class='fa fa-times'></i> Tgl Off harus diisi"
                }, 
                otc:{
                    required:"<i class='fa fa-times'></i> OTC harus diisi"
                }, 
                mrc:{
                    required:"<i class='fa fa-times'></i> MRC harus diisi"
                },
                cpe:{
                    required:"<i class='fa fa-times'></i> CPE harus diisi"
                },
                
            },
            highlight: function (element) {
                $(element).parent().parent().addClass("has-error")
                $(element).parent().addClass("has-error")
            },
            unhighlight: function (element) {
                $(element).parent().removeClass("has-error")
                $(element).parent().parent().removeClass("has-error")
            }
    });
</script>

<style type="text/css">
    .select2 {
width:100%!important;
}
</style>