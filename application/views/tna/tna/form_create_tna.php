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
                            <form method="post" action="<?php echo $action_url;?>" class="form-horizontal" enctype="multipart/form-data">
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Direktorat</label>
                                            <div class="col-sm-7">
                                                <select class="select2 form-control" name="pilih_produk" id="edit-pilih_produk">
                                                    <option value="1">Pilih Direktorat ....?</option>
                                                   
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Subdit/Unit</label>
                                            <div class="col-sm-7">
                                                <select class="select2 form-control" name="pilih_produk" id="edit-pilih_produk">
                                                    <option value="1">Pilih Subdit/Unit ....?</option>
                                                   
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Sub Unit</label>
                                            <div class="col-sm-7">
                                                <select class="select2 form-control" name="pilih_produk" id="edit-pilih_produk">
                                                    <option value="1">Pilih Sub Unit ....?</option>
                                                   
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Nama Karyawan</label>
                                            <div class="col-sm-7">
                                                <select class="select2 form-control" name="pilih_produk" id="edit-pilih_produk">
                                                    <option value="1">Pilih Karyawan ....?</option>
                                                   
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Posisi</label>
                                            <div class="col-sm-7">
                                                <input  readonly class="form-control" name="pilih_produk" id="edit-pilih_produk"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Status Karyawan</label>
                                            <div class="col-sm-7">
                                                <input  readonly class="form-control" name="pilih_produk" id="edit-pilih_produk"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Jenis Pelatihan</label>
                                            <div class="col-sm-7">
                                                <select class="select2 form-control" name="pilih_produk" id="edit-pilih_produk">
                                                    <option value="1">Pilih Jenis Pelatihan ....?</option>
                                                   
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Kompetensi</label>
                                            <div class="col-sm-7">
                                                <select class="select2 form-control" name="pilih_produk" id="edit-pilih_produk">
                                                    <option value="1">Pilih Kompetensi ....?</option>
                                                   
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Nama Pelatihan / Sertifikasi</label>
                                            <div class="col-sm-7">
                                                <select class="select2 form-control" name="pilih_produk" id="edit-pilih_produk">
                                                    <option value="1">Pilih Pelatihan/Sertifikasi ....?</option>
                                                   
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Jenis Development Karyawan</label>
                                            <div class="col-sm-7">
                                                <select class="select2 form-control" name="pilih_produk" id="edit-pilih_produk">
                                                    <option value="1">Pilih Jenis development Karyawan ....?</option>
                                                   
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Metode Pembelajaran</label>
                                            <div class="col-sm-7">
                                                <select class="select2 form-control" name="pilih_produk" id="edit-pilih_produk">
                                                    <option value="1">Pilih ....?</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Objective</label>
                                            <div class="col-sm-7">
                                                <textarea type="text"  name="jenis_rek" id="jenis_rek"  class="form-control input-sm" ></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Justifikasi Pengajuan</label>
                                            <div class="col-sm-7">
                                                <textarea type="text"  name="jenis_rek" id="jenis_rek"  class="form-control input-sm" ></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Nama Penyelenggara</label>
                                            <div class="col-sm-7">
                                                <input  class="form-control" name="pilih_produk" id="edit-pilih_produk"> 
                                            </div>
                                        </div>
                                       
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Estimasi Biaya</label>
                                            <div class="col-sm-7">
                                                <input  class="form-control" name="pilih_produk" id="edit-pilih_produk"> 
                                            </div>
                                        </div>
                                      
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Rencana Waktu Pelaksanaan</label>
                                            <div class="col-sm-7">
                                                <input  class="form-control" name="pilih_produk" id="edit-pilih_produk"> 
                                            </div>
                                        </div>

                                        

                                    </div> <!-- end col-12 -->
                                   
                                </div><!-- end row -->
                              
                               
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                
                                <div class="col-sm-10">
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

    $('.select2').select2({
        placeholder: "Please Select"
    });


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
