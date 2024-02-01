<style type="text/css">
    .error{
        color: #a94442;
    }
</style>
<!-- Main content -->
<section class="content">
    <!-- Main row -->
    <div class="row">
        <div class="col-md-12">
            <?php $this->load->view('layouts/alert'); ?>
            <?php // echo '<pre>'; print_r($this->session->userdata()); ?>
            <div class="nav-tabs-custom-aqua">
                
               
                    
                    <!-- Horizontal Form -->
                        <div class="box box-info">
                            <div class="box-header with-border">
                                <h3 class="box-title"><?php echo $title;?></h3>
                            </div>
                        <!-- /.box-header -->
                            <!-- form start -->
                            <form method="post" action="javascript:;" class="form-horizontal form-justifikasi" enctype="multipart/form-data">
                                <input type="hidden" name="id" value=<?php echo @$detail->id;?>>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                       
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Justifikasi <span class="text-red">*</span></label>
                                            <div class="col-sm-6">
                                                <textarea class="form-control" name="justifikasi" id="cabang_bank" ><?php echo @$detail->justifikasi;?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Deskripsi <span class="text-red">*</span></label>
                                            <div class="col-sm-6">
                                                <textarea class="form-control" rows="5" name="deskripsi" id="cabang_bank" ><?php echo @$detail->deskripsi;?></textarea>
                                            </div>
                                        </div>
                                        

                                    </div> <!-- end col-12 -->
                                   
                                </div><!-- end row -->
                              
                               
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                
                                <div class="col-sm-8">
                                    <div class="pull-right"> 
                                        <a href="<?php echo base_url('tna/justifikasi');?>" class="btn btn-default">Kembali</a>
                                        <button type="submit" class="btn btn-info submit-justifikasi">Simpan</button>
                                        
                                    </div>
                                </div>
                                <div class="col-sm-6"> 
                                </div>
                            </div>
                            <!-- /.box-footer -->
                            </form>
                        </div>
          <!-- /.box -->
                    
               
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    var url_detail_justifikasi = '<?php echo base_url('tna/justifikasi/detail');?>';
</script>
