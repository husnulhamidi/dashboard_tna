<style type="text/css">
    .error{
        color: #a94442;
    }
</style>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <?php $this->load->view('layouts/alert'); ?>
            <div class="nav-tabs-custom-aqua">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title"><?php echo $title;?></h3>
                    </div>
                    <form method="post" action="javascript:;" class="form-horizontal form-InternalSharing" enctype="multipart/form-data">
                        <input type="hidden" name="id" value=<?php echo @$detail->id;?>>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-lg-12">

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Judul Materi <span class="text-red">*</span></label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" placeholder="Judul Pemateri" name="judul" id="judul">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Pemateri <span class="text-red">*</span></label>
                                        <div class="col-sm-6">
                                           <select class="select2 form-control" id="pemateri" name="pemateri">
                                               <option value=""> Pilih Pemateri</option>
                                           </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Direktorat <span class="text-red">*</span></label>
                                        <div class="col-sm-6">
                                           <select class="select2 form-control" id="direktorat" name="direktorat">
                                               <option value=""> Pilih Direktorat</option>
                                           </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Tanggal <span class="text-red">*</span></label>
                                        <div class="col-sm-3">
                                            <div class="input-group">
                                                <input type="text" class="form-control pull-right" id="tgl" name="tgl">
                                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>

                                        <label class="col-sm-1 control-label">Jam <span class="text-red">*</span></label>
                                        <div class="col-sm-2">
                                            <div class="input-group">
                                                
                                                <input type="text" class="form-control pull-right timepicker" id="time" name="time">
                                                <div class="input-group-addon"><i class="fa fa-clock-o"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Tempat <span class="text-red">*</span></label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" placeholder="Temapt" name="tempat" id="tempat">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Biaya <span class="text-red">*</span></label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" placeholder="Pemateri" name="biaya" id="biaya">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Kouta <span class="text-red">*</span></label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" placeholder="Kouta" name="kouta" id="kouta">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Link Zoom <span class="text-red">*</span></label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" placeholder="Link Zoom" name="linkZoom" id="linkZoom">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="box-footer">

                            <div class="col-sm-8">
                                <div class="pull-right"> 
                                    <a href="<?php echo base_url('tna/InternalSharing');?>" class="btn btn-default">Kembali</a>
                                    <button type="submit" class="btn btn-info submit-justifikasi">Simpan</button>

                                </div>
                            </div>
                            <div class="col-sm-6"> 
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    $(document).ready(function () {
        $('.select2').select2({
            placeholder: "Pilih Opsi"
        });

        $('#tgl').datepicker({
          autoclose: true
        });

        $(".timepicker").timepicker({
          showInputs: false
        });
    })
</script>
