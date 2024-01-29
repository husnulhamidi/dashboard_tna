<section class="content">
    <!-- Main row -->
    <div class="row">
        <div class="col-md-12">
            <?php $this->load->view('layouts/alert'); ?>
            <?php // echo '<pre>'; print_r($this->session->userdata()); ?>

            <div class="nav-tabs-custom-aqua">
                <div class="box box-info">
                    
                    <div class="box-header with-border">
                        <div class="col-lg-6">
                            <h3 class="box-title" style="padding-top:5px"><?php echo $title;?></h3>
                        </div>
                        <div class="col-lg-6 ">
                            
                            <div class="pull-right">
                                <button class="btn btn-default btn-sm" data-toggle='modal' data-target='#ModalImportExcel'>
                                    <i class="fa fa-upload"></i> Import Excel
                                </button>
                                <button class="btn btn-default btn-sm" >
                                    <i class="fa fa-download"></i> Export Excel
                                </button>
                                <button class="btn btn-default btn-sm" data-toggle='modal' data-target='#ModalFilter'>
                                    <i class="fa fa-filter"></i> Filter
                                </button>
                                <a href ="<?php echo base_url('tna/create'); ?>"><button class="btn btn-info btn-sm">
                                    <i class="glyphicon glyphicon-plus"></i> Tambah
                                </button></a>
                            </div>
                        </div>
                    </div>
                   

                </div>

                <div class="tab-content"  >
                     
                    <div class="tab-pane active">

                       
                        <div class="row">
                            <div class="col-md-12">
                                <table  class="table table-striped table-bordered table-hover" id="table-bank" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>ID TNA</th>
                                            <th>Nama Pelatihan</th>
                                            <th>NIK</th>
                                            <th>Nama Peserta</th>
                                            <th>Subdit / Unit</th>
                                            <th>Nama Penyelenggara</th>
                                            <th>Metoda</th>
                                            <th>Objective</th>
                                            <th>Kategori</th>
                                            <th>Jenis Pelatihan</th>
                                            <th>Kompetensi</th>
                                            <th>Waktu Pelaksanaan</th>
                                            <th>Estimasi Biaya</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                  
                                       
                                    
                                   
                                    </tbody>
                                </table>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <!-- /.tab-content -->
            </div>
        </div>
    </div>
</section>
<?php 
    $this->load->view('tna/job_family/modal_form_family');
    $this->load->view('tna/common/form_import_excel');
?>
<script type="text/javascript">
     $('#table-bank').DataTable();
      $(document).on("click",".hapus-bank",function(){
        var encrypt = this.value;
        
        swal({
            title: "Yakin Hapus Data ini ?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Ya, Hapus!",
            closeOnConfirm: false
        }, function () {

            $.ajax({
                type : "POST",
                url  : "<?php echo base_url();?>bank/delete/",
                dataType: "JSON",
                data : "data="+encrypt,
                success:function(data){
                    
                    if(data.rc=='0000'){
                        setTimeout(function() {
                            swal({
                                title: "Notification!",
                                text: "Success Delete Data",
                                imageUrl: '<?= base_url("assets/img/success.png");?>'
                            }, function() {
                               location.reload();
                            });
                        }, 1000);
                    }else{
                        setTimeout(function() {
                            swal({
                                title: "Notification!",
                                text: "Delete Failed",
                                imageUrl: '<?= base_url("assets/img/danger-red2.png");?>'
                            }, function() {
                                location.reload();
                            });
                        }, 1000);
                    }
                    
                }

            });
           
        });
            
    });
</script>