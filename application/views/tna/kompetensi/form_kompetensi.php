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
                            <form method="post" action="<?php echo $action_url_submit;?>" class="form-horizontal" enctype="multipart/form-data">
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                       
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Nama Bank</label>
                                            <div class="col-sm-4">
                                                <input type="text"  name="name_bank" id="name_bank"  class="form-control input-sm" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Cabang Bank</label>
                                            <div class="col-sm-4">
                                                <input type="text"  name="cabang_bank" id="cabang_bank"  class="form-control input-sm" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            
                                            <label class="col-sm-2 control-label">Alamat Bank</label>
                                            <div class="col-sm-4">
                                                    <textarea class="form-control" name="address_bank" id="cabang_bank" ></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Jenis Rekening</label>
                                            <div class="col-sm-4">
                                                <input type="text"  name="jenis_rek" id="jenis_rek"  class="form-control input-sm" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Nomor Rekening</label>
                                            <div class="col-sm-4">
                                                <input type="text"  name="norek" id="norek"  class="form-control input-sm" >
                                            </div>
                                        </div>
                                        

                                        

                                    </div> <!-- end col-12 -->
                                   
                                </div><!-- end row -->
                              
                               
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                
                                <div class="col-sm-6">
                                    <div class="pull-right"> 
                                        <a href="<?php echo base_url('bank/data_bank');?>" class="btn btn-default">Kembali</a>
                                        <button type="submit" class="btn btn-info ">Simpan</button>
                                        
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
<script>
<?php //echo $this->jquery_validation->run('.form-horizontal');?>
const base_url = '<?php echo site_url(); ?>'



$(document).ready(function () {




    $(".form-horizontal").validate({
            rules: {
                name_bank: "required",
                cabang_bank: "required",
                address_bank: "required",
                jenis_rek: "required",
                norek: "required",

            },
            messages: {
                name_bank:{
                    required:"<i class='fa fa-times'></i> Nama bank harus diisi"
                },
                cabang_bank:{
                    required:"<i class='fa fa-times'></i> Cabang bank harus diisi"
                }, 
                address_bank:{
                    required:"<i class='fa fa-times'></i> Alamat bank harus diisi"
                },
                jenis_rek:{
                    required:"<i class='fa fa-times'></i> Jenis rekening harus diisi"
                }, 
                norek:{
                    required:"<i class='fa fa-times'></i> Nomor rekening harus diisi"
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

    

});
</script>
